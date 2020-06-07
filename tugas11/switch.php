<html>
	<body>
	<h2>Belajar PHP Dasar</h2><hr style="width: 250px; float: left; margin-top: -10px">
	<h3>swich.php</h3>
	<p>Tampilan Hasil</p>
	<div style="border: 2px solid grey;
	 width: 250px; 
	 height: 20px;
	 text-align: center; 
	 margin-top: -10px">
<b>

<?php
 	$nama_hari = date("1");
	switch ($nama_hari) {

		case "Sunday":
		echo "Minggu";
		break;

		case "Monday":
		echo "Senin";
		break;

		case "Tuesday":
		echo "Selasa";
		break;
		default:

		echo "Sabtu";
		}
 ?>
 
</b>
</div>
</body>
</html>