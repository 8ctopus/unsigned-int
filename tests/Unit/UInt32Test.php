<?php

use Oct8pus\Unsigned\UInt32;
use Oct8pus\Unsigned\UIntException;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @covers \Oct8pus\Unsigned\UInt32
 */
final class UInt32Test extends TestCase
{
    public function testBasic() : void
    {
        $uint32 = new UInt32();

        $this->assertEquals($uint32->toUnsigned(2147483647), 0x7FFFFFFF);
        $this->assertEquals($uint32->toUnsigned(1), 0x00000001);
        $this->assertEquals($uint32->toUnsigned(0), 0x00000000);
        $this->assertEquals($uint32->toUnsigned(-1), 0xFFFFFFFF);
        $this->assertEquals($uint32->toUnsigned(-2147483648), 0x80000000);
    }

    public function testExceptionMax() : void
    {
        $this->expectException(UIntException::class);

        $uint32 = new UInt32();
        $uint32->set(2147483648);
    }

    public function testExceptionMin() : void
    {
        $this->expectException(UIntException::class);

        $uint32 = new UInt32();
        $uint32->set(-2147483649);
    }
}
