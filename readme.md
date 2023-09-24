# phprandomstr

phprandomstr is a PHP library that generates radom string.


# Installation
```sh
composer require aungsoeoo/randomstr
```

## Basic Usage
### Autoloading
Faker supports both PSR-0 as PSR-4 autoloaders.


# When installed via composer

# usage in pure php
```php
<?php

require_once 'vendor/autoload.php';

$class = new \ASO\App\RandomStr();

echo "RandomPassword ". $class->generateRandomPassword(8);
```


### usage in laravel
```php
<?php

use ASO\App\RandomStr as RandomStr;

$class = new RandomStr();

echo "RandomPassword ". $class->generateRandomPassword(8);
```