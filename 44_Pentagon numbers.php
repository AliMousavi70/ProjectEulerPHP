<?php

function isPentagon($num){
    $n = (sqrt((24 * $num) + 1) + 1)/6;
    return $n == floor($n);
}

function check(){
    $i = 1;
    $step = 1;
    $res = 0;
    while($step == 1){
        $i++;
        $x = ($i * (3 * $i - 1))/2;
        for($j = $i - 1; $j >0; $j--){
            $y = ($j * (3 * $j - 1))/2;
            if(isPentagon($x - $y) && isPentagon($x + $y)){
                return $x - $y;
                break;
            }
        }
    }
}

echo check();

?>
