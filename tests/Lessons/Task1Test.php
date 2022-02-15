<?php

namespace Lessons;

use PHPUnit\Framework\TestCase;

class Task1Test extends TestCase
{
    /**
     * @dataProvider binarySumProvider
     */
    public function testBinarySum(string $num1, string $num2, string $expected): void
    {
        $task1 = new \BasicPhp\Lessons\Task1();

        self::assertEquals($task1->binarySum($num1, $num2), $expected);
    }

    public function binarySumProvider(): array
    {
        return [
            ['111', '101', '1100'],
        ];
    }
}
