<?php

declare(strict_types=1);

namespace Bravik\MyPackage;

class CoolStaff
{
    public function sayHi(string $name, $lastName): string
    {
        return "Hi, $name $lastName!";
    }
}
