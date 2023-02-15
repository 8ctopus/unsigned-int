<?php

use Oct8pus\Unsigned\UInt8;
use Oct8pus\Unsigned\UIntException;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @covers \Oct8pus\Unsigned\UInt8
 * @covers \Oct8pus\Unsigned\UIntBase
 */
final class UInt8Test extends TestCase
{
    public function testBasic() : void
    {
        $uint8 = new UInt8();

        static::assertSame($uint8->toUnsigned(127), 0x7F);
        static::assertSame($uint8->toUnsigned(1), 0x01);
        static::assertSame($uint8->toUnsigned(0), 0x00);
        static::assertSame($uint8->toUnsigned(-1), 0xFF);
        static::assertSame($uint8->toUnsigned(-128), 0x80);
    }

    public function testConstructor() : void
    {
        $uint8 = new UInt8(-1);
        static::assertSame($uint8->toUnsigned(), 0xFF);
    }

    public function testToString() : void
    {
        $uint8 = new UInt8();
        $uint8->set(-1);

        static::assertSame((string) $uint8, '         -1 > 0xFF (255)' . PHP_EOL);
    }

    public function testMinMax() : void
    {
        $uint8 = new UInt8(0);
        static::assertSame($uint8->max(), 127);
        static::assertSame($uint8->min(), -128);
    }

    public function testExceptionMax() : void
    {
        $this->expectException(UIntException::class);

        $uint8 = new UInt8();
        $uint8->set(128);
    }

    public function testExceptionMin() : void
    {
        $this->expectException(UIntException::class);

        $uint8 = new UInt8();
        $uint8->set(-129);
    }
}
