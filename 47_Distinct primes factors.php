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

function primeCount($num,$primes){
    $count = 0;
    foreach ($primes as $v){
        if($v <= $num / 2 && $num % $v == 0){
            $count++;
        }
    }
    return $count;
}

function consecutiveSet($num){
    $count = 0;
    $i = 4;
    $primes = primeSet(1000); // its just a limitation to raise the speed. we can define a loop when $i reached the num, it find next 1000 primes
    while($count < $num){
        if(primeCount($i,$primes) == $num){
            $count++;
        } else {
            $count = 0;
        }
        $i++;
    }
    return $i - $num;
}

echo consecutiveSet(4);

?>