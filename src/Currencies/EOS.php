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
 * Class EOS.
 *
 * This class represents the units for the Bitcoin Cash currency:
 * https://www.bitcoincash.org/
 */
class EOS extends CryptoCurrency
{
    public const EOS = ['EOS', 18, 'EOS'];

    /**
     * {@inheritdoc}
     */
    public static function getBaseUnit(): array
    {
        return self::EOS;
    }

    /**
     * {@inheritdoc}
     */
    public static function getUnits(): array
    {
        return [
            self::EOS,
        ];
    }
}
