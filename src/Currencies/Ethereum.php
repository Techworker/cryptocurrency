<?php

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
 *
 * This class represents the units for the ethereum currency:
 * https://www.ethereum.org/
 */
class Ethereum extends CryptoCurrency
{
    public const WEI = ['wei', 0, 'Wei'];
    public const FEMTOETHER = ['femtoether', 3, 'Femto ether'];
    public const BABBAGE = ['babbage', 3, 'Babbage'];
    public const KWEI = ['kwei', 3, 'Kwei'];
    public const PICOETHER = ['picoether', 6, 'Pico ether'];
    public const LOVELACE = ['lovelace', 6, 'localce'];
    public const MWEI = ['mwei', 6, 'Mwei'];
    public const GWEI = ['gwei', 9, 'Gwei'];
    public const NANO = ['nano', 9, 'Nano'];
    public const NANOETHER = ['nanoether', 9, 'Nano ether'];
    public const SHANNON = ['shannon', 9, 'Shannon'];
    public const MICRO = ['micro', 12, 'Micro'];
    public const MICROETHER = ['microether', 12, 'Micro Ether'];
    public const SZABO = ['szabo', 12, 'Szabo'];
    public const MILLI = ['milli', 15, 'Milli'];
    public const MILLIETHER = ['milliether', 15, 'Milli ether'];
    public const FINNEY = ['finney', 15, 'Finney'];
    public const ETH = ['ETH', 18, 'Ether'];
    public const GRAND = ['grand', 21, 'Grand'];
    public const KETHER = ['kether', 21, 'Kether'];
    public const METHER = ['mether', 24, 'Mether'];
    public const GETHER = ['gether', 27, 'Gether'];
    public const TETHER = ['tether', 30, 'Tether'];

    /**
     * {@inheritdoc}
     */
    public static function getBaseUnit(): array
    {
        return self::ETH;
    }

    /**
     * {@inheritdoc}
     */
    public static function getUnits(): array
    {
        return [
            self::WEI,
            self::FEMTOETHER,
            self::BABBAGE,
            self::KWEI,
            self::PICOETHER,
            self::LOVELACE,
            self::MWEI,
            self::GWEI,
            self::NANO,
            self::NANOETHER,
            self::SHANNON,
            self::MICRO,
            self::MICROETHER,
            self::SZABO,
            self::MILLI,
            self::MILLIETHER,
            self::FINNEY,
            self::ETH,
            self::GRAND,
            self::KETHER,
            self::METHER,
            self::GETHER,
            self::TETHER,
        ];
    }
}
