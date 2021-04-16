<?php

function isPrime($num){
    if($num < 2){
        return false;
    } elseif ($num == 2 || $num == 3){
        return True;
    } else {
        for($i = 2; $i <= $num ** 0.5; $i++){
            if($num % $i == 0){
                return false;
            }
        }
        return true;
    }
}

function isBothTruncatable($num){
    $str = strval($num);
    for($i = 1; $i < strlen($str);$i++){
        if(isPrime(intval(substr($str,$i))) == false){
            return FALSE;
        }
    }
    for($i = strlen($str) - 1;$i > 0; $i--){
        if(isPrime(intval(substr($str,0,$i))) == false){
            return FALSE;
        }
    }
    return TRUE;
}

function findBothTruncatable($num){
    $count = 0;
    $i = 10;
    $sum = 0;
    while($count < $num){
        if(isPrime($i)){
            if(isBothTruncatable($i)){
                $sum += $i;
                $count++;
            }
        }
        $i++;
    }
    return $sum;
}

echo findBothTruncatable(11);

?>