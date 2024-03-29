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
     *
     * @param ?int $number - signed int
     */
    public function __construct(?int $number = null)
    {
        if (isset($number)) {
            $this->number = $number;
        }

        $this->max = 2 ** ($this->bits - 1) - 1;
        $this->min = -2 ** ($this->bits - 1);
    }

    /**
     * Debug
     *
     * @return string
     */
    public function __toString() : string
    {
        $pad = $this->bits / 4;

        $unsigned = $this->toUnsigned($this->number);

        return str_pad((string) $this->number, 11, ' ', STR_PAD_LEFT) . ' > ' . sprintf("0x%0{$pad}X", $unsigned) . ' (' . $unsigned . ')' . PHP_EOL;
    }

    /**
     * Convert signed int to unsigned int
     *
     * @param ?int $number - signed int
     *
     * @return int - unsigned int
     *
     * @throws UIntException
     */
    public function toUnsigned(?int $number = null) : int
    {
        if (isset($number)) {
            $this->number = $number;
        }

        switch (\PHP_INT_SIZE) {
            default:
                // @codeCoverageIgnoreStart
                throw new UIntException('not implemented');
                // @codeCoverageIgnoreEnd

            case 4:
            case 8:
                if ($this->number > $this->max || $this->number < $this->min) {
                    throw new UIntException('number out of bounds');
                }
        }

        if ($this->number >= 0) {
            return $this->number;
        } else {
            return (2 ** $this->bits) + $this->number;
        }
    }

    /**
     * Minimum signed int supported
     *
     * @return int
     */
    public function min() : int
    {
        return $this->min;
    }

    /**
     * Maximum signed int supported
     *
     * @return int
     */
    public function max() : int
    {
        return $this->max;
    }

    /**
     * Set signed int
     *
     * @param int $number
     *
     * @return self
     *
     * @throws UIntException
     */
    public function set(int $number) : self
    {
        $this->number = $number;

        // convert to throw exception if number is out of bounds
        $this->toUnsigned();

        return $this;
    }
}
