<?php 
	// echo "My first PHP Script";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Training</title>
 </head>
 <body>
 		<!-- <?php 
 			echo "Hello im from php";
 		 ?> -->

 		 <!-- Ini tag HTML -->
 		 <h1>Ini HTML</h1>
 		 <p>Ini paragraf HTML</p>

 		 <!-- Ini tag php -->
 		 <h1>
 		 	<?php echo "Ini PHP" ?>
 		 </h1>
 		 <p>
 		 	<?php echo "Ini paragraf php" ?>
 		 </p>

 		 <!-- Variable -->
 		 <?php 
 		 	$nama = "Alif";
 		 	echo "Nama saya adalah $nama <br>"; // echo bukan case sensitive 
 		 	ECHO "Nama saya adalah $nama <br>"; // $nama case sensitive
 		 	eCHo "Nama saya adalah $nama <br>";
		
 		 	
 		 	function myNama() {
 		 		$nama = "Alif";
 		 		$x = "Fahmi";
 		 		echo "Nama lengkap saya adalah $nama $x" . "<br>";
 		 	}
 		 	myNama();

 		 	$x = "Pacar Saya";

 		 	function myKamarTamu () {
 		 		global $x;
 		 		echo "Dia adalah " . $x . "<br>";
 		 	}

 		 	function myKamarMandi () {
 		 		global $x;
 		 		echo "Bukan, dia adalah " . $x . "<br><br>";
 		 	}
 		 	myKamarTamu();
 		 	myKamarMandi();

 		 	// $x = 1234;    // Untuk mengetahui tipe datanya
 		 	// var_dump($x);


 		 	// $isMenikah = true;
 		 	// $notMenikah = false;
 		 	// echo "isMenikah " . $isMenikah . "<br>";
 		 	// echo "notMenikah " . $notMenikah;
 		 	
 		 	// $kids = array("budi", "wati", "iwan");
 		 	// // print_r($kids);
 		 	// print_r($kids[0]);

 		 	// $x = null;
 		 	// var_dump($x);

 		 	// echo strlen("Alif Fahmi");







		?>








 </body>
 </html>