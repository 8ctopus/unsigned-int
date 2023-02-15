<?php

use Oct8pus\Unsigned\UInt32;
use Oct8pus\Unsigned\UIntException;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @covers \Oct8pus\Unsigned\UInt32
 * @covers \Oct8pus\Unsigned\UIntBase
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

    public function testConstructor() : void
    {
        $uint32 = new UInt32(-1);
        $this->assertEquals($uint32->toUnsigned(), 0xFFFFFFFF);
    }

    public function testToString() : void
    {
        $uint32 = new UInt32();
        $uint32->set(-1);

        $this->assertEquals((string) $uint32, '         -1 > 0xFFFFFFFF (4294967295)' . PHP_EOL);
    }

    public function testMinMax() : void
    {
        $uint32 = new UInt32(0);
        $this->assertEquals($uint32->max(), 2147483647);
        $this->assertEquals($uint32->min(), -2147483648);
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
