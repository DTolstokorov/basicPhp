<?php

namespace BasicPhp\Tests\Lessons;

use PHPUnit\Framework\Testcase;

class Task8Test extends Testcase
{
    /**
     * @dataProvider fizzBuzzProvider
     */
    public function testFizzBuzz(string $expected, int $start, int $end): void
    {
        $task8 = new \BasicPhp\Lessons\Task8();

        self::assertEquals($expected, $task8->generateFizzBuzz($start, $end));
    }

    public function fizzBuzzProvider(): array
    {
        return [
            ['11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz ', 11, 20],
            ['', 0, -5],
            ['1 ', 1, 1],
        ];
    }
}
