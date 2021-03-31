<?php

function checkWeekDay($date){
    if(date("l",$date) == "Sunday"){
        return 1;
    } else {
        return 0;
    }
}

function firstDayGen($from,$to){
    $sum = 0;
    for($year = $from; $year <= $to;$year++){
        for($month = 1; $month <= 12; $month++){
            $sum += checkWeekDay(mktime(0,0,0,$month,1,$year));
        }
    }
    echo $sum;
}

firstDayGen(1901,2000);

?>