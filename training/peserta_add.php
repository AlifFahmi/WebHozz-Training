<?php  include_once 'koneksi.php'; ?>
<?php require('header.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
			form input[type="submit"] {
			border: 1px solid #197a43;
			background-color: #197a43;
			color: #ffffff;
			font-weight: bold;
			padding: 5px 15px;
		}
	</style>
	<title>Add Peserta</title>
</head>
<body>

	<h1>Add Peserta</h1>

	<form name="frmPeserta" action="peserta_create.php" method="post">
		<table>
			<tr>
				<td><label>Nama</label></td>
				<td><input type="text" name="txtNama"></td>
			</tr>
			<tr>
				<td><label>Tanggal Lahir</label></td>
				<td><input type="date" name="dtgTanggalLahir"></td>
			</tr>
			<tr>
				<td><label>Usia</label></td>
				<td><input type="number" name="txtUsia"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</label></td>
				<td>
					<input type="radio" name="opgKelamin" value="Pria" checked="Pria">Pria
					<input type="radio" name="opgKelamin" value="Wanita">Wanita
				</td>
			</tr>
			<tr>
				<td><label>Is Menikah</label></td>
				<td><input type="checkbox" name="chkIsMenikah" checked="true"></td>
			</tr>
		</table>

		<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>

<?php require('footer.php');









