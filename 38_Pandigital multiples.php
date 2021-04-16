<?php

function isPandigital($str){
    $arr = str_split($str);
    sort($arr);
    $str = implode("",$arr);
    if($str == "123456789"){
        return true;
    }
}

function maxPandigital(){
    $arr =[];
    for($i = 1; $i < 9999; $i++){
        $str ="";
        $j = 1;
        while(strlen($str) <= 9){
            $str = $str.strval($i * $j);
            if(strlen($str) == 9){
                if(isPandigital($str)){
                    $arr[] = intval($str);
                }
            }
            $j++;
        }
    }
    echo json_encode($arr);
    return max($arr);
}

echo maxPandigital();

?>