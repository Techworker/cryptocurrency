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
 * Class Ethereum.
 */
class PascalCoin extends CryptoCurrency
{
    public const PASC = ['PASC', 4, 'Pascal'];
    public const MOLINA = ['MOL', 0, 'Molina'];

    public static function getBaseUnit(): array
    {
        return self::PASC;
    }

    public static function getUnits(): array
    {
        return [
            self::MOLINA,
            self::PASC,
        ];
    }
}
