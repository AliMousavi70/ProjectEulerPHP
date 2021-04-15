<?php

function check(){
    $sum = [];
    for($i = 2; $i < 9999; $i++){
        $j = $i + 1;
        $str = "";
        while(strlen($str) < 10){
            $product = $i * $j;
            $str = strval($i).strval($j).strval($product);
            if(strlen($str) == 9){
                $sum[] = checkDigits($str,$product,$i,$j);
            }
            $j++;
        }
    }
    return $sum;
}

function checkDigits($str,$product,$i,$j){
    $arr = str_split($str);
    sort($arr);
    $str2 = implode("",$arr);
    if($str2 === "123456789") {
        echo nl2br($i." * ".$j." == ".$product."\n");
        return $product;
    } else {
        return 0;
    }
}

// we have duplicate values and we must remove them (array_unique)
// also we need summation of the products (Array_sum)
echo array_sum(array_unique(check()));

?>