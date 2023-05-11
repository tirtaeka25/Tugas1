<html>
<head>
	<title>Operator Aritmatika</title>
</head>
<body>
	<h1>Operator Aritmatika</h1>
	<hr>
	<?php 
		$bil1 = 200;
		$bil2 = 40 ;

		echo "bil1 = $bil1 <br> 
				bil2 = $bil2 <br> <br>";

		$hasil = $bil1 + $bil2 ;
		echo "bil1 + bil2 = ".number_format($hasil);
		echo"<br> <br>";

		$hasil = $bil1 - $bil2;
		echo "bil1 - bil2 = " .$hasil;
		echo"<br> <br>";

		$hasil = $bil1 / $bil2; 
		echo "bil1 / bil2 = " .$hasil;
		echo"<br> <br>";

		$hasil = $bil1 * $bil2;
		echo "bil1 * bil2 = ".number_format($hasil);
		echo"<br> <br>";

		$hasil = $bil1 % $bil2;
		echo "bil1 % bil2 = " .number_format($hasil);
		echo"<br> <br>";

		echo "bil1 = " .$bil1."; bil1++ = " .$bil1++.$bil1++.$bil1;

	?>
</body>
</html>