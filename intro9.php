<?php

for($i = 1; $i <= 2000; $i++) {
	echo 'Number is '. $i. '<br>'; 
	if ($i%2 == 0) {
		echo 'This is an even number. <br>';
	} else {
		echo 'This is an odd number. <br>';
	}
}

?>