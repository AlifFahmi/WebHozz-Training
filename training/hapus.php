
<?php

include_once 'koneksi.php';

$id = $_GET['id'];

$strQuery = "DELETE FROM pelatihan WHERE id_pelatihan = '{$id}'";

$query = mysqli_query($conTraining, $strQuery);

header('location: index.php');

?>