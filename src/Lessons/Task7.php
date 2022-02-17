<?php

namespace BasicPhp\Lessons;

class Task7
{
    public function isHappy(string $number): bool
    {
        $length = strlen($number);

        if ($length % 2 !== 0 || $length === 0) {
            throw new \Exception('Wrong number!');
        }

        $firstHalf = $this->countSumm(substr($number, $length / 2));
        $secondHalf = $this->countSumm(substr($number, 0, $length / 2));

        return $firstHalf === $secondHalf;
    }

    public function countSumm(string $number): string
    {
        $sum = 0;

        for ($i = 0, $iMax = strlen((int)$number); $i < $iMax; $i++) {
            $sum .= $number[$i];
        }
        return $sum;
    }
}
