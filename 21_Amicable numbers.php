<?php

function divisorSum($num){
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
    return $sum + 1;
}

function amicable($num){
    $x = divisorSum($num);
    $y = divisorSum($x);
    if($y == $num && $x < 10000 && $num != $x){
        return $num + $x;
    } else {
        return 0;
    }
}

function amiCheck($num){
    $sum = 0;
    while($num > 2){
        $num--;
        $sum += amicable($num);
    }
    echo $sum/2;
}

amiCheck(10000);

?>