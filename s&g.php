<?php
$number = rand(50, 100);

?> 

<html>
<head>
	<title></title>
</head>

<body>
	<?php
	for($i = 0; $i < 100; $i++) {
		$number = rand(50, 100); 
	
		if (90 <= $number && $number <= 100)
		{
		echo '<h1> Your Score is '.$number. '/100</h1>';
		?> <h2>Your grade is A</h2>
		<?php
		} 
		elseif (80 <= $number && $number < 90)
		{
			echo'<h1> Your Score is '.$number. '/100</h1>';
			?> <h2>Your grade is B</h2>
			<?php
		} 
		elseif (70 <= $number && $number < 80)
		{
			echo'<h1> Your Score is '.$number. '/100</h1>';
			?><h2>Your grade is C</h2>
			<?php
		}
		 elseif ($number < 70) 
		{
			echo'<h1> Your Score is '.$number.'/100</h1>';
			?><h2>Your grade is D</h2>
			<?php
		}
	}
?>


</body>
</html>