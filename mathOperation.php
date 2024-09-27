<!-- 2. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch). -->
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

function mathOperation($arg1, $arg2, $operation) : float {
    switch ($operation) {
        case "+": $result = $arg1 + $arg2; break;
        case "-": $result = $arg1 - $arg2; break;
        case "*": $result = $arg1 * $arg2; break;
        case "/": $result = $arg1 / $arg2; break;
    }
    return $result;
}

echo "summ is: ".mathOperation($a, $b, "+")."\n";
echo "subtraction is: ".mathOperation($a, $b, "-")."\n";
echo "product is: ".mathOperation($a, $b, "*")."\n";
echo "quotient is: ".mathOperation($a, $b, "/")."\n";

//docker run --rm -v ${pwd}:/cli php:8.2-cli php /cli/mathOperation.php