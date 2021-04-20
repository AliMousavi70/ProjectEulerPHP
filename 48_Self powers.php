<?php

function power10d($num){
    $product = 1;
    for($i = 1; $i <= $num; $i++){
        $product *= $num;
        if(strlen(strval($product)) > 10){
            $product = intval(substr(strval($product),-10));
        }
    }
    return $product;
}

function powerSeries($num){
    $sum = 0;
    for($i = 1; $i <= $num; $i++){
        $sum += power10d($i);
        if(strlen(strval($sum)) > 10){
            $sum = intval(substr(strval($sum),-10));
        }
    }
    return $sum;
}

echo powerSeries(1000);

?>