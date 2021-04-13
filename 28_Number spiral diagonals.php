<?php

function diagonalSum($num){
    $diaSum = 0;
    for($i = 1;$i <= $num;$i += 2){
        $diaSum += 4 * ($i * $i) - 6 * ($i-1);
    }
    return $diaSum - 3;
}

echo diagonalSum(1001);

?>
