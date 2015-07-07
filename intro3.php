<?php

$A = array(1, 2, 5, 10, 255, 3);
$average = 0;

for($i = 0; $i < count($A); $i++) {
	$average = $average + $A[$i];
}

$average = $average / count($A);

echo $average;

?>