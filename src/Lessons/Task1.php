<?php

declare(strict_types=1);

namespace BasicPhp\Lessons;

class Task1
{
    public function binarySum(string $a, string $b): string
    {
        return decbin(bindec($a) + bindec($b));
    }
}
