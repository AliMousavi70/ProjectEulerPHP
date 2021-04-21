<?php

function isPrime($num){
    if($num == 2 || $num == 3){
        return TRUE;
    } else {
        for($j = 2; $j <= $num ** 0.5; $j++) {
            if ($num % $j == 0) {
                return FALSE;
            }
        }
        return TRUE;
    }
}

function largePrime($i,$num){
    $sum = 0;
    $primeSum = 0;
    $count = 0;
    $realCount = 0;
    while ($sum + $i < $num){
        if(isPrime($i)){
            $sum += $i;
            $count++;
            if(isPrime($sum)){
                $primeSum = $sum;
                $realCount = $count;
            }
        }
        $i++;
    }
    return [$primeSum,$realCount];
}

function checkAll($num){
    $start = time();
    $sum = 0;
    $count = 0;
    for($i = 2; $i < $num; $i++){
        $arr = largePrime($i,$num);
        if($arr[1] > $count){
            $count = $arr[1];
            $sum = $arr[0];
        }
    }
    echo nl2br("Sum is => ".$sum."\n");
    echo nl2br("Prime amount is => ".$count."\n");
    echo "solved in : ".(time() - $start);
}

checkAll(1000000);

?>

