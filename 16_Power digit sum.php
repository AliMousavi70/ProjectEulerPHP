<?php

function digitSum($num){
    $sum = 0;
    for($i = 0; $i < strlen($num); $i++){
        $sum += intval($num[$i]);
    }
    echo $sum;
}

digitSum(strval(number_format(2 ** 1000,0,"","")));

?>