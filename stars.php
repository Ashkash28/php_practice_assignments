<?php

function draw_stars($array) {
		for($i = 0; $i < count($array); $i++) {
			if(!is_numeric($array[$i])) {
				for($k = 0; $k < strlen($array[$i]); $k++) {
					echo strtolower(substr($array[$i], 0,1));
				}
					echo '<br>';
				}
			else {
				for($j = 0; $j < $array[$i]; $j++) {
						echo "*";	
			}
			echo "<br>";
		}
	}
}
$x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");

draw_stars($x);

?>