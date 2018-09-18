<?php

declare(strict_types=1);

/*
 * This file is part of the Techworker\CryptoCurrency package.
 *
 * (c) Benjamin Ansbach <benjaminansbach@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Techworker\CryptoCurrency;

/**
 * Class CryptoCurrency.
 *
 * A value object to work with currency values and its denominations.
 */
abstract class CryptoCurrency
{
    /**
     * The current value.
     *
     * @var string
     */
    protected $value;

    /**
     * The initial unit.
     *
     * @var array
     */
    protected $initialUnit;

    /**
     * AbstractCurrency constructor.
     *
     * @param CryptoCurrency|float|int|string $value
     * @param array                           $unit
     */
    public function __construct($value, array $unit = null)
    {
        if ($value instanceof static) {
            $value = $value->value;
        }

        // if there is no unit given, we will think its the base unit
        if ($unit === null || $unit === static::getBaseUnit()) {
            $this->initialUnit = static::getBaseUnit();
            $this->value = (string) $value;
        } else {
            $this->checkUnit($unit);
            $this->initialUnit = $unit;
            // its not the base unit, its another and we have to convert
            // it to the base unit
            $this->value = (string) $value;
            $this->value = $this->convert($unit, static::getBaseUnit());
        }
    }

    /**
     * Gets the current value as a string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->value;
    }

    /**
     * Gets the current value.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Formats the current value in the given unit or, if omitted, in the base
     * unit. If a precision is supplied, the value will be rounded to that
     * precision.
     *
     * @param null|array $unit
     * @param null|int   $precision
     * @param string     $decPoint
     * @param string     $thousandsSep
     *
     * @return string
     */
    public function format(array $unit = null, int $precision = null, string $decPoint = '.', string $thousandsSep = null)
    {
        if ($unit !== null) {
            $this->checkUnit($unit);
            // first convert the value to destination unit
            $value = $this->convert(static::getBaseUnit(), $unit);
        } else {
            $value = $this->getValue();
            $unit = static::getBaseUnit();
        }

        $removeTrails = false;
        if ($precision === null) {
            $precision = $this->getUnitPow($unit);
            $removeTrails = true;
        }

        $value = static::round($value, $precision);

        list($int, $fraction) = array_pad(explode('.', $value), 2, '');

        // this will lead to errors on the user side. If this is intended he
        // can still remove the default decimal point afterwards.
        if (empty($decPoint) && $fraction !== '') {
            trigger_error(
                'The current value has a fraction. Please provide a decimal point separator.',
                E_USER_WARNING
            );
        }

        if ($removeTrails === true && $fraction !== '') {
            $fraction = rtrim($fraction, '0');
        }

        if ($removeTrails === false && strlen($fraction) !== $precision) {
            $fraction = str_pad($fraction, $precision, '0', STR_PAD_RIGHT);
        }

        if($thousandsSep !== '') {
            $int = preg_replace('/\B(?=(?:\d{3})+(?!\d))/', $thousandsSep, $int);
        }

        return $int.($fraction === '' ? '' : $decPoint).$fraction;
    }

    /**
     * Gets the best matching unit to be used to, eg. format a value.
     *
     * @return array
     */
    public function getBestMatchingUnit(): array
    {
        $units = static::getUnits();
        $prev = null;
        $prevUnit = null;
        foreach ($units as $unit) {
            $v = $this->format($unit, null, '.', '');
            if ($v[0] === '0') {
                if ($prev === null) {
                    return $unit;
                }

                return $prevUnit;
            }
            $prev = $v;
            $prevUnit = $unit;
        }

        return $this->getBaseUnit();
    }

    /**
     * Returns a new instance with the given value added to the current value.
     *
     * @param CryptoCurrency $value
     *
     * @return CryptoCurrency
     */
    public function add(self $value): self
    {
        return new static(\bcadd($this->value, $value->value, static::getBaseUnit()[1]));
    }

    /**
     * Returns a new instance with the given value subtracted from the current value.
     *
     * @param CryptoCurrency $value
     *
     * @return CryptoCurrency
     */
    public function sub(self $value): self
    {
        return new static(\bcsub($this->value, $value->value, $this->getUnitPow(static::getBaseUnit())));
    }

    /**
     * Returns a new instance with the current value multiplied by the multiplier.
     *
     * @param mixed $multiplier
     *
     * @return CryptoCurrency
     */
    public function multiplyBy($multiplier): self
    {
        return new static(
            \bcmul($this->value, (string) $multiplier, $this->getUnitPow(static::getBaseUnit()))
        );
    }

    /**
     * Returns a new instance with the current value divided by the divisor.
     *
     * @param mixed $divisor
     *
     * @return CryptoCurrency
     */
    public function divideBy($divisor): self
    {
        return new static(
            \bcdiv($this->value, (string) $divisor, $this->getUnitPow(static::getBaseUnit()))
        );
    }

    /**
     * Gets a value indicating whether the current value is lower than the
     * given value.
     *
     * @param CryptoCurrency $value
     *
     * @return bool
     */
    public function lt(self $value): bool
    {
        return \bccomp(
                $this->value,
                $value->value,
                $this->getUnitPow(static::getBaseUnit())
            ) < 0;
    }

    /**
     * Gets a value indicating whether the current value is greater than the
     * given value.
     *
     * @param CryptoCurrency $value
     *
     * @return bool
     */
    public function gt(self $value): bool
    {
        return \bccomp(
                $this->value,
                $value->value,
                $this->getUnitPow(static::getBaseUnit())
            ) > 0;
    }

