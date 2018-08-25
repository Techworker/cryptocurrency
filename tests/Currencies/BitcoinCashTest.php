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
use Techworker\CryptoCurrency\Currencies\BitcoinCash;

/**
 * Class BitcoinCashTest.
 *
 * Tests the Bitcoin Cash crypto currency.
 */
class BitcoinCashTest extends AbstractCurrencyTest
{
    /**
     * {@inheritdoc}
     */
    public function provideClass()
    {
        return [[BitcoinCash::class]];
    }

    /**
     * {@inheritdoc}
     */
    public function provide()
    {
        return [
            [BitcoinCash::class, BitcoinCash::SATOSHI, [
                ['1', BitcoinCash::SATOSHI],
                ['0.1', BitcoinCash::FINNEY],
                ['0.01', BitcoinCash::MICRO],
                ['0.00001', BitcoinCash::MILLI],
                ['0.000001', BitcoinCash::CENTI],
                ['0.0000001', BitcoinCash::DECI],
                ['0.00000001', BitcoinCash::BITCOIN_CASH],
                ['0.000000001', BitcoinCash::DECA],
                ['0.0000000001', BitcoinCash::HECTO],
                ['0.00000000001', BitcoinCash::KILO],
                ['0.00000000000001', BitcoinCash::MEGA],
            ]],
            [BitcoinCash::class, BitcoinCash::FINNEY, [
                ['10', BitcoinCash::SATOSHI],
                ['1', BitcoinCash::FINNEY],
                ['0.1', BitcoinCash::MICRO],
                ['0.0001', BitcoinCash::MILLI],
                ['0.00001', BitcoinCash::CENTI],
                ['0.000001', BitcoinCash::DECI],
                ['0.0000001', BitcoinCash::BITCOIN_CASH],
                ['0.00000001', BitcoinCash::DECA],
                ['0.000000001', BitcoinCash::HECTO],
                ['0.0000000001', BitcoinCash::KILO],
                ['0.0000000000001', BitcoinCash::MEGA],
            ]],
            [BitcoinCash::class, BitcoinCash::MICRO, [
                ['100', BitcoinCash::SATOSHI],
                ['10', BitcoinCash::FINNEY],
                ['1', BitcoinCash::MICRO],
                ['0.001', BitcoinCash::MILLI],
                ['0.0001', BitcoinCash::CENTI],
                ['0.00001', BitcoinCash::DECI],
                ['0.000001', BitcoinCash::BITCOIN_CASH],
                ['0.0000001', BitcoinCash::DECA],
                ['0.00000001', BitcoinCash::HECTO],
                ['0.000000001', BitcoinCash::KILO],
                ['0.000000000001', BitcoinCash::MEGA],
            ]],
            [BitcoinCash::class, BitcoinCash::MILLI, [
                ['100000', BitcoinCash::SATOSHI],
                ['10000', BitcoinCash::FINNEY],
                ['1000', BitcoinCash::MICRO],
                ['1', BitcoinCash::MILLI],
                ['0.1', BitcoinCash::CENTI],
                ['0.01', BitcoinCash::DECI],
                ['0.001', BitcoinCash::BITCOIN_CASH],
                ['0.0001', BitcoinCash::DECA],
                ['0.00001', BitcoinCash::HECTO],
                ['0.000001', BitcoinCash::KILO],
                ['0.000000001', BitcoinCash::MEGA],
            ]],
            [BitcoinCash::class, BitcoinCash::CENTI, [
                ['1000000', BitcoinCash::SATOSHI],
                ['100000', BitcoinCash::FINNEY],
                ['10000', BitcoinCash::MICRO],
                ['10', BitcoinCash::MILLI],
                ['1', BitcoinCash::CENTI],
                ['0.1', BitcoinCash::DECI],
                ['0.01', BitcoinCash::BITCOIN_CASH],
                ['0.001', BitcoinCash::DECA],
                ['0.0001', BitcoinCash::HECTO],
                ['0.00001', BitcoinCash::KILO],
                ['0.00000001', BitcoinCash::MEGA],
            ]],
            [BitcoinCash::class, BitcoinCash::DECI, [
                ['10000000', BitcoinCash::SATOSHI],
                ['1000000', BitcoinCash::FINNEY],
                ['100000', BitcoinCash::MICRO],
                ['100', BitcoinCash::MILLI],
                ['10', BitcoinCash::CENTI],
                ['1', BitcoinCash::DECI],
                ['0.1', BitcoinCash::BITCOIN_CASH],
                ['0.01', BitcoinCash::DECA],
                ['0.001', BitcoinCash::HECTO],
                ['0.0001', BitcoinCash::KILO],
                ['0.0000001', BitcoinCash::MEGA],
            ]],
            [BitcoinCash::class, BitcoinCash::BITCOIN_CASH, [
                ['100000000', BitcoinCash::SATOSHI],
                ['10000000', BitcoinCash::FINNEY],
                ['1000000', BitcoinCash::MICRO],
                ['1000', BitcoinCash::MILLI],
                ['100', BitcoinCash::CENTI],
                ['10', BitcoinCash::DECI],
                ['1', BitcoinCash::BITCOIN_CASH],
                ['0.1', BitcoinCash::DECA],
                ['0.01', BitcoinCash::HECTO],
                ['0.001', BitcoinCash::KILO],
                ['0.000001', BitcoinCash::MEGA],
            ]],
            [BitcoinCash::class, BitcoinCash::DECA, [
                ['1000000000', BitcoinCash::SATOSHI],
                ['100000000', BitcoinCash::FINNEY],
                ['10000000', BitcoinCash::MICRO],
                ['10000', BitcoinCash::MILLI],
                ['1000', BitcoinCash::CENTI],
                ['100', BitcoinCash::DECI],
                ['10', BitcoinCash::BITCOIN_CASH],
                ['1', BitcoinCash::DECA],
                ['0.1', BitcoinCash::HECTO],
                ['0.01', BitcoinCash::KILO],
                ['0.00001', BitcoinCash::MEGA],
            ]],
            [BitcoinCash::class, BitcoinCash::HECTO, [
                ['10000000000', BitcoinCash::SATOSHI],
                ['1000000000', BitcoinCash::FINNEY],
                ['100000000', BitcoinCash::MICRO],
                ['100000', BitcoinCash::MILLI],
                ['10000', BitcoinCash::CENTI],
                ['1000', BitcoinCash::DECI],
                ['100', BitcoinCash::BITCOIN_CASH],
                ['10', BitcoinCash::DECA],
                ['1', BitcoinCash::HECTO],
                ['0.1', BitcoinCash::KILO],
                ['0.0001', BitcoinCash::MEGA],
            ]],
            [BitcoinCash::class, BitcoinCash::KILO, [
                ['100000000000', BitcoinCash::SATOSHI],
                ['10000000000', BitcoinCash::FINNEY],
                ['1000000000', BitcoinCash::MICRO],
                ['1000000', BitcoinCash::MILLI],
                ['100000', BitcoinCash::CENTI],
                ['10000', BitcoinCash::DECI],
                ['1000', BitcoinCash::BITCOIN_CASH],
                ['100', BitcoinCash::DECA],
                ['10', BitcoinCash::HECTO],
                ['1', BitcoinCash::KILO],
                ['0.001', BitcoinCash::MEGA],
            ]],
            [BitcoinCash::class, BitcoinCash::MEGA, [
                ['100000000000000', BitcoinCash::SATOSHI],
                ['10000000000000', BitcoinCash::FINNEY],
                ['1000000000000', BitcoinCash::MICRO],
                ['1000000000', BitcoinCash::MILLI],
                ['100000000', BitcoinCash::CENTI],
                ['10000000', BitcoinCash::DECI],
                ['1000000', BitcoinCash::BITCOIN_CASH],
                ['100000', BitcoinCash::DECA],
                ['10000', BitcoinCash::HECTO],
                ['1000', BitcoinCash::KILO],
                ['1', BitcoinCash::MEGA],
            ]],
        ];
    }
}
