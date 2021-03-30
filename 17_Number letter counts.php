<?php

$DigitCount = [
    0 => 0,
    1 => 3,
    2 => 3,
    3 => 5,
    4 => 4,
    5 => 4,
    6 => 3,
    7 => 5,
    8 => 5,
    9 => 4,
    10 => 3,
    11 => 6,
    12 => 6,
    13 => 8,
    14 => 8,
    15 => 7,
    16 => 7,
    17 => 9,
    18 => 8,
    19 => 8,
    20 => 6,
    30 => 6,
    40 => 5,
    50 => 5,
    60 => 5,
    70 => 7,
    80 => 6,
    90 => 6
];


function digits($num,$DigitCount){
    $amount = strlen(strval($num));
    switch ($amount) {
        case 1:
            return $DigitCount[$num];
            break;
        
        case 2:
            return twoDigits($num,$DigitCount);
            break;

        case 3:
            return threeDigits($num,$DigitCount);
            break;

        case 4:
            return 11;
            break;

        default:
            echo "Number must be between 1 and 1000";
            break;
    }
}

function twoDigits($num,$DigitCount){
    global $DigitCount;
    switch (TRUE) {
        case ($num <= 20):
            return $DigitCount[$num];
            break;
        
        default:
            $x = floor($num/10)*10;
            $y = $num - $x;
            return $DigitCount[$x] + $DigitCount[$y] ;
            break;
    }
}

function threeDigits($num,$DigitCount){
    $x1 = floor($num/100);
    $x2 = $num - $x1*100;
    switch (TRUE) {
        case ($x2 > 0 & $x2 <= 20):
            return $DigitCount[$x2] + $DigitCount[$x1] + 10;
            break;

        case ($x2 == 0):
            return $DigitCount[$x1] + 7;
            break;
        
        default:
            $x2 = floor($x2/10)*10;
            $x3 = $num - $x1 * 100 - $x2;
            return $DigitCount[$x1] + $DigitCount[$x2] + $DigitCount[$x3] + 10 ;
            break;
    }
}

function start($num,$digit){
    $sum = 0;
    for($i = 1; $i <= $num; $i++){
        echo nl2br($i." : ".digits($i,$digit)."\n");
        $sum += digits($i,$digit);
    }
    echo $sum;
}

start(1000,$DigitCount);



?>
