<?php

function isPandigital($num){
    $str = strval($num);
    for($i = 0; $i < strlen($str); $i++){
        if(substr_count($str,$str[$i]) != 1){
            Return false;
        }
    }
    return TRUE;
}

function check($num){
    $arr = [];
    for($i = 10; $i <= 999; $i++){
        if (isPandigital($i) && $i % $num == 0){
            if($i < 100){
                $arr[] = "0".strval($i);
            } else {
                $arr[] = strval($i);
            }
        }
    }
    return $arr;
}

function buildAll(){
    $arr = [];
    $primes = [17,13,11,7,5,3,2];
    for($i = 0; $i < count($primes); $i++){
        if($i == 0){
            $arr = check($primes[$i]);
        } else {
            $res = check($primes[$i]);
            foreach($res as $v){
                foreach ($arr as $w){
                    if(substr($v,1,2) == substr($w,0,2)){
                        $temp[] = $v.substr($w,2);
                    }
                }
            }
            $arr = $temp;
        }

    }
    return $arr;
}

function lastCheck(){
    $arr = buildAll();
    $res = 0;
    foreach($arr as $v){
        if(isPandigital($v) && strlen($v) == 9){
            for($i = 0; $i <=9; $i++){
                if(strpos($v,strval($i)) === false){
                    echo nl2br(strval($i).$v."\n");
                   $res += intval(strval($i).$v);
                }
            }
        }
    }
    echo $res;
}

lastCheck();

?>
