<?php

namespace BasicPhp\Tests\Lessons;

use PHPUnit\Framework\TestCase;

class Task1Test extends TestCase
{
    /**
     * @dataProvider binarySumProvider
     */
    public function testBinarySum(string $expected, string $num1, string $num2): void
    {
        $task1 = new \BasicPhp\Lessons\Task1();

        self::assertEquals($expected, $task1->binarySum($num1, $num2));
    }

    public function binarySumProvider(): array
    {
        return [
            ['1100', '111', '101'],
        ];
    }
}
