<!DOCTYPE html>
<html>
<head>
	<title>Strukture kendali IF ELSE IF</title>
</head>
<body>
	<?php 
	$waktu = getdate();
		if ($waktu  <= 10)
		{
			echo " Selamat Pagi";
		}
		else if ($waktu <= 15)
		{
			echo " Selamat Siang";
		}
		else if ($waktu<= 18)
		{
			echo " Selamat Sore";
		}
		else 
		{
			echo " Selamat Malam";
		}

		?>

</body>
</html>