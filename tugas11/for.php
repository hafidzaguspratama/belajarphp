<html>
	<body>
			<h2>Belajar PHP Dasar</h2><hr style="width: 250px; float: left;"><br>
			<h3>for.php</h3>
			<p>Tampilan Hasil</p>
		<table >
			<tr>
				<th>Perulangan 1 sampai 10</th>
				<th>Perulangan Menurun 10 ke 1</th>
			</tr>
			<tr>
				<td>
					<?php
 						for ($i=1; $i<=10; $i++) {
						echo "Perulangan ke: " . $i . '<br/><br/>';
						}
					?>
				</td>

				<td>
					<?php
				 	for ($i=10; $i>=1; $i--) {
					echo "Perulangan ke: " . $i . '<br/><br/>';
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