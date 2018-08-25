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

class Ripple extends CryptoCurrency
{
    public const DROP = ['DROP', 0, 'Ripple Drop'];
    public const XRP = ['XRP', 6, 'Ripple'];

    public static function getBaseUnit(): array
    {
        return self::XRP;
    }

    public static function getUnits(): array
    {
        return [
            self::DROP,
            self::XRP,
        ];
    }
}
