<?php

namespace Lessons;

use PHPUnit\Framework\Testcase;

class Task8Test extends Testcase
{
    /**
     * @dataProvider fizzBuzzProvider
     */
    public function testFizzBuzz(int $start, int $end, string $expected): void
    {
        $task8 = new \BasicPhp\Lessons\Task8();

        self::assertEquals($task8->generateFizzBuzz($start, $end), $expected);
    }

    public function fizzBuzzProvider(): array
    {
        return [
            [11, 20, '11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz '],
            [0, -5, ''],
            [1, 1, '1 '],
        ];
    }
}
