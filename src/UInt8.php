<?php

namespace Oct8pus\Unsigned;

final class UInt8 extends UIntBase
{
    protected int $bits = 8;

    public function __construct(int $number)
    {
        parent::__construct($number);
    }
}
