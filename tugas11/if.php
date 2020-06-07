<html>
	<body>
	<h2>Belajar PHP Dasar</h2><hr style="width: 250px; float: left; margin-top: -10px"><br>
	<p>Tampilan Hasil</p>
	<div style="border: 2px solid grey;
	 width: 250px; 
	 height: 20px;
	 text-align: center; 
	 margin-top: -10px">
<b>
	<?php
	 	$nama_hari = date("1");

	 	if ($nama_hari == "Sunday") {	

		echo "Minggu";

	 	} elseif ($nama_hari == "Monday") {
		
		echo "Senin";
	 	} else {
		
		echo "Selasa";
	 	}
	 ?>
</b>

</div>
	</body>
</html>
