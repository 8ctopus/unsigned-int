<?php

use Oct8pus\Unsigned\UInt8;
use Oct8pus\Unsigned\UIntException;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @covers \Oct8pus\Unsigned\UInt8
 * @covers \Oct8pus\Unsigned\UIntBase
 */
final class UInt8Test extends TestCase
{
    public function testBasic() : void
    {
        $uint8 = new UInt8();

        $this->assertEquals($uint8->toUnsigned(127), 0x7F);
        $this->assertEquals($uint8->toUnsigned(1), 0x01);
        $this->assertEquals($uint8->toUnsigned(0), 0x00);
        $this->assertEquals($uint8->toUnsigned(-1), 0xFF);
        $this->assertEquals($uint8->toUnsigned(-128), 0x80);
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
