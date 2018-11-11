<!DOCTYPE html>
<html>
<head>
	<title>Penyisipan Variabel pada HTML</title>
</head>
<body>
	Silahkan sebutkan warna kesukaan anda..? <br>
	<?php
		$warna1 = "Merah";
		$warna2 = "Hijau";
		$warna3 = "Kuning"
	?>
	<b>Dibawah ini adalah warna kesukaanku : <br>

	<?php
		echo "$warna1, $warna2, dan $warna3 </br>";
	?>
</body>
</html>