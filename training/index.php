<?php require('header.php');

include("koneksi.php");

$strQuery = " SELECT * FROM pelatihan_view; ";

$query = mysqli_query($conTraining, $strQuery) or die(mysqli_error());


?>

<div class="container">
	<h1 style="text-align: center;">Selamat Datang di Website Training</h1>
	<h2>Summary Pelatihan</h2>
	
	<table class="table">
		<tr>
			<td>Ruang</td>
			<td>Tanggal</td>
			<td>Materi</td>
			<td>Peserta</td>
			<td>Instrukstur</td>
		</tr>

		<?php  
				// Fetching data
		while ($data = mysqli_fetch_array($query)) {
			// code...
			$ruang = $data["ruang"];
			$tanggal = $data["tanggal"];
			$materi = $data["materi"];
			$murid = $data["murid"];
			$guru = $data["guru"];
		?>

		<tr>
			<td><?php echo $ruang; ?></td>
			<td><?php echo $tanggal; ?></td>
			<td><?php echo $materi; ?></td>
			<td><?php echo $murid; ?></td>
			<td><?php echo $guru; ?></td>
			<td>
                 <a href="ubah.php?id=<?= $data['id_pelatihan'];?>">Ubah</a>
                 <a href="hapus.php?id=<?= $data['id_pelatihan'];?>">Hapus</a>
            </td>
		</tr>
		<?php } ?>
	</table>	
</div>

<?php require('footer.php');