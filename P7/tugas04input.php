<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Input</title>
</head>
<body">
	<h2 align="center">Rumus - Rumus</h2>

	<form method="GET" action="tugas04output.php" >
		<table width="250px" border="1" cellpadding="2" align="center">
			
			<tr>
				<td>Nilai 1</td>
				<td><input type="number" name="nilai1"></td>
			</tr>
			
			<tr>
				<td>Nilai 2</td>
				<td><input type="number" name="nilai2"></td>
			</tr>

			<tr>
				<td colspan="2" rowspan="2" align="center">
					<input type="radio" name="pilih" value="Segitiga">Segitiga<br>
					<input type="radio" name="pilih" value="Persegi Panjang">Persegi Panjang
				</td>	
			</tr>

		</table>
		<table align="center">
			<tr>
				<td width="220px" align="center">
					<input type="submit" name="submit" value="Hitung">
					<input type="reset" name="reset" value="Batal">
				</td>
			</tr>
		</table>

	</form>
</body>
</html>
