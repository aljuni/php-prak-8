<?php
$a ="USS Enterprise ";
$b =" Menurut catatn Kapten";
$c="Menguji Planet vulcan";

$alt1 =$a."".$c.",".$b.".";

$alt2 =$b."".$a.",".$c.".";
?>

<!DOCTYPE html>
<html>
<head>
	<title>menghubungkan strirng</title>
</head>
<body>
	String yang pertama adalah :<br>

	<?php 
		echo $alt1;
	?>
		 <br>
		 <br>

		 String yang kedua Adalah : 
		 <br>
		 <?php
		 echo $alt2;
		 ?>


</body>
</html>
