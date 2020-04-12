<?php

session_start();

include '../db/koneksi.php';

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

// menyeleksi data user dengan email dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where email='$email' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
if($cek > 0){
  echo '<script>alert("Login Berhasil");window.location.replace("../index.php");</script>';
  $user_data = mysqli_fetch_array($data);
  $_SESSION['id_user'] = $user_data['id_user'];
  $_SESSION['nama'] = $user_data['nama'];
  $_SESSION['status'] = "login";
}else{
  echo '<script>alert("Login Gagal");window.location.replace("../index.php");</script>';

}
}
?>