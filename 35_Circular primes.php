<?php

function isPrime($num){
    if($num < 2){
        return FALSE;
    } elseif ($num == 2 || $num == 3) {
        return True;
    } else {
        for($i = 2; $i < $num ** 0.5; $i++){
            if($num % $i == 0){
                return FALSE;
            }
        }
        return TRUE;
    }
}

function isCircular($num){
    $str = strval($num);
    $str = substr($str,1).$str[0];
    if(isPrime($num) == TRUE){
        while($num != intval($str)){
            if(isPrime(intval($str)) === FALSE){
                return 0;
            }
            $str = substr($str,1).$str[0];
        }
        return 1;
    } else {
        return 0;
    }
}

function findCircular($num){
    $count = 0;
    $countUnder100 = 13;
    for($i = 100; $i < $num; $i++){
        $count += isCircular($i);
    }
    return $count + $countUnder100;
}

echo findCircular(1000000);

?>