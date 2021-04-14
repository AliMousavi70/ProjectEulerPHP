<?php

function allPowers($minA,$minB,$maxA,$maxB){
    $arr = [];
    for($a = $minA; $a <= $maxA; $a++){
        for($b = $minB; $b <= $maxB; $b++){
            $x = gmp_pow($a,$b);
            if(array_search($x,$arr) == FALSE){
                $arr[] = $x;
            }
        }
    }
    return count($arr);
}

echo allPowers(2,2,100,100);

?>