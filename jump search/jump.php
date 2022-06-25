<?php

function search($arr,$x){

    $siz = sizeof($arr);

    $step = sqrt($siz);

    $prev = 0;

    // jump search
    while($arr[$step-1] < $x){

        $prev = $step;
        $step += sqrt($siz);

        if($prev >= $siz){
            return -1;
        }
    }

    // linear search
    while($arr[$prev] < $x){

        $prev++;

        if($prev === $step){
            return -1;
        }
    }

    if($arr[$prev] === $x){
        return print($prev . " _ " . $arr[$prev]);
    }


}

$arr = [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610];

$x = 55;

search($arr,$x);