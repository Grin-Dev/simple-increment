# Инкремент

Увеличение целого числа на единицу

## Требования

- PHP 7.4 и выше

## Установка

```sh
composer require vladimir-grinko/simple-increment
```

## Использование

```php
<?php

$increment = new VladimirGrinko\SimpleIncrement\SimpleIncrement();
echo $increment->main(6); //7
```