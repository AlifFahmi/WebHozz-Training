<?php

error_reporting(E_ALL);

include_once 'koneksi.php';

if (isset($_POST['submit']))

{

    $ruang = $_POST['ruang'];

    $tanggal = $_POST['tanggal'];

    $materi = $_POST['materi'];

    $id_instruktur = $_POST['id_instruktur'];

    $id_peserta = $_POST['id_peserta'];

            $strQuery = " 

            INSERT INTO pelatihan(
                    ruang,
                    tanggal,
                    materi,
                    id_instruktur,
                    id_peserta
                ) VALUES(
                    '$ruang',
                    '$tanggal',
                    '$materi',
                    '$id_instruktur',
                    '$id_peserta'
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
<h2>Add Pelatihan</h2>

<form action="pelatihan_add.php" method="post">

    <table>
            <tr>
                <td><label>Ruangan</label></td>
                <td><input type="text" name="ruang"></td>
            </tr>
            <tr>
                <td><label>Tanggal Pelatihan</label></td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr>
                <td><label>Materi Pelatihan</label></td>
                <td><input type="text" name="materi"></td>
            </tr>
            <tr>
                <td><label>ID Instruktur</label></td>
                <td><input type="number" name="id_instruktur"></td>
            </tr>
            <tr>
                <td><label>ID Peserta</label></td>
                <td><input type="number" name="id_peserta"></td>
            </tr>
    </table>
    <input type="submit" name="submit" value="Submit">
</form>

<?php require('footer.php');

