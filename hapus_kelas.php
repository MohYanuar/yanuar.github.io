<?php
include "koneksi.php";

$id_spp = $_GET['id_spp'];

mysqli_query($koneksi,"delete from kelas where id_spp='$id_spp'");

header("location:spp.php");

?>