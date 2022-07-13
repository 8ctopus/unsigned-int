<?php

use Oct8pus\Unsigned\UInt8;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @covers Oct8pus\Unsigned\UInt8
 */
final class UInt8Test extends TestCase
{
    public function testBase() : void
    {
        $this->assertEquals((new UInt8(127))->value(), 0x7F);
        $this->assertEquals((new UInt8(1))->value(), 0x01);
        $this->assertEquals((new UInt8(0))->value(), 0x00);
        $this->assertEquals((new UInt8(-1))->value(), 0xFF);
        $this->assertEquals((new UInt8(-128))->value(), 0x80);
    }
}
