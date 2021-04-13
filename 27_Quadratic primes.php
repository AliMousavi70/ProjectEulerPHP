<?php

function isPrime($num){
    // $i can be equel and greater
    if($num < 2){
        return FALSE;
    } else {
        for($i = 2; $i < $num ** 0.5 + 1; $i++){
            if($num % $i == 0){
                return FALSE;
            }
        }
        return TRUE;
    }
}

function formulaPrimes($a,$b){
    $i = 0;
    $isPrime = TRUE;
    while($isPrime === TRUE){
        $quadratic = ($i * $i) + ($a * $i) + $b;     
        $isPrime = isPrime($quadratic);
        $i++;
    }
    return $i;
}

function startCheck($bLimit){
    $startTime = time();
    $bArr[0] = 2;
    for($i = 2;$i <= $bLimit; $i++){
        if(isPrime($i) === TRUE){
            $bArr[] = $i;
        }
    }
    echo json_encode($bArr);
    $count = 0;
    $product = 0;
    foreach($bArr as $v){
        if($v != 2){
            $a = -999;
        } else {
            $a = -998;
        }
        for($a; $a < 1000; $a += 2){
            $x = formulaPrimes($a,$v);
            if($count <= $x){
                $count = $x;
                $product = $a * $v;
                echo nl2br("a : $a and b : $v \n");
            }
        }       
    }
    echo nl2br("Result is :".$product."\n");
    echo nl2br("count is : ".$count."\n");
    echo nl2br("Start time : ".$startTime."\n");
    echo nl2br("End time : ".time()."\n");
    echo "Runtime is : ".(time() - $startTime);
}

startCheck(1000);

?>
