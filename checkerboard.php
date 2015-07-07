<html>
<head>
	<meta charset='UTF-8'>
	<title>Checkerboard</title>
	<style>
		.red {
		background-color: red;
		height: 20px;
		width: 20px;
		}

		.black {
			background-color: black;
			height: 20px;
			width: 20px;
		}

	</style>
</head>

<body>
	<table>
		<?php
		for($k = 0; $k < 8; $k++) {
			echo "<tr>";
			for($i = $k; $i < $k + 7; $i++) {
				if($i % 2 == 0) {
					echo "<td class='red'></td>";
				} else {
					echo "<td class='black'></td>";
				}
			}
			echo "</tr>";
		}
		?>
		
		<!-- <tr>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
		</tr>
		<tr>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
		</tr>
		<tr>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
		</tr>
		<tr>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
		</tr>
		<tr>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
		</tr>
		<tr>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
		</tr>
		<tr>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
		</tr>
		<tr>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
			<td class='black'></td>
			<td class='red'></td>
		</tr> -->
		
	</table>

</body>
</html>