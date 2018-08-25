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

use Techworker\CryptoCurrency\Currencies\Nano;

/**
 * Class NanoTest.
 *
 * Tests the Nano crypto currency.
 */
class NanoTest extends AbstractCurrencyTest
{
    /**
     * {@inheritdoc}
     */
    public function provideClass()
    {
        return [[Nano::class]];
    }

    /**
     * {@inheritdoc}
     */
    public function provide()
    {
        return [
            [Nano::class, Nano::RAW, [
                ['1', Nano::RAW],
                ['0.000000000000000001', Nano::U],
                ['0.000000000000000000001', Nano::MICRO],
                ['0.000000000000000000000001', Nano::NANO],
                ['0.000000000000000000000000001', Nano::KILO],
                ['0.000000000000000000000000000001', Nano::MEGA],
                ['0.000000000000000000000000000000001', Nano::GIGA],
            ]],
            [Nano::class, Nano::U, [
                ['1000000000000000000', Nano::RAW],
                ['1', Nano::U],
                ['0.001', Nano::MICRO],
                ['0.000001', Nano::NANO],
                ['0.000000001', Nano::KILO],
                ['0.000000000001', Nano::MEGA],
                ['0.000000000000001', Nano::GIGA],
            ]],
            [Nano::class, Nano::MICRO, [
                ['1000000000000000000000', Nano::RAW],
                ['1000', Nano::U],
                ['1', Nano::MICRO],
                ['0.001', Nano::NANO],
                ['0.000001', Nano::KILO],
                ['0.000000001', Nano::MEGA],
                ['0.000000000001', Nano::GIGA],
            ]],
            [Nano::class, Nano::NANO, [
                ['1000000000000000000000000', Nano::RAW],
                ['1000000', Nano::U],
                ['1000', Nano::MICRO],
                ['1', Nano::NANO],
                ['0.001', Nano::KILO],
                ['0.000001', Nano::MEGA],
                ['0.000000001', Nano::GIGA],
            ]],
            [Nano::class, Nano::KILO, [
                ['1000000000000000000000000000', Nano::RAW],
                ['1000000000', Nano::U],
                ['1000000', Nano::MICRO],
                ['1000', Nano::NANO],
                ['1', Nano::KILO],
                ['0.001', Nano::MEGA],
                ['0.000001', Nano::GIGA],
            ]],
            [Nano::class, Nano::MEGA, [
                ['1000000000000000000000000000000', Nano::RAW],
                ['1000000000000', Nano::U],
                ['1000000000', Nano::MICRO],
                ['1000000', Nano::NANO],
                ['1000', Nano::KILO],
                ['1', Nano::MEGA],
                ['0.001', Nano::GIGA],
            ]],
            [Nano::class, Nano::GIGA, [
                ['1000000000000000000000000000000000', Nano::RAW],
                ['1000000000000000', Nano::U],
                ['1000000000000', Nano::MICRO],
                ['1000000000', Nano::NANO],
                ['1000000', Nano::KILO],
                ['1000', Nano::MEGA],
                ['1', Nano::GIGA],
            ]],
        ];
    }
}
