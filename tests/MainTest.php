<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Main;

final class MainTest extends TestCase
{
    public function test_greet(): void
    {
        $this->expectOutputString('Hello Mauro!');

        Main::greet('Mauro');
    }

    public function test_bye(): void
    {
        $this->expectOutputString('Bye Mauro...');

        Main::bye('Mauro');
    }
}