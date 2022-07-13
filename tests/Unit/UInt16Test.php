<?php

use Oct8pus\Unsigned\UInt16;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @covers Oct8pus\Unsigned\UInt16
 */
final class UInt16Test extends TestCase
{
    public function testBase() : void
    {
        $this->assertEquals((new UInt16(32767))->value(), 0x7FFF);
        $this->assertEquals((new UInt16(1))->value(), 0x0001);
        $this->assertEquals((new UInt16(0))->value(), 0x0000);
        $this->assertEquals((new UInt16(-1))->value(), 0xFFFF);
        $this->assertEquals((new UInt16(-32768))->value(), 0x8000);
    }
}
