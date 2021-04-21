<?php

function isPrime($num){
    for($j = 2; $j <= $num ** 0.5; $j++) {
        if ($num % $j == 0) {
            return FALSE;
        }
    }
    return TRUE;
}

function isPermutation($arr){
    $res = [];
    foreach($arr as $v){
        $arr1 = str_split(strval($v));
        sort($arr1);
        $res[] = implode("",$arr1);
    }
    if($res[0] == $res[1] && $res[0] == $res[2]){
        return TRUE;
    }
}

function seqCheck(){
    for($i = 1000; $i < 3340; $i++){ //the max number is because of the sequence addition is 3330 and the second number will be 2 * 3330 and because its 4digits number the maximum first number of the sequence is 10000 - 6660
        $j = $i + 3330;
        $k = $j + 3330;
        $arr = [$i,$j,$k];
        if(isPermutation($arr) && isPrime($i) && isPrime($j) && isPrime($k)){
            echo nl2br($i."-".$j."-".$k."\n");
        }
    }
}

seqCheck();

?>