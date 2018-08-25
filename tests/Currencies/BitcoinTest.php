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

use Techworker\CryptoCurrency\Currencies\Bitcoin;

/**
 * Class BitcoinTest.
 *
 * Tests the Bitcoin crypto currency.
 */
class BitcoinTest extends AbstractCurrencyTest
{
    /**
     * {@inheritdoc}
     */
    public function provideClass()
    {
        return [[Bitcoin::class]];
    }

    /**
     * {@inheritdoc}
     */
    public function provide()
    {
        return [
            [Bitcoin::class, Bitcoin::SATOSHI, [
                ['1', Bitcoin::SATOSHI],
                ['0.1', Bitcoin::FINNEY],
                ['0.01', Bitcoin::MICRO],
                ['0.00001', Bitcoin::MILLI],
                ['0.000001', Bitcoin::CENTI],
                ['0.0000001', Bitcoin::DECI],
                ['0.00000001', Bitcoin::BITCOIN],
                ['0.000000001', Bitcoin::DECA],
                ['0.0000000001', Bitcoin::HECTO],
                ['0.00000000001', Bitcoin::KILO],
                ['0.00000000000001', Bitcoin::MEGA],
            ]],
            [Bitcoin::class, Bitcoin::FINNEY, [
                ['10', Bitcoin::SATOSHI],
                ['1', Bitcoin::FINNEY],
                ['0.1', Bitcoin::MICRO],
                ['0.0001', Bitcoin::MILLI],
                ['0.00001', Bitcoin::CENTI],
                ['0.000001', Bitcoin::DECI],
                ['0.0000001', Bitcoin::BITCOIN],
                ['0.00000001', Bitcoin::DECA],
                ['0.000000001', Bitcoin::HECTO],
                ['0.0000000001', Bitcoin::KILO],
                ['0.0000000000001', Bitcoin::MEGA],
            ]],
            [Bitcoin::class, Bitcoin::MICRO, [
                ['100', Bitcoin::SATOSHI],
                ['10', Bitcoin::FINNEY],
                ['1', Bitcoin::MICRO],
                ['0.001', Bitcoin::MILLI],
                ['0.0001', Bitcoin::CENTI],
                ['0.00001', Bitcoin::DECI],
                ['0.000001', Bitcoin::BITCOIN],
                ['0.0000001', Bitcoin::DECA],
                ['0.00000001', Bitcoin::HECTO],
                ['0.000000001', Bitcoin::KILO],
                ['0.000000000001', Bitcoin::MEGA],
            ]],
            [Bitcoin::class, Bitcoin::MILLI, [
                ['100000', Bitcoin::SATOSHI],
                ['10000', Bitcoin::FINNEY],
                ['1000', Bitcoin::MICRO],
                ['1', Bitcoin::MILLI],
                ['0.1', Bitcoin::CENTI],
                ['0.01', Bitcoin::DECI],
                ['0.001', Bitcoin::BITCOIN],
                ['0.0001', Bitcoin::DECA],
                ['0.00001', Bitcoin::HECTO],
                ['0.000001', Bitcoin::KILO],
                ['0.000000001', Bitcoin::MEGA],
            ]],
            [Bitcoin::class, Bitcoin::CENTI, [
                ['1000000', Bitcoin::SATOSHI],
                ['100000', Bitcoin::FINNEY],
                ['10000', Bitcoin::MICRO],
                ['10', Bitcoin::MILLI],
                ['1', Bitcoin::CENTI],
                ['0.1', Bitcoin::DECI],
                ['0.01', Bitcoin::BITCOIN],
                ['0.001', Bitcoin::DECA],
                ['0.0001', Bitcoin::HECTO],
                ['0.00001', Bitcoin::KILO],
                ['0.00000001', Bitcoin::MEGA],
            ]],
            [Bitcoin::class, Bitcoin::DECI, [
                ['10000000', Bitcoin::SATOSHI],
                ['1000000', Bitcoin::FINNEY],
                ['100000', Bitcoin::MICRO],
                ['100', Bitcoin::MILLI],
                ['10', Bitcoin::CENTI],
                ['1', Bitcoin::DECI],
                ['0.1', Bitcoin::BITCOIN],
                ['0.01', Bitcoin::DECA],
                ['0.001', Bitcoin::HECTO],
                ['0.0001', Bitcoin::KILO],
                ['0.0000001', Bitcoin::MEGA],
            ]],
            [Bitcoin::class, Bitcoin::BITCOIN, [
                ['100000000', Bitcoin::SATOSHI],
                ['10000000', Bitcoin::FINNEY],
                ['1000000', Bitcoin::MICRO],
                ['1000', Bitcoin::MILLI],
                ['100', Bitcoin::CENTI],
                ['10', Bitcoin::DECI],
                ['1', Bitcoin::BITCOIN],
                ['0.1', Bitcoin::DECA],
                ['0.01', Bitcoin::HECTO],
                ['0.001', Bitcoin::KILO],
                ['0.000001', Bitcoin::MEGA],
            ]],
            [Bitcoin::class, Bitcoin::DECA, [
                ['1000000000', Bitcoin::SATOSHI],
                ['100000000', Bitcoin::FINNEY],
                ['10000000', Bitcoin::MICRO],
                ['10000', Bitcoin::MILLI],
                ['1000', Bitcoin::CENTI],
                ['100', Bitcoin::DECI],
                ['10', Bitcoin::BITCOIN],
                ['1', Bitcoin::DECA],
                ['0.1', Bitcoin::HECTO],
                ['0.01', Bitcoin::KILO],
                ['0.00001', Bitcoin::MEGA],
            ]],
            [Bitcoin::class, Bitcoin::HECTO, [
                ['10000000000', Bitcoin::SATOSHI],
                ['1000000000', Bitcoin::FINNEY],
                ['100000000', Bitcoin::MICRO],
                ['100000', Bitcoin::MILLI],
                ['10000', Bitcoin::CENTI],
                ['1000', Bitcoin::DECI],
                ['100', Bitcoin::BITCOIN],
                ['10', Bitcoin::DECA],
                ['1', Bitcoin::HECTO],
                ['0.1', Bitcoin::KILO],
                ['0.0001', Bitcoin::MEGA],
            ]],
            [Bitcoin::class, Bitcoin::KILO, [
                ['100000000000', Bitcoin::SATOSHI],
                ['10000000000', Bitcoin::FINNEY],
                ['1000000000', Bitcoin::MICRO],
                ['1000000', Bitcoin::MILLI],
                ['100000', Bitcoin::CENTI],
                ['10000', Bitcoin::DECI],
                ['1000', Bitcoin::BITCOIN],
                ['100', Bitcoin::DECA],
                ['10', Bitcoin::HECTO],
                ['1', Bitcoin::KILO],
                ['0.001', Bitcoin::MEGA],
            ]],
            [Bitcoin::class, Bitcoin::MEGA, [
                ['100000000000000', Bitcoin::SATOSHI],
                ['10000000000000', Bitcoin::FINNEY],
                ['1000000000000', Bitcoin::MICRO],
                ['1000000000', Bitcoin::MILLI],
                ['100000000', Bitcoin::CENTI],
                ['10000000', Bitcoin::DECI],
                ['1000000', Bitcoin::BITCOIN],
                ['100000', Bitcoin::DECA],
                ['10000', Bitcoin::HECTO],
                ['1000', Bitcoin::KILO],
                ['1', Bitcoin::MEGA],
            ]],
        ];
    }
}
