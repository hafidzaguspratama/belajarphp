<html>
	<body>
<h1><u>Belajar PHP Dasar</u></h1>
<h3>foreach.php</h3>
<p>Tampilan Hasil</p>
<div style="border: 2px solid grey;
			border-radius: 10px 0px 10px 0px;
			width: 200px; 
			padding: 10px"
			>

				<?php
					$kota = array('Jakarta', 'Bandung', 'Semarang');
					 foreach ($kota as $index => $nama) {
					echo 'Kota ke-' . $index . ': ' . $nama . '<br />';
					 }
				 ?>
				 
</div>

	</body>
</html>