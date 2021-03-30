<?php

function seq($num){
    if($num % 2 == 0){
        return $num/2;
    } else {
        return $num * 3 + 1;
    }
}

function seqCount($num){
    $count = 1;
    $currNum = seq($num);
    while($currNum != 1){
        $count++;
        $currNum = seq($currNum);
    }
    return $count;
}

function checkSeq($num){
    $x = 2;
    $maxSetAmount = 0;
    $maxSetNumber = 0;
    while($x < $num){
        // echo nl2br($x." : ".seqCount($x)."\n");
        if(seqCount($x) > $maxSetAmount){
            $maxSetAmount = seqCount($x);
            $maxSetNumber = $x;
        }
        $x++;
    }
    echo $maxSetNumber;
}

checkSeq(1000000);

?>