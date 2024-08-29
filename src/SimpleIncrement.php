<?php

declare(strict_types=1);

namespace VladimirGrinko\SimpleIncrement;

class SimpleIncrement
{
    public function main(int $value): int
    {
        return ++$value;
    }
}
