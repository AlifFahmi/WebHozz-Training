<?php

error_reporting(E_ALL);
include_once 'koneksi.php';
if (isset($_POST['submit']))
{
	    $id             = $_POST['id'];
        $nama           = $_POST['nama'];
        $tanggalLahir   = $_POST['tanggalLahir'];
        $usia           = $_POST['usia'];
        $kelamin        = ( $_POST['kelamin'] == "Pria") ? "Pria" : "Wanita";
        $isMenikah      = (isset($_POST['isMenikah'])) ? TRUE : FALSE;

    		$strQuery = "UPDATE peserta SET
                        nama = '{$nama}',
                        tanggalLahir = '{$tanggalLahir}',
                        usia = '{$usia}',
                        kelamin = '{$kelamin}',
                        isMenikah = '{$isMenikah}'
    	                WHERE id = '{$id}'";
    		$query = mysqli_query($conTraining, $strQuery);
    		header('location: list_peserta.php');
    	}
    	$id = $_GET['id'];

            $strQuery = " 
            SELECT * FROM peserta WHERE id = '{$id}'";
            $query = mysqli_query($conTraining, $strQuery);
            if (!$query) die('Error: Data tidak tersedia');
			$data = mysqli_fetch_array($query); 

			function is_select($var, $val) {
			if ($var == $val) return 'selected="selected"';
			return false;
}
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
    <title>Ubah Data Peserta</title>
</head>
<body>

    <h1>Ubah Data Peserta</h1>

    <form method="post" action="ubahPeserta.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label>Nama</label></td>
                <td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td>
            </tr>
            <tr>
                <td><label>Tanggal Lahir</label></td>
                <td><input type="text" name="tanggalLahir" value="<?php echo $data['tanggalLahir'];?>"></td>
            </tr>
            <tr>
                <td><label>Usia</label></td>
                <td><input type="number" name="usia" value="<?php echo $data['usia'];?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</label></td>
                <td>
                    <input type="radio" name="kelamin" value="Pria" checked="Pria">Pria
                    <input type="radio" name="kelamin" value="Wanita">Wanita
                </td>
            </tr>
            <tr>
                <td><label>Is Menikah</label></td>
                <td><input type="checkbox" name="chkIsMenikah" checked="true"></td>
            </tr>
        </table>

        <div class="submit">
            <input type="hidden" name="id" value="<?php echo $data['id'];?>" />
            <input type="submit" name="submit" value="Submit" />
        </div>
</form>

</body>
</html>

<?php require('footer.php');