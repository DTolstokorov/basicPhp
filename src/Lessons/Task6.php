<?php

namespace BasicPhp\Lessons;

class Task6
{
    public function isPerfect(int $number): bool
    {
        if ($number < 2) {
            return false;
        }

        $sum = 0;
        for ($i = 1; $i < $number; $i++) {
            if ($number % $i === 0) {
                $sum += $i;
            }
        }
        return $sum === $number;
    }
}
