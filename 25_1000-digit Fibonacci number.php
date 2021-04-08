<?php

function fibonacciDigits($num){
    $digits = ($num * log10(1.6180339887498948)) - (log10(5)/2);
    return ceil($digits);
}

function checkDigits($num){
    $i = 1;
    $digits = 0;
    while($digits < $num) {
        $digits = fibonacciDigits($i);
        $i++;
    }
    return $i - 1;
}

echo checkDigits(1000);

?>