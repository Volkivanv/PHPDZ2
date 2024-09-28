<?php

// 5. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.


$a = 4;
$b = 5;


function power($val, $pow) {
    if($pow == 1) return $val;
    return $val*power($val, $pow - 1);
}

echo "power is: ".power($a,$b)."\n";

//docker run --rm -v ${pwd}:/cli php:8.2-cli php /cli/recursionPower.php