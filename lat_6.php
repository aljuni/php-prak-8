<!DOCTYPE html>
<html>
<head>
	<title>Penyisipan Variabel pada HTML</title>
</head>
<body>
	Silahkan sebutkan makanan kesukaan anda..? <br>
	<?php
		$makan1 = "mie rebus";
		$makan2 = "mie goreng";
		$makan3 = "nasi goreng"
	?>
	<b>Dibawah ini adalah makanan kesukaanku : </b> <br>

	<?php
		echo "$makan1, $makan2, dan $makan3 </br>";
	?>
</body>
</html>