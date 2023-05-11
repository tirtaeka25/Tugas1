<!DOCTYPE html>
<html>
<head>
	<title>Tugas 06</title>
</head>
<body >
<?php
	$nama			= $_GET['nama'];
	$Alamat 		= $_GET['alamat'];
	$Tempat_Lahir 	= $_GET['TempatL'];
	$Tanggal_Lahir	= $_GET['TanggalL'];
	$Jenis_Kelamin	= $_GET['JK'];
	$Pendidikan		= $_GET['pendidikan'];

?>
<table border = 1>
	<h1>Data Registrasi</h1>
	<tr>
		<td width="200px">Nama</td>
		<td width="200px"><?php echo $nama; ?></td>
	</tr>

	<tr>
		<td>Alamat</td>
		<td><?php echo $Alamat; ?></td>
	</tr>

	<tr>
		<td>Tempat Lahir</td>
		<td><?php echo $Tempat_Lahir; ?></td>
	</tr>

	<tr>
		<td>Tanggal Lahir</td>
		<td><?php echo $Tanggal_Lahir; ?></td>
	</tr>

	<tr>
		<td>Jenis Kelamin</td>
		<td><?php echo $Jenis_Kelamin; ?></td>
	</tr>

	<tr>
		<td>Pendidikan</td>
		<td><?php echo $Pendidikan; ?></td>
	</tr>
</table>
	<a href = "Tugas03.php" ><input type="submit" value="Back To Home"></a>
</body>
</html>