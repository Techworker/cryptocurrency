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

use Techworker\CryptoCurrency\Currencies\IOTA;

/**
 * Class IOTATest.
 *
 * Tests the IOTA crypto currency.
 */
class IOTATest extends AbstractCurrencyTest
{
    /**
     * {@inheritdoc}
     */
    public function provideClass()
    {
        return [[IOTA::class]];
    }

    /**
     * {@inheritdoc}
     */
    public function provide()
    {
        return [
            [IOTA::class, IOTA::IOTA, [
                ['1', IOTA::IOTA],
                ['0.001', IOTA::KIOTA],
                ['0.000001', IOTA::MIOTA],
                ['0.000000001', IOTA::GIOTA],
                ['0.000000000001', IOTA::TIOTA],
                ['0.000000000000001', IOTA::PIOTA],
            ]],
            [IOTA::class, IOTA::KIOTA, [
                ['1000', IOTA::IOTA],
                ['1', IOTA::KIOTA],
                ['0.001', IOTA::MIOTA],
                ['0.000001', IOTA::GIOTA],
                ['0.000000001', IOTA::TIOTA],
                ['0.000000000001', IOTA::PIOTA],
            ]],
            [IOTA::class, IOTA::MIOTA, [
                ['1000000', IOTA::IOTA],
                ['1000', IOTA::KIOTA],
                ['1', IOTA::MIOTA],
                ['0.001', IOTA::GIOTA],
                ['0.000001', IOTA::TIOTA],
                ['0.000000001', IOTA::PIOTA],
            ]],
            [IOTA::class, IOTA::GIOTA, [
                ['1000000000', IOTA::IOTA],
                ['1000000', IOTA::KIOTA],
                ['1000', IOTA::MIOTA],
                ['1', IOTA::GIOTA],
                ['0.001', IOTA::TIOTA],
                ['0.000001', IOTA::PIOTA],
            ]],
            [IOTA::class, IOTA::TIOTA, [
                ['1000000000000', IOTA::IOTA],
                ['1000000000', IOTA::KIOTA],
                ['1000000', IOTA::MIOTA],
                ['1000', IOTA::GIOTA],
                ['1', IOTA::TIOTA],
                ['0.001', IOTA::PIOTA],
            ]],
            [IOTA::class, IOTA::PIOTA, [
                ['1000000000000000', IOTA::IOTA],
                ['1000000000000', IOTA::KIOTA],
                ['1000000000', IOTA::MIOTA],
                ['1000000', IOTA::GIOTA],
                ['1000', IOTA::TIOTA],
                ['1', IOTA::PIOTA],
            ]],
        ];
    }
}
