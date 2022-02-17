<?php

namespace BasicPhp\Lessons;

class Task5
{
    public function brackets(string $string): bool
    {
        $open = 0;
        $closed = 0;
        for ($i = 0, $iMax = strlen($string); $i < $iMax; $i++) {
            $string[$i] === ')' ? $closed++ : $open++;
            if ($closed > $open) {
                return false;
            }
        }
        return $open === $closed;
    }
}
