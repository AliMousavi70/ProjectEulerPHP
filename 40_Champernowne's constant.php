<?php

function createString($num){
    $str = "";
    $i = 1;
    while(strlen($str) <= $num){
        $str = $str.strval($i);
        $i++;
    }
    return $str;
}

function findDigit($num){
    $str = createString($num);
    $res = 1;
    for ($i = 1; $i <= $num; $i *=   10){
        $x = intval(substr($str,$i-1,1));
        $res *= $x;
        echo nl2br($x."\n");
    }
    return $res;
}

echo findDigit(1000000);

?>
