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

use Techworker\CryptoCurrency\Currencies\{CURRENCY};

/**
 * Class {CURRENCY}Test.
 *
 * Tests the {CURRENCY} crypto currency.
 */
class {CURRENCY}Test extends AbstractCurrencyTest
{
    /**
     * {@inheritdoc}
     */
    public function provideClass()
    {
        return [[{CURRENCY}::class]];
    }

    /**
     * {@inheritdoc}
     */
    public function provide()
    {
        return [
            {FIXTURE}
        ];
    }
}
