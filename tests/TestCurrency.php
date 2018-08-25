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

namespace Techworker\CryptoCurrency\Tests;

use Techworker\CryptoCurrency\CryptoCurrency;

class TestCurrency extends CryptoCurrency
{
    public const ZERO = ['zero', 0, 'Zero'];
    public const ONE = ['one', 1, 'One'];
    public const TWO = ['two', 2, 'Two'];
    public const THREE = ['three', 3, 'Three'];
    public const FOUR = ['four', 4, 'Four'];
    public const FIVE = ['five', 5, 'Five'];
    public const SIX = ['six', 6, 'Six'];
    public const SEVEN = ['seven', 7, 'Seven'];
    public const EIGHT = ['eight', 8, 'Eight'];
    public const NINE = ['nine', 9, 'Nine'];
    public const TEN = ['ten', 10, 'Ten'];
    public const ELEVEN = ['eleven', 11, 'Eleven'];
    public const TWELVE = ['twelve', 12, 'Twelve'];
    public const THIRTEEN = ['thirteen', 13, 'Thirteen'];
    public const FOURTEEN = ['fourteen', 14, 'Fourteen'];
    public const FIFTEEN = ['fifteen', 15, 'Fifteen'];
    public const SIXTEEN = ['sixteen', 16, 'Sixteen'];
    public const SEVENTEEN = ['seventeen', 17, 'Seventeen'];
    public const EIGHTEEN = ['eighteen', 18, 'Eighteen'];
    public const NINETEEN = ['nineteen', 19, 'Nineteen'];
    public const TWENTY = ['twenty', 20, 'Twenty'];

    public static function getBaseUnit(): array
    {
        return self::TEN;
    }

    public static function getUnits(): array
    {
        return [
            self::ZERO,
            self::ONE,
            self::TWO,
            self::THREE,
            self::FOUR,
            self::FIVE,
            self::SIX,
            self::SEVEN,
            self::EIGHT,
            self::NINE,
            self::TEN,
            self::ELEVEN,
            self::TWELVE,
            self::THIRTEEN,
            self::FOURTEEN,
            self::FIFTEEN,
            self::SIXTEEN,
            self::SEVENTEEN,
            self::EIGHTEEN,
            self::NINETEEN,
            self::TWENTY,
        ];
    }
}
