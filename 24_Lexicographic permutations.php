<?php

function factorial($num){
    $res = 1;
    if($num >= 0 || is_int($num)){
        switch($num){
            case '0':
                $res = 1;
                break;
            case '1':
                $res = 1;
                break;
            default:
                $res = $num * factorial($num - 1);
            break;
        }
    } else {
        echo "Number must be Integer";
    }
    return $res;
}

function ragham($pos,$dig){
    $div = factorial($dig);
    $i = 0;
    while ($pos > $div * $i){
        $i++;
    }
    return $i - 1;
}

function countDown($pos,$arr){
    $duplicate = $arr;
    $rem = $pos;
    $digRem = count($arr) - 1;
    $result = [];
    for($i = $digRem; $i >= 0; $i--){
        $x = ragham($rem,$i);
        $result[] = $duplicate[$x];
        unset($duplicate[$x]);
        $duplicate = array_values($duplicate);
        $rem = $rem - ($x * factorial($i));
    }
    return implode("",$result);
}

$digits = [0,1,2,3,4,5,6,7,8,9];
echo countDown(1000000,$digits);



?>