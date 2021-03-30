<?php

function factorial($num){
    $x = 2;
    $factorial = 1;
    while($x <= $num){
        $factorial *= $x;
        $x++;
    }
    return $factorial;
}

function pathAmount($num){
    echo factorial($num * 2)/(factorial($num) ** 2);
}

pathAmount(20);

?>