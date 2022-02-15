<?php

namespace BasicPhp\Lessons;

class Task7
{
    public function isHappy(string $number): bool
    {
        $lenght = strlen($number);

        if ($lenght % 2 !== 0 || $lenght === 0) {
            throw new \Exception('Wrong number!');
        }

        $firstHalf = $this->countSumm(substr($number, $lenght / 2));
        $secondHalf = $this->countSumm(substr($number, 0, $lenght / 2));

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
