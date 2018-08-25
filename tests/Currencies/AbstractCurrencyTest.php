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

namespace Techworker\CryptoCurrency\Tests\Currencies;

use PHPUnit\Framework\TestCase;

/**
 * Class AbstractCurrencyTest.
 *
 * Abstract class for currency tests.
 */
abstract class AbstractCurrencyTest extends TestCase
{
    /**
     * Provides units with test data.
     *
     * @return mixed
     */
    abstract public function provide();

    /**
     * Data provider that the currency class to test.
     *
     * @return array
     */
    abstract public function provideClass();

    /**
     * Just a simple test that checks if the number of defined units in the
     * class matches the number of units returned by the static getUnits()
     * implementation.
     *
     * @dataProvider provideClass()
     */
    public function testGetUnits(string $currencyClass)
    {
        $r = new \ReflectionClass($currencyClass);
        $constants = $r->getConstants();
        $units = call_user_func($currencyClass.'::getUnits');
        static::assertEquals(count($units), count($constants));
    }

    /**
     * Checks whether there is a valid return value from the static
     * getBaseUnit() implementation.
     *
     * @dataProvider provideClass()
     */
    public function testGetBaseUnit(string $currencyClass)
    {
        $baseUnit = call_user_func($currencyClass.'::getBaseUnit');
        new $currencyClass(1, $baseUnit);
        static::assertTrue(true);
    }

    /**
     * @dataProvider provide()
     *
     * @param mixed $currencyClass
     * @param mixed $initUnit
     * @param mixed $expectations
     */
    public function testCurrency($currencyClass, $initUnit, $expectations)
    {
        /** @var \Techworker\CryptoCurrency\CryptoCurrency $value */
        $value = new $currencyClass(1, $initUnit);
        foreach ($expectations as $expectation) {
            $targetResult = $expectation[0];
            $targetUnit = $expectation[1];
            static::assertEquals($targetResult, $value->format($targetUnit));
        }
    }
}
