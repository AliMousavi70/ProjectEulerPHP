<?php

function inBinary($num){
    return decbin($num);
}

function isSymmetric($num)
{
    $str = strval($num);
    $len = strlen($str);
    if (strlen($str) % 2 == 0) {
        $first = substr($str, 0, ($len / 2));
        $second = strrev(substr($str, $len / 2));
        if ($first == $second) {
            return TRUE;
        }
    } else {
        $first = substr($str, 0, floor($len / 2));
        $second = strrev(substr($str, ceil($len / 2)));
        if ($first == $second) {
            return TRUE;
        }
    }
}

function allPalindromic($num){
    $sum = 0;
    for($i = 1; $i < $num; $i++){
        if(isSymmetric($i) && isSymmetric(inBinary($i))){
            $sum += $i;
        }
    }
    return $sum;
}

echo allPalindromic(1000000);

?>