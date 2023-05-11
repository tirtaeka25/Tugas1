<html>
<head>
	<title>Variabel dan Konstanta</title>
</head>
<body>
	<?php
	echo "<h1> Hitung Luas Lingkaran<h1><hr>";

	define("phi", 3.14);

	$Jarijari = 8;
	$luas = phi * $Jarijari  * $Jarijari;
	echo "Luas = phi x r x r<br>";
	echo "Luas = ".phi." x $Jarijari x ".$Jarijari." <br>";
	echo "Luas = ".(phi * $Jarijari * $Jarijari)."<br>";
	echo "Luas = ".$luas;


	?>
</body>
</html>