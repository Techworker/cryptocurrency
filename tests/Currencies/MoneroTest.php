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

use Techworker\CryptoCurrency\Currencies\Monero;
use Techworker\CryptoCurrency\Currencies\Nano;

/**
 * Class MoneroTest.
 *
 * Tests the Monero crypto currency.
 */
class MoneroTest extends AbstractCurrencyTest
{
    /**
     * {@inheritdoc}
     */
    public function provideClass()
    {
        return [[Monero::class]];
    }

    /**
     * {@inheritdoc}
     */
    public function provide()
    {
        return [
            [Monero::class, Monero::PICO, [
                ['1', Monero::PICO],
                ['0.001', Monero::NANO],
                ['0.000001', Monero::MICRO],
                ['0.000000001', Monero::MILLI],
                ['0.0000000001', Monero::CENTI],
                ['0.00000000001', Monero::DECI],
                ['0.000000000001', Monero::MONERO],
                ['0.0000000000001', Monero::DECA],
                ['0.00000000000001', Monero::HECTO],
                ['0.000000000000001', Monero::KILO],
                ['0.000000000000000001', Monero::MEGA],
            ]],
            [Monero::class, Monero::NANO, [
                ['1000', Monero::PICO],
                ['1', Monero::NANO],
                ['0.001', Monero::MICRO],
                ['0.000001', Monero::MILLI],
                ['0.0000001', Monero::CENTI],
                ['0.00000001', Monero::DECI],
                ['0.000000001', Monero::MONERO],
                ['0.0000000001', Monero::DECA],
                ['0.00000000001', Monero::HECTO],
                ['0.000000000001', Monero::KILO],
                ['0.000000000000001', Monero::MEGA],
            ]],
            [Monero::class, Monero::MICRO, [
                ['1000000', Monero::PICO],
                ['1000', Monero::NANO],
                ['1', Monero::MICRO],
                ['0.001', Monero::MILLI],
                ['0.0001', Monero::CENTI],
                ['0.00001', Monero::DECI],
                ['0.000001', Monero::MONERO],
                ['0.0000001', Monero::DECA],
                ['0.00000001', Monero::HECTO],
                ['0.000000001', Monero::KILO],
                ['0.000000000001', Monero::MEGA],
            ]],
            [Monero::class, Monero::MILLI, [
                ['1000000000', Monero::PICO],
                ['1000000', Monero::NANO],
                ['1000', Monero::MICRO],
                ['1', Monero::MILLI],
                ['0.1', Monero::CENTI],
                ['0.01', Monero::DECI],
                ['0.001', Monero::MONERO],
                ['0.0001', Monero::DECA],
                ['0.00001', Monero::HECTO],
                ['0.000001', Monero::KILO],
                ['0.000000001', Monero::MEGA],
            ]],
            [Monero::class, Monero::CENTI, [
                ['10000000000', Monero::PICO],
                ['10000000', Monero::NANO],
                ['10000', Monero::MICRO],
                ['10', Monero::MILLI],
                ['1', Monero::CENTI],
                ['0.1', Monero::DECI],
                ['0.01', Monero::MONERO],
                ['0.001', Monero::DECA],
                ['0.0001', Monero::HECTO],
                ['0.00001', Monero::KILO],
                ['0.00000001', Monero::MEGA],
            ]],
            [Monero::class, Monero::DECI, [
                ['100000000000', Monero::PICO],
                ['100000000', Monero::NANO],
                ['100000', Monero::MICRO],
                ['100', Monero::MILLI],
                ['10', Monero::CENTI],
                ['1', Monero::DECI],
                ['0.1', Monero::MONERO],
                ['0.01', Monero::DECA],
                ['0.001', Monero::HECTO],
                ['0.0001', Monero::KILO],
                ['0.0000001', Monero::MEGA],
            ]],
            [Monero::class, Monero::MONERO, [
                ['1000000000000', Monero::PICO],
                ['1000000000', Monero::NANO],
                ['1000000', Monero::MICRO],
                ['1000', Monero::MILLI],
                ['100', Monero::CENTI],
                ['10', Monero::DECI],
                ['1', Monero::MONERO],
                ['0.1', Monero::DECA],
                ['0.01', Monero::HECTO],
                ['0.001', Monero::KILO],
                ['0.000001', Monero::MEGA],
            ]],
            [Monero::class, Monero::DECA, [
                ['10000000000000', Monero::PICO],
                ['10000000000', Monero::NANO],
                ['10000000', Monero::MICRO],
                ['10000', Monero::MILLI],
                ['1000', Monero::CENTI],
                ['100', Monero::DECI],
                ['10', Monero::MONERO],
                ['1', Monero::DECA],
                ['0.1', Monero::HECTO],
                ['0.01', Monero::KILO],
                ['0.00001', Monero::MEGA],
            ]],
            [Monero::class, Monero::HECTO, [
                ['100000000000000', Monero::PICO],
                ['100000000000', Monero::NANO],
                ['100000000', Monero::MICRO],
                ['100000', Monero::MILLI],
                ['10000', Monero::CENTI],
                ['1000', Monero::DECI],
                ['100', Monero::MONERO],
                ['10', Monero::DECA],
                ['1', Monero::HECTO],
                ['0.1', Monero::KILO],
                ['0.0001', Monero::MEGA],
            ]],
            [Monero::class, Monero::KILO, [
                ['1000000000000000', Monero::PICO],
                ['1000000000000', Monero::NANO],
                ['1000000000', Monero::MICRO],
                ['1000000', Monero::MILLI],
                ['100000', Monero::CENTI],
                ['10000', Monero::DECI],
                ['1000', Monero::MONERO],
                ['100', Monero::DECA],
                ['10', Monero::HECTO],
                ['1', Monero::KILO],
                ['0.001', Monero::MEGA],
            ]],
            [Monero::class, Monero::MEGA, [
                ['1000000000000000000', Monero::PICO],
                ['1000000000000000', Monero::NANO],
                ['1000000000000', Monero::MICRO],
                ['1000000000', Monero::MILLI],
                ['100000000', Monero::CENTI],
                ['10000000', Monero::DECI],
                ['1000000', Monero::MONERO],
                ['100000', Monero::DECA],
                ['10000', Monero::HECTO],
                ['1000', Monero::KILO],
                ['1', Monero::MEGA],
            ]],
        ];
    }
}
