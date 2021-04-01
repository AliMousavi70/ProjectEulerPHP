<?php

$alphabet = "abcdefghijklmnopqrstuvwxyz";
$alphaPos = str_split($alphabet);
$alphaPos = array_flip($alphaPos);



function getNames($fileName){
    $file = fopen($fileName,"r");
    $text = fread($file,filesize($fileName));
    fclose($file);
    $text = str_replace("\"","",$text);
    $arr = explode(",",$text);
    sort($arr);
    return $arr;
}

function characterSum($name,$alphaPos){
    $nameArr = str_split(strtolower($name));
    $sumAlpha = 0;
    foreach ($nameArr as $k => $v){
        $sumAlpha += $alphaPos[$v] + 1;
    }
    return $sumAlpha;
}

function NameScore($fileName,$alphaPos){
    $arr = getNames($fileName);
    $score = 0;
    foreach($arr as $k => $v){
        $score += ($k + 1)*characterSum($v,$alphaPos);
    }
    return $score;
}

echo NameScore("p022_names.txt",$alphaPos);

?>