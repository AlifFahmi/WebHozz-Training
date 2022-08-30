<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
	<!-- Ini adalah head -->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/styles/main.css">

		<title>Training</title>
	</head>

	<!-- Ini adalah body -->
	<body>
		<?php 
			#echo "Hello, World";
		 ?>

		<!-- Menu Navigasi -->
		<nav class="navigation">
			<a href="/training">Beranda</a>
			<a href="components/tentang.php">Tentang</a>
			<a href="components/berita.php">Berita</a>
			<a href="components/kontak.php">Kontak</a>
		</nav>

		<!-- ini dalah judul website -->
		<h1>Hello, World!</h1>

		<!-- ini paragraf -->
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

		<!-- ini adalah daftar -->
		<p>Client-Side Programming</p>
		<ul>
			<li>HTML</li>
			<li>CSS</li>
			<li>JavaScript</li>
		</ul>

		<!-- ini adalah single-tag gambar -->
		<img src="assets\images\php.png" width="100%" alt="php.png"> 

		<!-- Breakline/Pindah Baris -->
		<br>

		<h1>Tabel Biodata</h1>
		<table border="1" cellpadding="7">
			<tr>
				<th>Nama</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
			</tr>

			<tr>
				<td>Alif</td>
				<td>Cirebon</td>
				<td>08 Juli 1995</td>	
			</tr>

			<tr>
				<td>Fahmi</td>
				<td>Bekasi</td>
				<td>12 Agustus 1996</td>	
			</tr>

			<tr>
				<td>A Fahmi</td>
				<td>Jakarta</td>
				<td>25 Mei 1999</td>	
			</tr>
		</table>

<script type="text/javascript">

	// Variabel
	// let nama = "Alif";
	// alert("Hello, " + nama);

/*	let namaDepan = "Alif";
	let namaBelakang = "Fahmi";
	let namaLengkap = namaDepan + " " + namaBelakang;
	alert("Hello," + namaLengkap);*/

</script>



	</body>
</html>