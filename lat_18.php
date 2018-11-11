<!DOCTYPE html>
<html>
<head>
	<title>Strukture kendali switch</title>
</head>
<body>
	<?php 
	$english = date ("l");
	switch ($english)
	{
		case "Monday":
		$indo =" Senin";
		break;

		case "Tuesday":
		$indo =" Selasa";
		break;

		case "Wednesday":
		$indo =" Rabu";
		break;

		case "Thursday":
		$indo =" Kamis";
		break;

		case "Friday":
		$indo =" Jumat";
		break;

		case "Saturday":
		$indo =" Sabtu";
		break;

		Default:
		$indo =" Minggu";
		
	}
	echo "<h2>Hari ini adalah hari $indo</h2>";




		?>

</body>
</html>