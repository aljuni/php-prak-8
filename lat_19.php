<html>
<head>
	<title>lat_19</title>
</head>
<body>
<?php
$nilai = 10;
switch ($nilai)
{
	case $nilai >= 80:
	$hasilnilai = "A" ;
	break;
	case $nilai >=60:
	$hasilnilai = "B" ;
	break;
	case $nilai >=40:
	$hasilnilai = "C";
	break;
	case $nilai >=20:
	$hasilnilai = "D";
	break;
	Default:$hasilnilai ="Maaf tidak Lulus";
	}
	echo "<h2>hasil nilai $hasilnilai</h2>";
?>
</body>
</html>