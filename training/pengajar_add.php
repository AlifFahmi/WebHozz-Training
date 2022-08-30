<?php

error_reporting(E_ALL);

include_once 'koneksi.php';

if (isset($_POST['submit']))

{

    $nama = $_POST['nama'];

    $tanggalLahir = $_POST['tanggalLahir'];

    $usia = $_POST['usia'];

    $kelamin = ( $_POST['opgKelamin'] == "Pria") ? "Pria" : "Wanita";

            $strQuery = " 

            INSERT INTO instruktur(
                    nama,
                    tanggalLahir,
                    usia,
                    kelamin
                ) VALUES(
                    '$nama',
                    '$tanggalLahir',
                    '$usia',
                    '$kelamin'
                );

            ";

        // Proses Query
        $query = mysqli_query($conTraining, $strQuery) or die(mysqli_error($conTraining));
        if ($query) {
            // Berhasil...
            echo "Berhasil Tersimpan <meta http-equiv='refresh' content='1, url=/training'>";
        }else{
            // Gagal...
            echo "Gagal menyimpan <meta http-equiv='refresh' content='1, url=/training'>";
        }}
?>

<?php require('header.php'); ?>
	<style type="text/css">
			form input[type="submit"] {
			border: 1px solid #197a43;
			background-color: #197a43;
			color: #ffffff;
			font-weight: bold;
			padding: 5px 15px;
		}
	</style>
	<title>Add Instruktur</title>
</head>
<body>

	<h1>Add Instruktur</h1>

	<form name="frmPengajar" action="pengajar_add.php" method="post">
		<table>
			<tr>
				<td><label>Nama</label></td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td><label>Tanggal Lahir</label></td>
				<td><input type="date" name="tanggalLahir"></td>
			</tr>
			<tr>
				<td><label>Usia</label></td>
				<td><input type="number" name="usia"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</label></td>
				<td>
					<input type="radio" name="opgKelamin" value="Pria" checked="Pria">Pria
					<input type="radio" name="opgKelamin" value="Wanita">Wanita
				</td>
			</tr>
		</table>

		<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>

<?php require('footer.php');