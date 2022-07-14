<?php

use Oct8pus\Unsigned\UInt32;
use Oct8pus\Unsigned\UIntException;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @covers Oct8pus\Unsigned\UInt32
 */
final class UInt32Test extends TestCase
{
    public function testBasic() : void
    {
        $this->assertEquals((new UInt32(0))->value(), 0x0000);
    }

    public function testExceptionMax() : void
    {
        $this->expectException(UIntException::class);

        new UInt32(2147483648);
    }

    public function testExceptionMin() : void
    {
        $this->expectException(UIntException::class);

        new UInt32(-2147483649);
    }
}
