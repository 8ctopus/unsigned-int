<?php

namespace Oct8pus\Unsigned;

final class UInt32 extends UIntBase
{
    protected int $bits = 32;

    public function __construct(int $number)
    {
        parent::__construct($number);
    }
}
