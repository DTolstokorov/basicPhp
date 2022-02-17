<?php

require_once __DIR__ . '/../vendor/autoload.php';

//echo (new \BasicPhp\Lessons\Task1())->binarySum('111', '100');
//echo (new \BasicPhp\Lessons\Task7())->isHappy('101101');
//echo (new \BasicPhp\Lessons\Task4())->addDigits(38);
//(new \BasicPHP\Lessons\Task8())->fizzBuzz(11, 20);
//(new \BasicPhp\Lessons\Task8())->fizzBuzz('11', '20');

$config = require __DIR__ . '/../config.php';


$logger = \BasicPhp\Logger\LoggerFactory::getInstance($config)->createLogger();

(new \BasicPhp\Lessons\Task2($logger))->isPowerOfThree(-2);
