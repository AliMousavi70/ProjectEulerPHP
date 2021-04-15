<?php

function fractionCheck(){
    $up = 1;
    $down = 1;
    for($i = 10; $i < 99; $i++){
        for($j = $i + 1; $j <= 99; $j++){
            $div = $i / $j;
            $i = strval($i);
            $j = strval($j);
            if($i[0] == $j[1]){
                $div2 = intval($i[1])/intval($j[0]);
            } elseif ($i[1] == $j[0] && $j[1] != 0){
                $div2 = intval($i[0])/intval($j[1]);
            } else {
                continue;
            }
            if ($div === $div2){
//                echo nl2br($i." / ".$j."\n");
                $up *= $i;
                $down *= $j;
            }
        }
    }
    //made it simple, but we can have a function to be sure about integer dominator
    return $down / $up;
}

echo fractionCheck();

?>