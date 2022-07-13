<?php

namespace Oct8pus\Unsigned;

final class UInt16 extends UIntBase
{
    protected int $bits = 16;

    public function __construct(int $number)
    {
        parent::__construct($number);
    }
}
