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

use PHPUnit\Framework\TestCase;

/**
 * Class CryptoCurrencyTest.
 */
class CryptoCurrencySimpleTest extends TestCase
{
    public function testInit()
    {
        // base: TEN
        $value = new TestCurrency(1);
        static::assertEquals(1, $value->getValue());
    }

    public function testInitWithInstance()
    {
        $value = new TestCurrency(1);
        $value2 = new TestCurrency($value);
        static::assertEquals($value->getValue(), $value2->getValue());
    }

    public function testInitWithUnit()
    {
        $value = new TestCurrency(1, TestCurrency::ZERO);
        static::assertEquals('0.0000000001', $value->getValue());

        $value = new TestCurrency(1, TestCurrency::TWENTY);
        static::assertEquals('10000000000', $value->getValue());
    }

    public function testToString()
    {
        $value = new TestCurrency(1);
        static::assertEquals('1', $value->__toString());
    }

    public function testSimpleAdd()
    {
        $cc1 = new TestCurrency('1');
        $cc2 = new TestCurrency('1');
        $cc3 = $cc1->add($cc2);
        static::assertEquals('2', $cc3->format());
    }

    public function testSimpleSub()
    {
        $cc1 = new TestCurrency('1');
        $cc2 = new TestCurrency('1');
        $cc3 = $cc1->sub($cc2);
        static::assertEquals('0', $cc3->format());
    }

    public function testSimpleMultiply()
    {
        $cc1 = new TestCurrency('1');
        $cc2 = $cc1->multiplyBy(10);
        static::assertEquals('10', $cc2->format());
    }

    public function testSimpleDivide()
    {
        $cc1 = new TestCurrency('10');
        $cc2 = $cc1->divideBy(10);
        static::assertEquals('1', $cc2->format());
    }

    public function testSimpleLt()
    {
        $cc = new TestCurrency('10');
        static::assertFalse($cc->lt(new TestCurrency('10')));
        static::assertFalse($cc->lt(new TestCurrency('9')));
        static::assertTrue($cc->lt(new TestCurrency('11')));
    }

    public function testSimpleGtEq()
    {
        $cc = new TestCurrency('10');
        static::assertTrue($cc->gteq(new TestCurrency('10')));
        static::assertTrue($cc->gteq(new TestCurrency('9')));
        static::assertFalse($cc->gteq(new TestCurrency('11')));
    }

    public function testSimpleLtEq()
    {
        $cc = new TestCurrency('10');
        static::assertTrue($cc->lteq(new TestCurrency('10')));
        static::assertTrue($cc->lteq(new TestCurrency('11')));
        static::assertFalse($cc->lteq(new TestCurrency('9')));
    }

    public function testSimpleEq()
    {
        $cc = new TestCurrency('10');
        static::assertTrue($cc->eq(new TestCurrency('10')));
        static::assertFalse($cc->eq(new TestCurrency('11')));
        static::assertFalse($cc->eq(new TestCurrency('9')));
    }

    public function testSimpleNeq()
    {
        $cc = new TestCurrency('10');
        static::assertFalse($cc->neq(new TestCurrency('10')));
        static::assertTrue($cc->neq(new TestCurrency('11')));
        static::assertTrue($cc->neq(new TestCurrency('9')));
    }

    public function testSimpleIsNeg()
    {
        $cc = new TestCurrency('1');
        static::assertFalse($cc->isNeg());
        $cc = new TestCurrency('0');
        static::assertFalse($cc->isNeg());
        $cc = new TestCurrency('-1');
        static::assertTrue($cc->isNeg());
    }

    public function testSimpleIsPos()
    {
        $cc = new TestCurrency('1');
        static::assertTrue($cc->isPos());
        $cc = new TestCurrency('0');
        static::assertFalse($cc->isPos());
        $cc = new TestCurrency('-1');
        static::assertFalse($cc->isPos());
    }

    public function testSimpleIsZero()
    {
        $cc = new TestCurrency('0');
        static::assertTrue($cc->isZero());
        $cc = new TestCurrency('-1');
        static::assertFalse($cc->isZero());
        $cc = new TestCurrency('1');
        static::assertFalse($cc->isZero());
    }
}
