<?php

namespace BasicPhp\Lessons;

class Task4
{
    public function addDigits(int $num): int
    {
        if ($num < 0) {
            throw new \Exception('Not a correct value');
        }

        $temp = (string)$num;
        $sum = 0;
        for ($i = 0, $iMax = strlen((string)$num); $i < $iMax; $i++) {
            $sum += $temp[$i];
        }
        if (strlen($sum) > 1) {
            return self::addDigits($sum);
        }

        return $sum;
    }
}
