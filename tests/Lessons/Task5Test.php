<?php

namespace BasicPhp\Tests\Lessons;

use PHPUnit\Framework\TestCase;

class Task5Test extends TestCase
{
    /**
     * @dataProvider bracketsProvider
     */
    public function testBrackets(bool $expected, string $string): void
    {
        $task5 = new \BasicPhp\Lessons\Task5();

        self::assertEquals($expected, $task5->brackets($string));
    }

    public function bracketsProvider(): array
    {
        return [
            [true, '(())'],
            [true, '()'],
            [false, '((())'],
            [false, '(()))'],
            [true, ''],
        ];
    }
}
