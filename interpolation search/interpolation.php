<?php

function interpol($arr, $lo, $hi, $x){

    $pos;

    if($lo <= $hi && $x >= $arr[$lo] && $x <= $arr[$hi]){


    $pos = $lo + floor((($hi - $lo) / ($arr[$hi] - $arr[$lo]) * ($x - $arr[$lo])));


    if($arr[$pos] === $x){

        return print($pos);

    }


    if($arr[$pos] < $x){

        interpol($arr, $pos + 1 , $hi, $x);

    }

    if($arr[$pos] > $x){

        interpol($arr, $lo , $hi -1, $x);
    }


    }

    return -1;


};

$arr = [10, 12, 13, 16, 18, 19, 20, 21, 22, 23, 24, 33, 35, 42, 47];

$x = 33;

$n = count($arr) -1;

interpol($arr, 0 , $n, $x);