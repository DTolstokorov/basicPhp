<?php

namespace BasicPhp\Lessons;

use BasicPhp\Logger\LoggerInterface;

class Task2
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function isPowerOfThree(int $a): bool
    {
        if ($a <= 0) {
            $this->logger->err('Number is less then 0.');
            return false;
        }
        while ($a % 3 === 0) {
            $a /= 3;
        }
        return $a === 1;
    }
}
