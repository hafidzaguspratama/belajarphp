<html>
	<body>
			<h2>Belajar PHP Dasar</h2><hr style="width: 250px; float: left;"><br>
			<h3>dowhile.php</h3>
			<p>Tampilan Hasil</p>
		<table >
			<tr>
				<th>Perulangan 1 sampai 10</th>
			</tr>
			<tr>
				<td>
					<?php
						$i=1;
					 	do {
					 	echo "Perulangan ke: " . $i . '<br />';
					 	$i++;
					 		}
					 	while ($i<=10);
					 ?>
				</td>
			</tr>
		</table>
	</body>
</html>

<style>
	table{
		border-collapse: collapse;
	}
	td, th {
		border: 2px solid grey;
		padding: 8px
	}
</style>

