<?php

use Oct8pus\Unsigned\UInt16;
use Oct8pus\Unsigned\UIntException;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @covers \Oct8pus\Unsigned\UInt16
 * @covers \Oct8pus\Unsigned\UIntBase
 */
final class UInt16Test extends TestCase
{
    public function testBasic() : void
    {
        $uint16 = new UInt16();

        $this->assertEquals($uint16->toUnsigned(32767), 0x7FFF);
        $this->assertEquals($uint16->toUnsigned(1), 0x0001);
        $this->assertEquals($uint16->toUnsigned(0), 0x0000);
        $this->assertEquals($uint16->toUnsigned(-1), 0xFFFF);
        $this->assertEquals($uint16->toUnsigned(-32768), 0x8000);
    }

    public function testConstructor() : void
    {
        $uint16 = new UInt16(-1);
        $this->assertEquals($uint16->toUnsigned(), 0xFFFF);
    }

    public function testToString() : void
    {
        $uint16 = new UInt16();
        $uint16->set(-1);

        $this->assertEquals((string) $uint16, '         -1 > 0xFFFF (65535)' . PHP_EOL);
    }

    public function testMinMax() : void
    {
        $uint16 = new UInt16(0);
        $this->assertEquals($uint16->max(), 32767);
        $this->assertEquals($uint16->min(), -32768);
    }

    public function testExceptionMax() : void
    {
        $this->expectException(UIntException::class);

        $uint16 = new UInt16();
        $uint16->set(32768);
    }

    public function testExceptionMin() : void
    {
        $this->expectException(UIntException::class);

        $uint16 = new UInt16();
        $uint16->set(-32769);
    }
}
