<html>
<head>
	<title>Form Komentar</title>
</head>
<body>
	<h2> BUKU TAMU</h2><br>
	<br>

	<tr>
		<td> Komentar dan Saran Anda Sangat Kami Butuhkan</td><br>
		<td> Untuk Meningkatkan Kualitas Situs Kami</td><br>
		<hr>
		<br>
	</tr>
	<form method="POST" action = "tampilkomentar.php">
<table>
		Nama Anda     :
		<input type="text" name="nama" size ="  quired><br>
		Email Anda    :
		<input type="text" name="email" size ="15"equired><br>

		Komentar Anda :
		<textarea name ="komentar" required></textarea><br>

		<input type="submit" name="submit" value = "kirim">
		<input type="submit" name="submit" value = "batal">
<table>
	</form> 
</body>
</html>