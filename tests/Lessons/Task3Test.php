<?php

namespace Lessons;

use PHPUnit\Framework\TestCase;

class Task3Test extends TestCase
{
    /**
     * @dataProvider fibProvider
     */
    public function testFib(int $num, int $expected): void
    {
        $task3 = new \BasicPhp\Lessons\Task3();

        self::assertEquals($expected, $task3->fib($num));
    }

    public function fibProvider(): array
    {
        return [
            [3, 2],
            [5, 5],
            [10, 55]
        ];
    }
}
