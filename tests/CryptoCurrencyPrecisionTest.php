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

namespace Techworker\CryptoCurrency\Tests;

use PHPUnit\Framework\TestCase;

/**
 * Class CryptoCurrencyTest.
 */
class CryptoCurrencyPrecisionTest extends TestCase
{
    public function testAdd()
    {
        $units = TestCurrency::getUnits();
        foreach ($units as $unit) {
            $one = new TestCurrency(1, $unit);
            $value = $one->add($one);
            static::assertEquals('2', $value->format($unit));
        }
    }

    public function testSub()
    {
        $units = TestCurrency::getUnits();
        foreach ($units as $unit) {
            $one = new TestCurrency(1, $unit);
            $value = $one->sub($one);
            static::assertEquals('0', $value->format($unit));
        }
    }

    public function testDivideBy()
    {
        $units = TestCurrency::getUnits();
        foreach ($units as $unit) {
            $one = new TestCurrency(2, $unit);
            $value = $one->divideBy(3);
            // smallest unit will suffer
            if ($unit === TestCurrency::getSmallestUnit()) {
                static::assertEquals('0', $value->format($unit));
            } else {
                static::assertEquals('0.'.str_repeat('6', $unit[1]), $value->format($unit));
            }

            $value = $one->divideBy(2);
            // smallest unit will suffer
            static::assertEquals('1', $value->format($unit));
        }
    }

    public function testMultiplyBy()
    {
        $units = TestCurrency::getUnits();
        foreach ($units as $unit) {
            $one = new TestCurrency(2, $unit);
            $value = $one->multiplyBy(3);
            static::assertEquals('6', $value->format($unit));

            // smallest unit will suffer
            $value = $one->multiplyBy(1.6);
            if ($unit === TestCurrency::getSmallestUnit()) {
                static::assertEquals('3', $value->format($unit));
            } else {
                static::assertEquals('3.2', $value->format($unit));
            }
        }
    }
}
