<?php require('header.php');

include("koneksi.php");

$strQuery = " SELECT * FROM peserta; ";

$query = mysqli_query($conTraining, $strQuery) or die(mysqli_error());

?>

<h1>Daftar Peserta</h1>
	<tr>

	    <a href="peserta_add.php?id=">Tambah Peserta</a>

	</tr>

	<table class="table">
		<tr>
			<td>ID Peserta</td>
			<td>Nama</td>
			<td>Tanggal Lahir</td>
			<td>Usia</td>
			<td>Kelamin</td>
		</tr>

		<?php  
				// Fetching data
		while ($data = mysqli_fetch_array($query)) {
			// code...
			$id = $data["id"];
			$nama = $data["nama"];
			$tanggalLahir = $data["tanggalLahir"];
			$usia = $data["usia"];
			$kelamin = $data["kelamin"];
		?>

		<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $nama; ?></td>
			<td><?php echo $tanggalLahir; ?></td>
			<td><?php echo $usia; ?></td>
			<td><?php echo $kelamin; ?></td>
			<td>
                 <a href="ubahPeserta.php?id=<?= $data['id'];?>">Ubah</a>
                 <a href="hapusPeserta.php?id=<?= $data['id'];?>">Hapus</a>
            </td>
		</tr>
		<?php } ?>

	</table>

<?php require('footer.php');