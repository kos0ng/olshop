<?php 
include '../db/koneksi.php';
$id = $_GET['id'];
$data=mysqli_query($koneksi,"SELECT jumlah,produk.id_produk,stok from pesanan join produk on pesanan.id_produk=produk.id_produk where pesanan.id_pesanan='$id'");
$produk_data = mysqli_fetch_array($data);
$avail_stok=$produk_data['jumlah']+$produk_data['stok'];
$id_produk=$produk_data['id_produk'];
mysqli_query($koneksi,"UPDATE produk set stok='$avail_stok' where id_produk='$id_produk'")or die(mysql_error());
mysqli_query($koneksi,"DELETE FROM pesanan WHERE id_pesanan='$id'")or die(mysql_error());
header("Location:index.php");
?>