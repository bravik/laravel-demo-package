<?php

declare(strict_types=1);

namespace Bravik\MyPackage;

class CoolStaff
{
    public static function sayHi(string $name): string
    {
        return "Hi, $name!";
    }
}
