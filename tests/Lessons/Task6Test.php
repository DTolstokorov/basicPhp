<?php

namespace Lessons;

use PHPUnit\Framework\TestCase;

class Task6Test extends TestCase
{
    /**
     * @dataProvider isPerfectProvider
     */
    public function testIsPerfect($expected, $number): void
    {
        $task6 = new \BasicPhp\Lessons\Task6();

        self::assertEquals($expected, $task6->isPerfect($number));
    }

    public function isPerfectProvider(): array
    {
        return [
            [true, 6],
            [true, 28],
            [true, 496],
            [false, 5],
            [false, -1],
            [false, 0],
        ];
    }
}
