<?php

error_reporting(E_ALL);
include_once 'koneksi.php';
if (isset($_POST['submit']))
{
	$id = $_POST['id_pelatihan'];
    $ruang = $_POST['ruang'];
    $tanggal = $_POST['tanggal'];
    $materi = $_POST['materi'];
    $id_instruktur = $_POST['id_instruktur'];
    $id_peserta = $_POST['id_peserta'];

    		$strQuery = "UPDATE pelatihan SET
                        ruang = '{$ruang}',
                        tanggal = '{$tanggal}',
                        materi = '{$materi}',
                        id_instruktur = '{$id_instruktur}',
                        id_peserta = '{$id_peserta}'
    	                WHERE id_pelatihan = '{$id}'";
    		$query = mysqli_query($conTraining, $strQuery);
    		header('location: index.php');
    	}
    	$id = $_GET['id'];

            $strQuery = " 
            SELECT * FROM pelatihan WHERE id_pelatihan = '{$id}'";
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

<h2>Edit Pelatihan</h2>

<form method="post" action="ubah.php" enctype="multipart/form-data">

    <table>
            <tr>
                <td><label>Ruangan</label></td>
                <td><input type="text" name="ruang" value="<?php echo $data['ruang'];?>"></td>
            </tr>
            <tr>
                <td><label>Tanggal Pelatihan</label></td>
                <td><input type="text" name="tanggal" value="<?php echo $data['tanggal'];?>"></td>
            </tr>
            <tr>
                <td><label>Materi Pelatihan</label></td>
                <td><input type="text" name="materi" value="<?php echo $data['materi'];?>"></td>
            </tr>
            <tr>
                <td><label>ID Instruktur</label></td>
                <td><input type="number" name="id_instruktur" value="<?php echo $data['id_instruktur'];?>"></td>
            </tr>
            <tr>
                <td><label>ID Peserta</label></td>
                <td><input type="number" name="id_peserta" value="<?php echo $data['id_peserta'];?>"></td>
            </tr>
    </table>
    <div class="submit">
    	<input type="hidden" name="id_pelatihan" value="<?php echo $data['id_pelatihan'];?>" />
		<input type="submit" name="submit" value="Submit" />
    </div>
</form>

<?php require('footer.php');