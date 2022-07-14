# Unsigned int

A php library to convert signed integers to unsigned int.

php does not implement unsigned integers natively which can cause some headaches when unsigned are required. This library hopes to make your life a lot easier.

[![Latest Stable Version](http://poser.pugx.org/8ctopus/unsigned-int/v)](https://packagist.org/packages/8ctopus/unsigned-int) [![Total Downloads](http://poser.pugx.org/8ctopus/unsigned-int/downloads)](https://packagist.org/packages/8ctopus/unsigned-int) [![License](http://poser.pugx.org/8ctopus/unsigned-int/license)](https://packagist.org/packages/8ctopus/unsigned-int) [![PHP Version Require](http://poser.pugx.org/8ctopus/unsigned-int/require/php)](https://packagist.org/packages/8ctopus/unsigned-int)

## demo

```sh
git clone https://github.com/8ctopus/unsigned-int.git
cd unsigned-int
composer install
php demo.php
```

## install

```sh
composer require 8ctopus/unsigned-int
```

```php
use Oct8pus\Unsigned\UInt8;
use Oct8pus\Unsigned\UInt16;
use Oct8pus\Unsigned\UInt32;

require_once './vendor/autoload.php';

echo "convert signed int 8 to unsigned int 8\n";
echo new UInt8(127);
echo new UInt8(-128);

echo "\nconvert signed int 16 to unsigned int 16\n";
echo new UInt16(32767);
echo new UInt16(-32768);

echo "\nconvert signed int 32 to unsigned int 32\n";
echo new UInt32(2147483647);
echo new UInt32(-2147483648);
```

## tests

```sh
vendor/bin/phpunit --coverage-html coverage
```

## clean code

```sh
vendor/bin/php-cs-fixer fix
```
