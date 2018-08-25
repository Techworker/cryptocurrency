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

class IOTA extends CryptoCurrency
{
    public const IOTA = ['i', 0, 'Iota'];
    public const KIOTA = ['Ki', 3, 'Kilo Iota'];
    public const MIOTA = ['Mi', 6, 'Mega Iota'];
    public const GIOTA = ['Gi', 9, 'Giga Iota'];
    public const TIOTA = ['Ti', 12, 'Tera Iota'];
    public const PIOTA = ['Pi', 15, 'Peta Iota'];

    public static function getBaseUnit(): array
    {
        return self::MIOTA;
    }

    public static function getUnits(): array
    {
        return [
            self::IOTA,
            self::KIOTA,
            self::MIOTA,
            self::GIOTA,
            self::TIOTA,
            self::PIOTA,
        ];
    }
}
