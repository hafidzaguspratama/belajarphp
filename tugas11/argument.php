<html>
	<body>
<h1><u>Belajar PHP Dasar</u></h1>
<h3>argument.php</h3>
<p>Tampilan Hasil</p>

<div style="border: 2px solid grey;
			border-radius: 10px 0px 10px 0px;
			width: 200px; 
			padding: 10px"
			>
	<?php
		function tulis_teks($teks="", $jumlah = 1) {
		for ($i=1; $i <= $jumlah; $i++)
		echo $teks;
		 }

		 tulis_teks("A", 5);
		 echo "<br />";
		 tulis_teks("F");
	?>	 
	
</div>

	</body>
</html>
