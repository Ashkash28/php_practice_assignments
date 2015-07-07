<?php

$A = array(2, 4, 10, 16);

function multiply($array, $number) {
	for($i = 0; $i < count($array); $i++) {
		$array[$i] = $array[$i] * $number;

	}
	return $array;
}

$B = multiply($A, 5);
var_dump($B);

?>