<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Output</title>
</head>
<body>
	<h1 align="center">HASIL HITUNG RUMUS</h1>

	<?php 
		$nilai1   = $_GET['nilai1'];
		$nilai2   = $_GET['nilai2'];
		$pilih  = $_GET['pilih'];

		if (($nilai1) && ($nilai2) == 0) {
			$hasil = 'tidak ada hasil perhitungan';
		}
		else {
			if ($pilih == "Segitiga") {
				$hasil = (1/2*($nilai1*$nilai2));
				}
			else
				{
				$hasil = ($nilai1*$nilai2);
				}
		}
	?>

	<table>
		<tr>
			<td>Nilai a = <?php echo "$nilai1"; ?></td>
		</tr>
		<tr>
			<td>Nilai b = <?php echo "$nilai2"; ?></td>
		</tr>
		<tr>
			<td>Rumus Yang Dipilih adalah = <?php echo "$pilih" ?></td>
		</tr>
		<tr>
			<td>Hasil perhitungan rumus = <?php echo "$hasil" ?></td>
		</tr>
	</table>

	<a href="tugas04input.php"></a>

</body>
</html>