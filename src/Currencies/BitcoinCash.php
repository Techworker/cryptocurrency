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
class BitcoinCash extends CryptoCurrency
{
    public const SATOSHI = ['satoshi', 0, 'Satoshi'];
    public const FINNEY = ['finney', 1, 'Finney'];
    public const MICRO = ['μBCH', 2, 'Microbitcoin Cash'];
    public const MILLI = ['mBCH', 5, 'Millibitcoin Cash'];
    public const CENTI = ['cBCH', 6, 'Centibitcoin Cash'];
    public const DECI = ['dBCH', 7, 'Decibitcoin Cash'];
    public const BITCOIN_CASH = ['BCH', 8, 'Bitcoin Cash'];
    public const DECA = ['daBCH', 9, 'Decabitcoin Cash'];
    public const HECTO = ['hBCH', 10, 'Hectobitcoin Cash'];
    public const KILO = ['kBCH', 11, 'Kilobitcoin Cash'];
    public const MEGA = ['MBCH', 14, 'Megabitcoin Cash'];

    /**
     * {@inheritdoc}
     */
    public static function getBaseUnit(): array
    {
        return self::BITCOIN_CASH;
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
            self::BITCOIN_CASH,
            self::DECA,
            self::HECTO,
            self::KILO,
            self::MEGA,
        ];
    }
}
