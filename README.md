# Unsigned int

A php library to convert signed integers to unsigned int.

php does not implement unsigned integers natively which can cause some headaches when unsigned are required. This library hopes to make your life a lot easier.

[![Latest Stable Version](http://poser.pugx.org/8ctopus/unsigned-int/v)](https://packagist.org/packages/8ctopus/unsigned-int) [![Total Downloads](http://poser.pugx.org/8ctopus/unsigned-int/downloads)](https://packagist.org/packages/8ctopus/unsigned-int) [![License](http://poser.pugx.org/8ctopus/unsigned-int/license)](https://packagist.org/packages/8ctopus/unsigned-int) [![PHP Version Require](http://poser.pugx.org/8ctopus/unsigned-int/require/php)](https://packagist.org/packages/8ctopus/unsigned-int)

## install and demo

```sh
composer require 8ctopus/unsigned-int
```

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

```sh
vendor/bin/phpunit --coverage-html coverage
```

## clean code

```sh
vendor/bin/php-cs-fixer fix
```
