<?php

declare(strict_types=1);

/*
 * This file is part of the Techworker\CryptoCurrency package.A
 *
 * (c) Benjamin Ansbach <benjaminansbach@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Techworker\CryptoCurrency\Tests\Currencies;

use Techworker\CryptoCurrency\Currencies\PascalCoin;

/**
 * Class PascalCoinTest.
 *
 * Tests the PascalCoin crypto currency.
 */
class PascalCoinTest extends AbstractCurrencyTest
{
    /**
     * {@inheritdoc}
     */
    public function provideClass()
    {
        return [[PascalCoin::class]];
    }

    /**
     * {@inheritdoc}
     */
    public function provide()
    {
        return [
            [PascalCoin::class, PascalCoin::PASC, [
                ['1', PascalCoin::PASC],
            ]],
        ];
    }
}
