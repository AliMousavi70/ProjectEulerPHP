<?php

function factorial($num){
    if($num < 0){
        return 0;
    } elseif ($num == 0 || $num == 1){
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}

function digitFact($num,$arr){
    $sum = 0;
    foreach ($arr as $v){
        $sum += factorial($v);
    }
    if($num == $sum){
        return $num;
    } else {
        return 0;
    }
}

function check($maxNum){
    $sum = 0;
    for($i = 10; $i <= $maxNum; $i++){
        $arr = str_split(strval($i));
        $sum += digitFact($i,$arr);
    }
    return $sum;
}

echo check(3000000);

?>