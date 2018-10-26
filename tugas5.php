<!DOCTYPE html>
<html>
<head>
	<title>FIZAL FAUZI || 16.11.0494</title>
</head>
<body>
<form>
	<table>
		<tr>
			<td>Nama :</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Nilai PWL :</td>
			<td><input type="number" name="n_pwl"></td>
		</tr>
		<tr>
			<td>Nilai AI :</td>
			<td><input type="number" name="n_ai"></td>
		</tr>
		<tr>
			<td>Nilai SBD :</td>
			<td><input type="number" name="n_sbd"></td>
		</tr>
	</table>
	<input type="submit" name="submit">
</form>

<?php
$nilai=
["nilai_pwl"=>["Toni"=>80,"Dewi"=>90,"Nina"=>75,"Reza"=>60],
"nilai_ai"=>["Toni"=>60,"Dewi"=>70,"Nina"=>95,"Reza"=>50],
"nilai_sbd"=>["Toni"=>75,"Dewi"=>75,"Nina"=>80,"Reza"=>70];
echo $nama['Toni']['nilai_pwl'];
?>
</body>
</html>