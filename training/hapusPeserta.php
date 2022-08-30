
<?php

include_once 'koneksi.php';

$id = $_GET['id'];

$strQuery = "DELETE FROM peserta WHERE id = '{$id}'";

$query = mysqli_query($conTraining, $strQuery);

header('location: list_peserta.php');

?>