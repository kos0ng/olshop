<?php 
include '../db/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM pesanan WHERE id_pesanan='$id'")or die(mysql_error());
header("Location:index.php");
?>