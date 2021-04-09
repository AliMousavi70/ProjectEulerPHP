<?php

function recurringDigits($num){
    $res = "";
    $arr = [];
    $rem = 1 % $num;
    while($rem != 0 && !array_key_exists($rem,$arr)){
        $arr[$rem] = strlen($res);
        $rem *= 10;
        $x = strval(floor($rem/$num));
        $res .= $x;
        $rem %= $num;
    }
    if($rem == 0){
        return FALSE;
    } else {
        return substr($res,$arr[$rem]);
    }
}

function checkRecurring($num){
    $count = 0;
    $number = 0;
    for($i = 1; $i < $num; $i++){
        $x = recurringDigits($i);
        if($x != FALSE && $count < strlen($x)){
            $count = strlen($x);
            $number = $i;
        }
    }
    echo nl2br("Number is : ".$number."\n");
    echo "Digits Amount is : ".$count;
}

checkRecurring(1000);


?>

