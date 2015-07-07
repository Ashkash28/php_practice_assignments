<html lang = 'en'>
<head>
	<meta charset = 'UTF-8'>
	<title>HTML Table</title>
	<style>
		table {
			border: 1px solid black;
			border-collapse: collapse;
		}
		thead td {
			border: 1px solid black;
			border-collapse: collapse;
			font-weight: 900;
			padding: 5px;
		}
		tbody td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 5px;
		}
	</style>

	<?php
		 $users = array(array('first_name' => 'Michael', 'last_name' => 'Choi'),
		 				array('first_name' => 'John', 'last_name' => 'Supsupin'),
		 				array('first_name' => 'Mark', 'last_name' => 'Guillen'),
		 				array('first_name' => 'KB', 'last_name' => 'Tonel'),
		 				);
		?>
</head>
<body>
	<table>
		
		<thead>
			<td>User #</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Full Name</td>
			<td>Full Name in upper case</td>
			<td>Length of name</td>
		</thead>
		<tbody>
			<?php
			 $counter = 1;
			foreach($users as $user) {
				echo '<tr>';
				echo '<td>'. $counter. '</td>';
				foreach($user as $key => $value) {	
					echo '<td>'. $value. '</td>';
				}
				echo '<td>'. implode(" ", $user). '</td>';
				echo '<td>'. strtoupper(implode(" ", $user)). '</td>';
				echo '<td>'. strlen(implode(" ",$user)). '</td>';
				echo '</tr>';
				$counter++;		
			}
			?>
		<!-- 	<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
			</tr> -->
		</tbody>
	</table>


</body>
</html>