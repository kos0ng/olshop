<?php
include 'koneksi.php';

$opsi =  $_POST['opsi'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$filename = $_FILES['gambar']['name'];
$location = "fotoprofil/" . $filename;

$q = "insert into image (opsi,filename) values ('$opsi','$filename')";
$hasil = mysqli_query($koneksi,$q);

if($hasil == true)
{
  move_uploaded_file($tmp_file, $location);
  echo "<script>alert('Foto Berhasil di ubah');  window.location ='tampil.php' </script>";
}
else {
  echo "Gagal Upload";
}
?>
