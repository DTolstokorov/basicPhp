<?php

namespace Lessons;

use PHPUnit\Framework\Testcase;

class Task7Test extends Testcase
{
    /**
     * @dataProvider isHappyWrongProvider
     */
    public function testIsHappyThrowedException($value, $exception): void
    {
        $task7 = new \BasicPhp\Lessons\Task7();

        $this->expectException($exception);
        $task7->isHappy($value);
    }

    public function isHappyWrongProvider(): array
    {
        return [
            ['', \Exception::class],
            ['111', \Exception::class]
        ];
    }

    /**
     * @dataProvider isHappyProvider
     */
    public function testisHappy($expected, $num): void
    {
        $task7 = new \BasicPhp\Lessons\Task7();

        self::assertEquals($expected, $task7->isHappy($num));
    }

    public function isHappyProvider(): array
    {
        return [
            [true, '101101'],
            [false, '111000'],
            [false, '10'],
            [true, '00'],
        ];
    }
}
