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

use Techworker\CryptoCurrency\Currencies\Cardano;

/**
 * Class CardanoTest.
 *
 * Tests the Cardano crypto currency.
 */
class CardanoTest extends AbstractCurrencyTest
{
    /**
     * {@inheritdoc}
     */
    public function provideClass()
    {
        return [[Cardano::class]];
    }

    /**
     * {@inheritdoc}
     */
    public function provide()
    {
        return [
            [Cardano::class, Cardano::LOVELACE, [
                ['1', Cardano::LOVELACE],
                ['0.000001', Cardano::CARDANO],
            ]],
            [Cardano::class, Cardano::CARDANO, [
                ['1000000', Cardano::LOVELACE],
                ['1', Cardano::CARDANO],
            ]],

        ];
    }
}
