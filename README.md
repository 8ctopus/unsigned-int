# Unsigned int

[![packagist](https://poser.pugx.org/8ctopus/unsigned-int/v)](https://packagist.org/packages/8ctopus/unsigned-int)
[![downloads](https://poser.pugx.org/8ctopus/unsigned-int/downloads)](https://packagist.org/packages/8ctopus/unsigned-int)
[![min php version](https://poser.pugx.org/8ctopus/unsigned-int/require/php)](https://packagist.org/packages/8ctopus/unsigned-int)
[![license](https://poser.pugx.org/8ctopus/unsigned-int/license)](https://packagist.org/packages/8ctopus/unsigned-int)
[![tests](https://github.com/8ctopus/unsigned-int/actions/workflows/tests.yml/badge.svg)](https://github.com/8ctopus/unsigned-int/actions/workflows/tests.yml)
![code coverage badge](https://raw.githubusercontent.com/8ctopus/unsigned-int/image-data/coverage.svg)
![lines of code](https://raw.githubusercontent.com/8ctopus/unsigned-int/image-data/lines.svg)

A php library to convert signed integers to unsigned int.

php does not implement unsigned integers natively which can cause some headaches when unsigned are required. This library hopes to make your life a lot easier.

## install and demo

    composer require 8ctopus/unsigned-int

```php
use Oct8pus\Unsigned\UInt8;
use Oct8pus\Unsigned\UInt16;
use Oct8pus\Unsigned\UInt32;

require_once './vendor/autoload.php';

echo "convert signed int 8 to unsigned int 8\n";
echo (new UInt8(127));
echo (new UInt8(-128));

$uint8 = new UInt8();
$uint8->toUnsigned(127);
```

```txt
convert signed int 8 to unsigned int 8
        127 > 0x7F (127)
       -128 > 0x80 (128)
```

## tests

    composer test

## clean code

    composer fix(-risky)
