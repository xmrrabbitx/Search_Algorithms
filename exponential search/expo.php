<?php

$arr = [10, 20, 40, 45, 55];

$x = 10;

$n = count($arr) -1;

if($arr[0] === $x){

    return print("your element is in index 0");
}

$i = 1;
while($i < $n){

    $i = $i * 2;

    // range array
    $start = $i / 2;
    $end = $i;
}

// call function binarysearch
return binarysearch($arr,$start,$end,$x);

// binary search on range list
function binarysearch($arr,$start,$end,$x){

    // find the middle integer of range list
    $mid = $start + ($end - $start) / 2;

    $middle = floor($mid);

    if($arr[$middle] === $x){
        return print($middle);
    }

    if($arr[$middle] > $x){
        binarysearch($arr,$start,$middle -1,$x);
    }
    if($arr[$middle] < $x){
        binarysearch($arr,$middle+1,$end,$x);
    }

}