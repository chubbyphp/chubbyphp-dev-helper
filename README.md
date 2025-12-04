# chubbyphp-dev-helper

[![Latest Stable Version](https://poser.pugx.org/chubbyphp/chubbyphp-dev-helper/v)](https://packagist.org/packages/chubbyphp/chubbyphp-dev-helper)
[![Total Downloads](https://poser.pugx.org/chubbyphp/chubbyphp-dev-helper/downloads)](https://packagist.org/packages/chubbyphp/chubbyphp-dev-helper)
[![Monthly Downloads](https://poser.pugx.org/chubbyphp/chubbyphp-dev-helper/d/monthly)](https://packagist.org/packages/chubbyphp/chubbyphp-dev-helper)

## Description

A dev helper which provides coding standards and quality settings.

## Requirements

 * php: ^8.3
 * friendsofphp/php-cs-fixer: ^3.91.2

## Installation

Through [Composer](http://getcomposer.org) as [chubbyphp/chubbyphp-dev-helper][1].

```sh
composer require --dev chubbyphp/chubbyphp-dev-helper dev-master
```

## Usage

### PHP-CS-FIXER

```php
<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->files()
    ->name('*.php')
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/tests')
;

/** @var array $config */
$config = require __DIR__ . '/vendor/chubbyphp/chubbyphp-dev-helper/phpcs.php';

return (new PhpCsFixer\Config)
    ->setUnsupportedPhpVersionAllowed(true)
    ->setIndent($config['indent'])
    ->setLineEnding($config['lineEnding'])
    ->setRules($config['rules'])
    ->setRiskyAllowed($config['riskyAllowed'])
    ->setFinder($finder)
;
```

## Copyright

2025 Dominik Zogg

[1]: https://packagist.org/packages/chubbyphp/chubbyphp-dev-helper
