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

use Techworker\CryptoCurrency\Currencies\Litecoin;

/**
 * Class LitecoinTest.
 *
 * Tests the Litecoin crypto currency.
 */
class LitecoinTest extends AbstractCurrencyTest
{
    /**
     * {@inheritdoc}
     */
    public function provideClass()
    {
        return [[Litecoin::class]];
    }

    /**
     * {@inheritdoc}
     */
    public function provide()
    {
        return [
            [Litecoin::class, Litecoin::PHOTONS, [
                ['1', Litecoin::PHOTONS],
                ['0.001', Litecoin::LITES],
                ['0.000001', Litecoin::LITECOIN],
            ]],
            [Litecoin::class, Litecoin::LITES, [
                ['1000', Litecoin::PHOTONS],
                ['1', Litecoin::LITES],
                ['0.001', Litecoin::LITECOIN],
            ]],
            [Litecoin::class, Litecoin::LITECOIN, [
                ['1000000', Litecoin::PHOTONS],
                ['1000', Litecoin::LITES],
                ['1', Litecoin::LITECOIN],
            ]],

        ];
    }
}