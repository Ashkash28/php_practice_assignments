<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
	?>
	<select>
		<?php
			for($i = 0; $i < count($states); $i++) 
			{
				echo"<option>". $states[$i]. "</option>";
			}
		?>
	</select>

	<select>
		<?php
			foreach ($states as $value)
			{
				echo "<option>". $value. "</option>";
			}
		?>
	</select>

	<select>
		<?php
			array_push($states, 'NJ', 'NY', 'DE');
			foreach ($states as $value)
			{
				echo "<option>". $value. "</option>";
			}
		?>
	</select>

	<?php
		$users = array("first_name" => "Matt", "last_name" => "Smith");
		$counter = 0;
		foreach($users as $key => $value)
		{
			
			if($counter == 1){
				echo $key;

			}
			$counter++;
			// if($users($key) == 0)
			// {
			// 	echo $key;
			// }
		}
		
		?>
</body>
</html>