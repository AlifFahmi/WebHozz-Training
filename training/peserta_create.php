	<?php 


		// Informasi Server
		$server = "localhost";
		$userName = "root";
		$password = "";
		$database = "training";

		// String koneksi
		$conTraining = mysqli_connect(
			$server,
			$userName,
			$password,
			$database,
		);


		// Prepare Query
		$nama 			= $_POST['txtNama'];
		$tanggalLahir 	= $_POST['dtgTanggalLahir'];
		$usia 			= $_POST['txtUsia'];
		$kelamin 		= ( $_POST['opgKelamin'] == "Pria") ? "Pria" : "Wanita";
		$isMenikah 		= (isset($_POST['chkIsMenikah'])) ? TRUE : FALSE;

		// String Query
		$strQuery = " 

			INSERT INTO peserta(
					nama,
					tanggalLahir,
					usia,
					kelamin,
					isMenikah
				) VALUES(
					'$nama',
					'$tanggalLahir',
					'$usia',
					'$kelamin',
					'$isMenikah'
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
		}

	 ?>
