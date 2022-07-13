<?php

use Oct8pus\Unsigned\UInt32;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @covers Oct8pus\Unsigned\UInt32
 */
final class UInt32Test extends TestCase
{
    public function testBase() : void
    {
        $this->assertEquals((new UInt32(0))->value(), 0x0000);
    }
}
