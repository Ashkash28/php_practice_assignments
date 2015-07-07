
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		<?php

		function print_lists($array) {
				for($i = 0; $i < count($array); $i++) {
					echo "<li>". $array[$i]. "</li>";
			}
		}

		$A = array(2, 3, 'hello');
		print_lists($A);

		?>

	</ul>

</body>
</html>