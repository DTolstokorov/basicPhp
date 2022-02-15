<?php

namespace Lessons;

use PHPUnit\Framework\TestCase;

class Task4Test extends TestCase
{
    /**
     * @dataProvider addDigitsProvider
     */
    public function testAddDigits($num, $expected): void
    {
        $task4 = new \BasicPhp\Lessons\Task4();

        self::assertEquals($expected, $task4->addDigits($num));
    }

    public function addDigitsProvider(): array
    {
        return [
            [0, 0],
            [1, 1],
            [9, 9],
            [38, 2],
            [10, 1],
        ];
    }
}
