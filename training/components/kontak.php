<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/styles/main.css">
	<title>Kontak</title>
</head>
<body>
	<h1>Kontak Page</h1>
	<p>Kontak kami untuk info lebih lanjut</p>

	<form>
		<div class="container">
			<label for="nama">Nama</label>
			<input type="text" name="nama" id="nama" value="">

			<label for="email">Email</label>
			<input type="text" name="email" id="email" value="">
		</div>

		<button onclick="funcKlik()">Submit</button>
	</form>


	<p id="konfirmasi"></p>
	<script type="text/javascript">
		function funcKlik() {
			let nama = document.getElementById("nama").value;
			let email = document.getElementById("email").value;
			return document.getElementById("konfirmasi").innerHTML = "Terimakasih" + nama + ", info akan dikirim balik ke " + email;
		}

	</script>

	<p>Kontak Kami</p>
	<ul>
		<li>🏠 <a href="https://goo.gl/maps/7oxD5FdRzhDZ6Kou6" target="_blank">Jl Irian</a></li>
		<li>☏ <a href="tel:// +62123131313" target="_blank">+62123131313</a></li>
		<li>📠 021 327282</li>
		<li>📧 <a href="mailto:xxx@xxx.co.id" target="_blank">xxx@xxx.co.id</a></li>
	</ul>

	<div class="container">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15862.503547383856!2d107.08793738350097!3d-6.312778327258321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6990748b2d21c5%3A0xb0b46656dbf0322!2sYamaha%20Motor%20Electronics%20Indonesia%20Pt.%2C%20Jatiwangi%2C%20Kec.%20Cikarang%20Bar.%2C%20Kabupaten%20Bekasi%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1660027818150!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>

	<a href="/training">Kembali ke Home</a>

</body>
</html>