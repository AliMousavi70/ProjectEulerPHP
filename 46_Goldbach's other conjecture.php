<?php

function primeSet($num){
    $primes = [2,3];
    for ($i = 4; $i <= $num; $i++){
        $prime = TRUE;
        for($j = 2; $j <= $i ** 0.5; $j++) {
            if ($i % $j == 0) {
                $prime = FALSE;
                break;
            }
        }
        if($prime){
            $primes[] = $i;
        }
    }
    return $primes;
}

function isPrime($num){
    for($j = 2; $j <= $num ** 0.5; $j++) {
        if ($num % $j == 0) {
            return FALSE;
        }
    }
    return TRUE;
}

function isGoldbatch($num){
    $primes = primeSet($num);
    foreach ($primes as $v){
        $x = sqrt(($num - $v)/2);
        if($x == floor($x)){
//            echo nl2br($num." is Goldbatch \n");
            return TRUE;
        }
    }
    return FALSE;
}

function compositeNums(){
    $goldbatch = TRUE;
    $i = 9;
    while($goldbatch){
        if(!isPrime($i)){
            if(!isGoldbatch($i)){
                $goldbatch = FALSE;
                return $i;
                break;
            }
        }
        $i += 2;
    }
}

echo compositeNums();

?>