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

namespace Techworker\CryptoCurrency\Currencies;

use Techworker\CryptoCurrency\CryptoCurrency;

/**
 * Class Neo.
 *
 * This class represents the units for the Neo currency
 */
class Gas extends CryptoCurrency
{
    public const DROP = ['DROP', 0, 'Drop'];
    public const GAS = ['GAS', 8, 'GAS'];

    /**
     * {@inheritdoc}
     */
    public static function getBaseUnit(): array
    {
        return self::GAS;
    }

    /**
     * {@inheritdoc}
     */
    public static function getUnits(): array
    {
        return [
            self::DROP,
            self::GAS,
        ];
    }
}