    /**
     * Gets a value indicating whether the current value is greater or equals the
     * given value.
     *
     * @param CryptoCurrency $value
     *
     * @return bool
     */
    public function gteq(self $value): bool
    {
        return \bccomp(
                $this->value,
                $value->value,
                $this->getUnitPow(static::getBaseUnit())
            ) >= 0;
    }

    /**
     * Gets a value indicating whether the current value is lower or equals the
     * given value.
     *
     * @param CryptoCurrency $value
     *
     * @return bool
     */
    public function lteq(self $value): bool
    {
        return \bccomp(
                $this->value,
                $value->value,
                $this->getUnitPow(static::getBaseUnit())
            ) <= 0;
    }

    /**
     * Gets a value indicating whether the current value equals the given value.
     *
     * @param CryptoCurrency $value
     *
     * @return bool
     */
    public function eq(self $value): bool
    {
        return \bccomp(
                $this->value,
                $value->value,
                $this->getUnitPow(static::getBaseUnit())
            ) === 0;
    }

    /**
     * Gets a value indicating whether the current value does not equal the
     * given value.
     *
     * @param CryptoCurrency $value
     *
     * @return bool
     */
    public function neq(self $value): bool
    {
        return \bccomp(
                $this->value,
                $value->value,
                $this->getUnitPow(static::getBaseUnit())
            ) !== 0;
    }

    /**
     * Gets a value indicating whether the current value is negative.
     *
     * @return bool
     */
    public function isNeg(): bool
    {
        return $this->lt($this->zero());
    }

    /**
     * Gets a value indicating whether the current value is positive.
     *
     * @return bool
     */
    public function isPos(): bool
    {
        return $this->gt($this->zero());
    }

    /**
     * Gets a value indicating whether the current value is zero.
     *
     * @return bool
     */
    public function isZero(): bool
    {
        return $this->eq($this->zero());
    }

    /**
     * Gets a zero value instance.
     *
     * @return CryptoCurrency
     */
    public function zero(): self
    {
        return new static('0');
    }

    /**
     * Gets the name of the unit. If the unit is not given, it will use the
     * base unit.
     *
     * @param null|array $unit
     *
     * @return string
     */
    public function getUnitName(array $unit = null): string
    {
        if ($unit === null) {
            $unit = $this->getBaseUnit();
        }

        return $unit[2];
    }

    /**
     * Gets the pow of the unit. If the unit is not given, it will use the
     * base unit.
     *
     * @param null|array $unit
     *
     * @return int
     */
    public function getUnitPow(array $unit = null): int
    {
        if ($unit === null) {
            $unit = $this->getBaseUnit();
        }

        return $unit[1];
    }

    /**
     * Gets the abbreviation of the unit. If the unit is not given, it will
     * use the base unit.
     *
     * @param null|array $unit
     *
     * @return string
     */
    public function getUnitAbbreviation(array $unit = null): string
    {
        if ($unit === null) {
            $unit = $this->getBaseUnit();
        }

        return $unit[0];
    }

    /**
     * Gets the largest unit.
     *
     * @return array
     */
    public static function getBiggestUnit(): array
    {
        $units = static::getUnits();

        return end($units);
    }

    /**
     * Gets the smallest unit.
     *
     * @return array
     */
    public static function getSmallestUnit(): array
    {
        return static::getUnits()[0];
    }

    /**
     * Gets the base unit.
     *
     * @return array
     */
    abstract public static function getBaseUnit(): array;

    /**
     * Gets the list of all units.
     *
     * @return array
     */
    abstract public static function getUnits(): array;

    /**
     * Rounds the current value to the given precision.
     *
     * @param string $value
     * @param int    $precision
     *
     * @return string
     */
    protected static function round(string $value, int $precision): string
    {
        if (strpos($value, '.') === false) {
            return $value;
        }

        if ($value[0] !== '-') {
            return \bcadd(
                $value,
                '0.'.str_repeat('0', $precision).'5',
                $precision
            );
        }

        return \bcsub(
            $value,
            '0.'.str_repeat('0', $precision).'5',
            $precision
        );
    }

    /**
     * Converts the current value to a vlue mathing the toUnit.
     *
     * @param array $toUnit
     *
     * @return string
     */
    protected function convert(array $fromUnit, array $toUnit): string
    {
        if ($this->getUnitAbbreviation($fromUnit) === $this->getUnitAbbreviation($toUnit)) {
            return $this->value;
        }

        $fromPow = $this->getUnitPow($fromUnit);
        $toPow = $this->getUnitPow($toUnit);
        $pow = ($fromPow - $toPow) * -1;
        if ($fromPow >= $toPow) {
            $pow = $toPow - $fromPow;
        }
        $scale = $toPow;

        return \bcdiv(
            $this->value,
            \bcpow('10', (string) $pow, $this->getUnitPow(static::getBiggestUnit())),
            $scale
        );
    }

    /**
     * Checks if the given unit exists in the list of units.
     *
     * @param array $unit
     *
     * @throws \Exception
     */
    protected function checkUnit(array $unit): void
    {
        if (!\in_array($unit, static::getUnits(), true)) {
            throw new \InvalidArgumentException('This unit is not known by the currency.');
        }
    }
}
