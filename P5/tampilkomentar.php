<!DOCTYPE html>
<html>
<head>
	<title> Data Komentar </title>
</head>
<body>
	<h2> Data Komentar Anda </h2>
	<hr>
</body>
</html>
<?php 
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$komentar = $_POST['komentar'];

	echo "Nama = $nama <br> 
		 Email = $email <br> 
		 Komentar Anda = $komentar <br>";
 ?>

 <a href = "forminputkomentar.php" title = "kembali"> INPUT DATA LAGI </a>