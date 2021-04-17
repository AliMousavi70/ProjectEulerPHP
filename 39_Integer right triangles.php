<?php

function stateAmount($p){
    $count = 0;
    for($a = 1; $a < $p/2;$a++){
        $b = ((2 * $a - $p)*$p)/(2*($a - $p));
        if($b > 0 && is_int($b)){
            $count++;
        }
    }
    return $count / 2;
}

function maxStates($num){
    $count = 0;
    $res = 0;
    for($i = 3;$i <= $num; $i++){
        $x = stateAmount($i);
        if($count < $x){
            $count = $x;
            $res = $i;
        }
    }
    return $res;
}

echo maxStates(1000);

?>
