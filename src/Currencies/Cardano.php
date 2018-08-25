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
 * Class Cardano.
 *
 * This class represents the units for the Cardano currency:
 * https://cardanodocs.com
 */
class Cardano extends CryptoCurrency
{
    public const LOVELACE = ['lovelace', 0, 'Lovelace'];
    public const CARDANO = ['ADA', 6, 'Cardano'];

    /**
     * {@inheritdoc}
     */
    public static function getBaseUnit(): array
    {
        return self::CARDANO;
    }

    /**
     * {@inheritdoc}
     */
    public static function getUnits(): array
    {
        return [
            self::LOVELACE,
            self::CARDANO,
        ];
    }
}
