<?php

function isPrime($num){
    if($num < 2){
        return FALSE;
    } elseif ($num == 2 || $num == 3) {
        return True;
    } else {
        for($i = 2; $i < $num ** 0.5; $i++){
            if($num % $i == 0){
                return FALSE;
            }
        }
        return TRUE;
    }
}

function isPandigital($num,$set){
    $arr = str_split(strval($num));
    sort($arr);
    $str = implode("",$arr);
    if($str == strval($set)){
        if(isPrime($num)){
            return true;
        }
    }
    return false;
}

function maxPrimPan(){
    $maxNum = 0;
    $arr = [12,123,1234,1234567]; //other array values like 12345 or 12345678, all pandigital numbers will NOT be prime because their numbers can be divide by 3 or 9
    for($j = count($arr) - 1; $j >= 0; $j--){
        for($i = intval(strrev(strval($arr[$j]))); $i >= $arr[$j]; $i--){
            $x = isPandigital($i,$arr[$j]);
            if($x === TRUE && $maxNum < $i){
                $maxNum = $i;
            }
        }
        if($maxNum > 0){
            return $maxNum;
        }
    }
    return $maxNum;
}

echo maxPrimPan();

?>
