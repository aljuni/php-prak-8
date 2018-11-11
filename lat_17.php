<html>
<head>
<title>Struktur kendali IF…ELSEIF</title>
</head>
<body>
<?php
$nilai = 10;
if ($nilai>= 80)
{
echo "A";
}
elseif ($nilai >= 60)
{
echo "B";
}
elseif ($nilai>= 40)
{
echo "C";
}
elseif ($nilai >=20)
{
echo "D";
}
else
{
	echo "Anda tidak lulus";
}
?>
</body>
</html>

