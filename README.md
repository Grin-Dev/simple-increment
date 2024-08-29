# Инкремент

Увеличение целого числа на еденицу

## Требования

- PHP 7.4

## Установка

```sh
composer require vladimir-grinko/simple-increment
```

## Исползование

```php
<?php

$increment = new SimpleIncrement();
echo $increment->main(6); //7
```