<html lang = 'en'>
<head>
	<meta charset="UTF-8">
	<title>Multiplication Table</title>
	<style>
		.border {
		border: 1px solid black;
		width: 400px;
		height: 40px;
		}

		.grey {
			background-color: #B8B8B8;
		}

		table, tr, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 10px;
		}
	</style>
</head>

<body>
	<table class='border'>
	<thead>
		<?php
			for($j = 0; $j <= 9; $j++) {
				echo '<td class= "grey">'. $j. '</td>';
			}
		?>
	</thead>
	<tbody>
		<?php
		$counter = 1;

			for($x = 0; $x < 9; $x++) {
				if($x % 2 == 0) {
					echo '<tr>';
				}
				else {
					echo '<tr class="grey">';
				};

				(echo '<td>'. $counter. '</td>';)

				for($y = 1; $y <= 9; $y++) {
					echo '<td>'. $y * $counter. '</td>';
				}
				echo '</tr>';
				$counter++;
			}
		?>
	</tbody>
		<!-- <tr class='border grey'>
			<td class='border'></td>
			<td class='border'>1</td>
			<td class='border'>2</td>
			<td class='border'>3</td>
			<td class='border'>4</td>
			<td class='border'>5</td>
			<td class='border'>6</td>
			<td class='border'>7</td>
			<td class='border'>8</td>
			<td class='border'>9</td>
		</tr>
		<tr class='border'>
			<td class='border'>1</td>
			<td class='border'>1</td>
			<td class='border'>2</td>
			<td class='border'>3</td>
			<td class='border'>4</td>
			<td class='border'>5</td>
			<td class='border'>6</td>
			<td class='border'>7</td>
			<td class='border'>8</td>
			<td class='border'>9</td>
		</tr>
		<tr class='border grey'>
			<td class='border'>2</td>
			<td class='border'>2</td>
			<td class='border'>4</td>
			<td class='border'>6</td>
			<td class='border'>8</td>
			<td class='border'>10</td>
			<td class='border'>12</td>
			<td class='border'>14</td>
			<td class='border'>16</td>
			<td class='border'>18</td>
		</tr>
		<tr class='border'>
			<td class='border'>3</td>
			<td class='border'>3</td>
			<td class='border'>6</td>
			<td class='border'>9</td>
			<td class='border'>12</td>
			<td class='border'>15</td>
			<td class='border'>18</td>
			<td class='border'>21</td>
			<td class='border'>24</td>
			<td class='border'>27</td>
		</tr>
		<tr class='border grey'>
			<td class='border'>4</td>
			<td class='border'>4</td>
			<td class='border'>8</td>
			<td class='border'>12</td>
			<td class='border'>16</td>
			<td class='border'>20</td>
			<td class='border'>24</td>
			<td class='border'>28</td>
			<td class='border'>32</td>
			<td class='border'>36</td>
		</tr>
		<tr class='border'>
			<td class='border'>5</td>
			<td class='border'>5</td>
			<td class='border'>10</td>
			<td class='border'>15</td>
			<td class='border'>20</td>
			<td class='border'>25</td>
			<td class='border'>30</td>
			<td class='border'>35</td>
			<td class='border'>40</td>
			<td class='border'>45</td>
		</tr>
		<tr class='border grey'>
			<td class='border'>6</td>
			<td class='border'>6</td>
			<td class='border'>12</td>
			<td class='border'>18</td>
			<td class='border'>24</td>
			<td class='border'>30</td>
			<td class='border'>36</td>
			<td class='border'>42</td>
			<td class='border'>48</td>
			<td class='border'>54</td>
		</tr>
		<tr class='border'>
			<td class='border'>7</td>
			<td class='border'>7</td>
			<td class='border'>14</td>
			<td class='border'>21</td>
			<td class='border'>28</td>
			<td class='border'>35</td>
			<td class='border'>42</td>
			<td class='border'>49</td>
			<td class='border'>56</td>
			<td class='border'>63</td>
		</tr>
		<tr class='border grey'>
			<td class='border'>8</td>
			<td class='border'>8</td>
			<td class='border'>16</td>
			<td class='border'>24</td>
			<td class='border'>32</td>
			<td class='border'>40</td>
			<td class='border'>48</td>
			<td class='border'>56</td>
			<td class='border'>64</td>
			<td class='border'>72</td>
		</tr>
		<tr class='border'>
			<td class='border'>9</td>
			<td class='border'>9</td>
			<td class='border'>18</td>
			<td class='border'>27</td>
			<td class='border'>36</td>
			<td class='border'>45</td>
			<td class='border'>54</td>
			<td class='border'>63</td>
			<td class='border'>72</td>
			<td class='border'>81</td>
		</tr> -->
	</table>
</body>
</html>