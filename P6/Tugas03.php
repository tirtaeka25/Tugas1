<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<h1>Form Registrasi</h1>
	Isi Data Dibawah ini:
<table>
	<form method="GET" action="Proses.php">
		<tr>
			<td>Nama</td>
			<td>
				<input type="text" name="nama"size="10"> 
			</input>
		</td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>
				<textarea type = "text" name ="alamat">
					
				</textarea>
			</td>
		</tr>

		<tr>
			<td>Tempat Lahir</td>
			<td>
				<input type="text" name="TempatL">
				
				</input>
			</td>
		</tr>

		<tr>
			<td>Tanggal Lahir</td>
			<td>
				<input type="text" name="TanggalL">
				</input>
			</td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<input type="radio" name="JK" value="Laki-laki">Laki-laki
				</input>
				<input type="radio" name="JK" value="Perempuan">Perempuan
				</input>
			</td>
		</tr>

		<tr>
			<td>Pendidikan</td>
			<td>
				<select name="pendidikan">
					<option value ="D3">D3</option>
					<option value="S1">S1</option>
					<option value="S2">S2</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>
			<input type="Submit" name="submit" value="Submit"
			>
			</input>
			<input type="Reset" name="cancel" value ="Cancel" >
			</input>
			</td>
		</tr>
	</form>
</table>


</body>
</html>