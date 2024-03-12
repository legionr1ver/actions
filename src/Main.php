<?php

namespace App;


class Main
{
    static function greet(string $name): void
    {
        echo "Hello $name!";
    }

    static function bye(string $name): void
    {
        echo "Bye $name!";
    }
}