<?php

use Oct8pus\Unsigned\UInt16;
use Oct8pus\Unsigned\UInt32;
use Oct8pus\Unsigned\UInt8;

require_once './vendor/autoload.php';

// command line error handler
(new \NunoMaduro\Collision\Provider())->register();

echo "convert signed int 8 to unsigned int 8\n";

$uint8 = new UInt8();

echo $uint8->set(127);
echo $uint8->set(1);
echo $uint8->set(0);
echo $uint8->set(-1);
echo $uint8->set(-128);

echo "\nconvert signed int 16 to unsigned int 16\n";

$uint16 = new UInt16();

echo $uint16->set(32767);
echo $uint16->set(1);
echo $uint16->set(0);
echo $uint16->set(-1);
echo $uint16->set(-32768);

echo "\nconvert signed int 32 to unsigned int 32\n";

$uint32 = new UInt32();

echo $uint32->set(2147483647);
echo $uint32->set(1);
echo $uint32->set(0);
echo $uint32->set(-1);
echo $uint32->set(-2147483648);
