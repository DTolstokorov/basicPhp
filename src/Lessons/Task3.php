<?php

namespace BasicPhp\Lessons;

class Task3
{
    public function fib(int $number): int
    {
        if ($number < 0) {
            throw new \UnexpectedValueException('Wrong input');
        }

        $fibbonachi = [0, 1];

        $i = 2;
        while ($i <= $number) {
            $fibbonachi[$i] = $fibbonachi[$i - 2] + $fibbonachi[$i - 1];
            $i++;
        }

        return $fibbonachi[$number];
    }
}
