<?php

namespace BasicPhp\Tests\Lessons;

use BasicPhp\Logger\FakeLogger;
use PHPUnit\Framework\TestCase;

class Task2Test extends TestCase
{
    private FakeLogger $logger;

    public function setUp(): void
    {
        parent::setUp();
        $this->logger = new FakeLogger();
    }

    public function testIsPowerIfThreeErrorLog(): void
    {
        $task2 = new \BasicPhp\Lessons\Task2($this->logger);
        $task2 = new \BasicPhp\Lessons\Task2($this->logger);
        $task2 = new \BasicPhp\Lessons\Task2($this->logger);

        $task2->isPowerOfThree(-2);
        $task2->isPowerOfThree(-2);
        self::assertEquals('Number is less then 0.', $this->logger->showMessages());


    }

    /**
     * @dataProvider isPowerOfThreeProvider
     */
    public function testIsPowerOfThree(int $num, int $expected): void
    {
        $task2 = new \BasicPhp\Lessons\Task2($this->logger);

        self::assertEquals($expected, $task2->isPowerOfThree($num));
    }

    public function isPowerOfThreeProvider(): array
    {
        return [
            [3, 1],
            [9, 1],
            [10, 0],
        ];
    }
}
