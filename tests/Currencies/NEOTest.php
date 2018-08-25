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

use Techworker\CryptoCurrency\Currencies\NEO;

/**
 * Class NEOTest.
 *
 * Tests the NEO crypto currency.
 */
class NEOTest extends AbstractCurrencyTest
{
    /**
     * {@inheritdoc}
     */
    public function provideClass()
    {
        return [[NEO::class]];
    }

    /**
     * {@inheritdoc}
     */
    public function provide()
    {
        return [
            [NEO::class, NEO::NEO, [
                ['1', NEO::NEO],
            ]],

        ];
    }
}