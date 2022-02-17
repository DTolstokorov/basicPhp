<?php

namespace BasicPhp\Lessons;

class Task8
{
    public function fizzBuzz(int $begin, int $end): void
    {
        print_r($this->generateFizzBuzz($begin, $end));
    }

    public function generateFizzBuzz(int $begin, int $end): string
    {
        if ($begin > $end) {
            return '';
        }

        $result = '';

        for ($i = $begin; $i <= $end; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                $result .= "FizzBuzz ";
            } elseif ($i % 3 === 0) {
                $result .= ("Fizz ");
            } elseif ($i % 5 === 0) {
                $result .=  "Buzz ";
            } else {
                $result .= "{$i} ";
            }
        }
        return $result;
    }
}
