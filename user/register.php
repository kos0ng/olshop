<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="/olshop/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/olshop/assets/css/style.css">
    <link href="/olshop/assets/font/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Lobster&display=swap" rel="stylesheet"> 


    <title>Hello, world!</title>
  </head>
  <body>

  <?php
  include '../header.php';
  ?>


	<h3 class="text-center custom-font" style="margin-top: 3%;font-size:150%">Halaman Registrasi<hr style="width: 10%"></h3>
<div class="container" style="margin-top: 3%;margin-bottom: 3%">
	 <div class="card">
      <div class="card-body">
      	<form method="post" action="">
      		<div class="row">
      			<div class="col-md-6">
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						Email
      					</div>
      					<div class="col-md-8">
      						<input type="email" name="email" class="form-control" required>
      					</div>
      				</div>
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						Password
      					</div>
      					<div class="col-md-8">
      						<input type="password" name="password" class="form-control" required>
      					</div>
      				</div>
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						Confirm Password
      					</div>
      					<div class="col-md-8">
      						<input type="password" name="confirm" class="form-control" required>
      					</div>
      				</div>
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						Nama
      					</div>
      					<div class="col-md-8">
      						<input type="text" name="nama" class="form-control" required>
      					</div>
      				</div>
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						No HP
      					</div>
      					<div class="col-md-8">
      						<input type="text" name="no_hp" class="form-control" required>
      					</div>
      				</div>
      			</div>
      			<div class="col-md-6">
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						Provinsi
      					</div>
      					<div class="col-md-8">
      						<input type="text" name="provinsi" class="form-control" required>
      					</div>
      				</div>
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						Kota
      					</div>
      					<div class="col-md-8">
      						<input type="text" name="kota" class="form-control" required>
      					</div>
      				</div>
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						Kecamatan
      					</div>
      					<div class="col-md-8">
      						<input type="text" name="kecamatan" class="form-control" required>
      					</div>
      				</div>
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						Kode Pos
      					</div>
      					<div class="col-md-8">
      						<input type="number" name="kode_pos" class="form-control" required>
      					</div>
      				</div>
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						Alamat
      					</div>
      					<div class="col-md-8">
      						<textarea class="form-control" name="alamat" required></textarea>
      					</div>
      				</div>
      			</div>
      			<div class="col-md-4"></div>
      			<div class="col-md-1"></div>
      			<div class="col-md-2" style="margin-top: 2%">
      				<button type="submit" class="btn btn-black form-control" name="submit">Daftar</button>
      			</div>
      			<div class="col-md-1"></div>
      			<div class="col-md-4"></div>
      		</div>
      	</form>
       
      </div>
    </div>
</div>


<?php
include '../footer.php';
?>
<script src="/olshop/assets/js/jquery-3.4.1.min.js" type="text/javascript"></script>
  	    <script src="/olshop/assets/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>

<?php
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];
$nama=$_POST['nama'];
$no_hp=$_POST['no_hp'];
$provinsi=$_POST['provinsi'];
$kota=$_POST['kota'];
$kecamatan=$_POST['kecamatan'];
$kode_pos=$_POST['kode_pos'];
$alamat=$_POST['alamat'];

// cek existing email
$data = mysqli_query($koneksi,"select * from user where email='$email'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($confirm!=$password){
  echo '<script>alert("Password tidak sama");window.location.replace("register.php"); </script>';
}
else if($cek>0){
echo '<script>alert("Email telah digunakan");window.location.replace("register.php"); </script>';
}
else{
  $result = mysqli_query($koneksi, "INSERT INTO user(nama,email,password,no_hp,provinsi,kota,kecamatan,kode_pos,alamat) VALUES('$nama','$email','$password','$no_hp','$provinsi','$kota','$kecamatan','$kode_pos','$alamat')");
    echo '<script>alert("Berhasil Mendaftar");window.location.replace("../index.php"); </script>';
}
}
?>