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

class Nano extends CryptoCurrency
{
    public const RAW = ['raw', 0, 'raw'];
    public const U = ['unano', 18, 'UNano'];
    public const MICRO = ['mnano', 21, 'Micro Nano'];
    public const NANO = ['nano', 24, 'Nano'];
    public const KILO = ['knano', 27, 'Kilo Nano'];
    public const MEGA = ['Mnano', 30, 'Mega Nano'];
    public const GIGA = ['Gnano', 33, 'Giga Nano'];

    public static function getBaseUnit(): array
    {
        return self::RAW;
    }

    public static function getUnits(): array
    {
        return [
            self::RAW,
            self::U,
            self::MICRO,
            self::NANO,
            self::KILO,
            self::MEGA,
            self::GIGA,
        ];
    }
}
