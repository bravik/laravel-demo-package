<?php

declare(strict_types=1);

namespace Bravik\MyPackage;

class CoolStaff
{
    public static function sayHi(string $name, $lastName = null): string
    {
        if ($lastName) {
            return "Hi, $name $lastName!";
        }

        return "Hi, $name!";
    }
}
