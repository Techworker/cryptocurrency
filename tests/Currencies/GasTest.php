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

use Techworker\CryptoCurrency\Currencies\Gas;

/**
 * Class GasTest.
 *
 * Tests the Gas crypto currency.
 */
class GasTest extends AbstractCurrencyTest
{
    /**
     * {@inheritdoc}
     */
    public function provideClass()
    {
        return [[Gas::class]];
    }

    /**
     * {@inheritdoc}
     */
    public function provide()
    {
        return [
            [Gas::class, Gas::DROP, [
                ['1', Gas::DROP],
                ['0.00000001', Gas::GAS],
            ]],
            [Gas::class, Gas::GAS, [
                ['100000000', Gas::DROP],
                ['1', Gas::GAS],
            ]],

        ];
    }
}