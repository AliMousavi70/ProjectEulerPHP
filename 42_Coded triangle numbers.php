<?php

function isTriangle($num){
    $n = sqrt((2 * $num) + 0.25) - 0.5;
    if($n === floor($n)){
        return 1;
    }
    return 0;
}

function readFiles(){
    $file = fopen("PE042.txt","r");
    $str = fread($file,filesize("PE042.txt"));
    $str = str_replace("\"","",$str);
    $str = strtolower($str);
    return explode(",",$str);
}

function countTriangle(){
    $alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $alphabet = array_flip($alphabet);
    $count = 0;
    $words = readFiles();
    foreach($words as $w){
        $sum = 0;
        for($i = 0; $i < strlen($w); $i++){
            $sum += $alphabet[$w[$i]] + 1;
        }
        $count += isTriangle($sum);
    }
    return $count;
}

echo countTriangle();

?>
