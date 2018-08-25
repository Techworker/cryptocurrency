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

use Techworker\CryptoCurrency\Currencies\Ripple;

/**
 * Class RippleTest.
 *
 * Tests the Ripple crypto currency.
 */
class RippleTest extends AbstractCurrencyTest
{
    /**
     * {@inheritdoc}
     */
    public function provideClass()
    {
        return [[Ripple::class]];
    }

    /**
     * {@inheritdoc}
     */
    public function provide()
    {
        return [
            [Ripple::class, Ripple::DROP, [
                ['1', Ripple::DROP],
                ['0.000001', Ripple::XRP],
            ]],
            [Ripple::class, Ripple::XRP, [
                ['1000000', Ripple::DROP],
                ['1', Ripple::XRP],
            ]],
        ];
    }
}
