<?php

function sumDigitsPower($arr,$pow){
    $sum = 0;
    foreach ($arr as $v){
        $sum += $v ** $pow;
    }
    return $sum;
}

function isEqual($max,$pow){
    $sum = 0;
    for ($i = 2; $i < $max; $i++){
        $x = strval($i);
        $arr = str_split($x);
        $x = sumDigitsPower($arr,$pow);
        if($x == $i){
            $sum += $i;
        }
    }
    return $sum;
}

echo isEqual(400000,5);

?>