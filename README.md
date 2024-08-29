# Инкремент

Увеличение целого числа на единицу

## Требования

- PHP 7.4

## Установка

```sh
composer require vladimir-grinko/simple-increment
```

## Использование

```php
<?php

$increment = new SimpleIncrement();
echo $increment->main(6); //7
```