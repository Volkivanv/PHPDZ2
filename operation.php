<!-- 1. Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа, третий – операция. Обязательно использовать оператор return. -->
<?php

$a = 4;
$b = 5;


function add($arg1, $arg2) : float {
    return $arg1 + $arg2;
}

function sub($arg1, $arg2) : float {
    return $arg1 - $arg2;
}

function multiplicate($arg1, $arg2) : float {
    return $arg1 * $arg2;
}

function div($arg1, $arg2) : float {
    return $arg1 / $arg2;
}

echo "summ is: ".add($a,$b)."\n";
echo "subtraction is: ".sub($a,$b)."\n";
echo "product is: ".multiplicate($a,$b)."\n";
echo "quotient is: ".div($a,$b)."\n";

//docker run --rm -v ${pwd}:/cli php:8.2-cli php /cli/operation.php