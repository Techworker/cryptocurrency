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

namespace Techworker\CryptoCurrency\Currencies;

use Techworker\CryptoCurrency\CryptoCurrency;

/**
 * Class BitcoinCash.
 *
 * This class represents the units for the Bitcoin Cash currency:
 * https://www.bitcoincash.org/
 */
class Monero extends CryptoCurrency
{
    public const PICO = ['piconero', 0, 'Piconero'];
    public const NANO = ['nanonero', 3, 'Nanonero'];
    public const MICRO = ['mirconero', 6, 'Micronero'];
    public const MILLI = ['millinero', 9, 'Millinero'];
    public const CENTI = ['centinero', 10, 'Centinero'];
    public const DECI = ['decinero', 11, 'Decinero'];
    public const MONERO = ['XMR', 12, 'Monero'];
    public const DECA = ['decanero', 13, 'Decanero'];
    public const HECTO = ['hectonero', 14, 'Hectonero'];
    public const KILO = ['kilonero', 15, 'Kilonero'];
    public const MEGA = ['meganero', 18, 'Meganero'];

    /**
     * {@inheritdoc}
     */
    public static function getBaseUnit(): array
    {
        return self::MONERO;
    }

    /**
     * {@inheritdoc}
     */
    public static function getUnits(): array
    {
        return [
            self::PICO,
            self::NANO,
            self::MICRO,
            self::MILLI,
            self::CENTI,
            self::DECI,
            self::MONERO,
            self::DECA,
            self::HECTO,
            self::KILO,
            self::MEGA,
        ];
    }
}
