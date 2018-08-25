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
 * Class BitcoinCash.
 *
 * This class represents the units for the Bitcoin Cash currency:
 * https://www.bitcoincash.org/
 */
class Bitcoin extends CryptoCurrency
{
    public const SATOSHI = ['satoshi', 0, 'Satoshi'];
    public const FINNEY = ['finney', 1, 'Finney'];
    public const MICRO = ['μBTC', 2, 'Microbitcoin'];
    public const MILLI = ['mBTC', 5, 'Millibitcoin'];
    public const CENTI = ['cBTC', 6, 'Centibitcoin'];
    public const DECI = ['dBTC', 7, 'Decibitcoin'];
    public const BITCOIN = ['BTC', 8, 'Bitcoin'];
    public const DECA = ['daBTC', 9, 'Decabitcoin'];
    public const HECTO = ['hBTC', 10, 'Hectobitcoin'];
    public const KILO = ['kBTC', 11, 'Kilobitcoin'];
    public const MEGA = ['MBTC', 14, 'Megabitcoin'];

    /**
     * {@inheritdoc}
     */
    public static function getBaseUnit(): array
    {
        return self::BITCOIN;
    }

    /**
     * {@inheritdoc}
     */
    public static function getUnits(): array
    {
        return [
            self::SATOSHI,
            self::FINNEY,
            self::MICRO,
            self::MILLI,
            self::CENTI,
            self::DECI,
            self::BITCOIN,
            self::DECA,
            self::HECTO,
            self::KILO,
            self::MEGA,
        ];
    }
}
