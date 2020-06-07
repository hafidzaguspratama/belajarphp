<html>
	<body>
			<h2>Belajar PHP Dasar</h2><hr style="width: 250px; float: left;"><br>
			<h3>break.php</h3>
			<p>Tampilan Hasil</p>
		<table >
			<tr>
				<th>Perulangan 1 sampai 10</th>
			</tr>
			<tr>
				<td>
					<?php
					 
					 	for ($i=1; $i<=10; $i++) {
						if ($i == 3)
							
						break;

						echo "Perulangan ke: " . $i . '<br />';
					 	}
					 	echo "Akhir Perulangan";
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

