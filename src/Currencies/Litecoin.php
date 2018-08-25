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

class Litecoin extends CryptoCurrency
{
    public const PHOTONS = ['photon', 0, 'Photon'];
    public const LITES = ['lite', 3, 'Lite'];
    public const LITECOIN = ['LTC', 6, 'Litecoin'];

    public static function getBaseUnit(): array
    {
        return self::LITECOIN;
    }

    public static function getUnits(): array
    {
        return [
            self::PHOTONS,
            self::LITES,
            self::LITECOIN,
        ];
    }
}
