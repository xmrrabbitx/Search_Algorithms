<?php

// binary search

function search($arr,$x,$index,$count){

	$mid = ceil($index +($count - $index) / 2);

	if($arr[$mid] === $x){

	return print($arr[$mid]);

	}



	if($arr[$mid] > $x){


	return search($arr,$x, $index, $count-1);

	}

	if($arr[$mid] < $x){


	return search($arr,$x,$index,$count+1);
	}




}



$arr = [10, 20, 30, 80, 50, 60, 110, 130, 140, 170];

sort($arr);

$x = 170;

$count = count($arr);

$index = 0;

search($arr,$x,$index, $count-1);





