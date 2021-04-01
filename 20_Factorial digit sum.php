<?php

function factorial($num){
    $arr = [];
    $res = "";
    if($num < 0){
        echo "Wrong Number";
    } elseif($num == 0){
        return 1;
    } elseif($num <= 20){
        $res = 1;
        for($i = 1; $i <= $num; $i++){
            $res *= $i;
        }
        return $res;
    } else {
        $res = strval(factorial(20));
        for ($i = 21; $i <= $num; $i++){        
            $arr = str_split(strrev($res));
            $remain = 0;
            $result = [];
            for($j= 0; $j < count($arr); $j++){
                $pro = intval($arr[$j]) * $i + $remain;
                $product = strval($pro % 10);
                $remain = ($pro - $product)/10;
                $result[] = $product;
            }
            $result[] = $remain;
            $res = implode("",array_reverse($result));
            // echo nl2br($i." : ".strrev(implode("",$arr))."\n");
        }
        return $res;
    }
}

function sumFactDigits($num){
    $str = factorial($num);
    $res = 0;
    for($i = 0; $i < strlen($str); $i++){
        $res += intval($str[$i]);
    }
    return $res;
}

echo sumFactDigits(100);

?>