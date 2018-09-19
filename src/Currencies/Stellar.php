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

class Stellar extends CryptoCurrency
{
    public const STROOP = ['stroop', 0, 'Stroop'];
    public const XLM = ['XLM', 7, 'Lumen'];

    public static function getBaseUnit(): array
    {
        return self::XLM;
    }

    public static function getUnits(): array
    {
        return [
            self::STROOP,
            self::XLM
        ];
    }
}
