<html>
	<body>
			<h2>Belajar PHP Dasar</h2><hr style="width: 250px; float: left;"><br>
			<h3>while.php</h3>
			<p>Tampilan Hasil</p>
		<table >
			<tr>
				<th>Perulangan 1 sampai 10</th>
			</tr>
			<tr>
				<td>
					<?php
					 	$i=1;
					 	while ($i<=10) {

						echo "Perulangan ke: " . $i . '<br /><br />';
						$i++;
					 	}
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

