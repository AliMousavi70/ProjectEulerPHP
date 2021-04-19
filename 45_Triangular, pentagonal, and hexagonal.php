<?php

function isPentagon($num){
    $n = (sqrt((24 * $num) + 1) + 1)/6;
    return $n == floor($n);
}

function isTriangle($num){
    $n = (sqrt(8 * $num + 1) - 1)/2;
    return $n == floor($n);
}

function HexagonalSet($num){
    $count = 0;
    $result = 0;
    $i = 1;
    while ($count < $num){
        $x = $i * (2 * $i - 1);
        if(isPentagon($x) && isTriangle($x)){
            $result = $x;
            $count++;
        }
        $i++;
    }
    return $result;
}

echo HexagonalSet(3);

?>