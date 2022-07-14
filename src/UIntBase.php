<?php

namespace Oct8pus\Unsigned;

abstract class UIntBase
{
    protected int $bits;
    protected int $max;
    protected int $min;
    protected int $number;

    /**
     * Constructor
     * @param int $number - signed int to convert
     *
     * @throws UIntException
     */
    public function __construct(int $number)
    {
        $this->number = $number;

        $this->max = 2 ** ($this->bits - 1) - 1;
        $this->min = - 2 ** ($this->bits - 1);

        switch (PHP_INT_SIZE) {
            default:
                throw new UIntException('not implemented');

            case 4:
            case 8:
                if ($this->number > $this->max || $this->number < $this->min) {
                    throw new UIntException('number out of bounds');
                }
        }
    }

    /**
     * Get unsigned int
     * @return int
     */
    public function value() : int
    {
        if ($this->number >= 0) {
            return $this->number;
        } else {
            return (2 ** $this->bits) + $this->number;
        }
    }

    public function min() : int {
        return $this->min;
    }

    public function max() : int {
        return $this->max;
    }

    /**
     * Debug
     * @return string
     */
    public function __toString() : string
    {
        $value = $this->value();
        $pad = $this->bits / 4;

        return str_pad((string) $this->number, 11, ' ', STR_PAD_LEFT) . ' > ' . sprintf("0x%0{$pad}X", $value) . ' ('. $value . ')' . PHP_EOL;
    }
}
