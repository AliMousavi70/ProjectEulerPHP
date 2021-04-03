<?php

function isAbundant($num){
    $sum = 0;
    for($i = 2; $i <= $num ** 0.5; $i++){
        if($num % $i == 0){
            if($num == $i ** 2){
                $sum += $i;
            } else {
                $sum += $i;
                $sum += $num/$i;
            }
        }
    }
    if($sum + 1 > $num){
        return TRUE;
    } else {
        return FALSE;
    }
}

function isAbundantSum($num){
    for ($i = 1; $i <= floor($num/2); $i++){
        if(isAbundant($i) && isAbundant($num - $i)){
            return TRUE;
        }
    }
    return False;
}

function sumNonAboundant($num){
    $sum = 23 * 12;
    for($i = 25;$i <= $num; $i++){
        if(!isAbundantSum($i)){
            $sum += $i;
        }
    }
    return $sum;
}

echo sumNonAboundant(28123);

?>