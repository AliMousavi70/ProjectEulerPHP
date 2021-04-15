<?php

function countWays($total,$array,$step){
    if($total < 0){
        return 0;
    } elseif($total == 0 ){
        return 1;
    } elseif($step == 1){
        return 1;
    } else {
        return countWays($total - $array[$step-1],$array,$step) + countWays($total,$array,$step - 1);
    }
}

$arr = [1,2,5,10,20,50,100,200];
$total = 200;
$step = count($arr);
echo countWays($total,$arr,$step);

?>