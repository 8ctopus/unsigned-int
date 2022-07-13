<?php

use Oct8pus\Unsigned\UInt8;
use Oct8pus\Unsigned\UInt16;
use Oct8pus\Unsigned\UInt32;

require_once './vendor/autoload.php';

// command line error handler
(new \NunoMaduro\Collision\Provider())->register();

echo "convert signed int 8 to unsigned int 8\n";
echo new UInt8(127);
echo new UInt8(1);
echo new UInt8(0);
echo new UInt8(-1);
echo new UInt8(-128);

echo "\nconvert signed int 16 to unsigned int 16\n";
echo new UInt16(32767);
echo new UInt16(1);
echo new UInt16(0);
echo new UInt16(-1);
echo new UInt16(-32768);

echo "\nconvert signed int 32 to unsigned int 32\n";
echo new UInt32(2147483647);
echo new UInt32(1);
echo new UInt32(0);
echo new UInt32(-1);
echo new UInt32(-2147483648);
