<!-- <?php
session_start();
include 'koneksi.php';

?> -->
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
      	<form>
      		<div class="row">
      			<div class="col-md-6">
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						Email
      					</div>
      					<div class="col-md-8">
      						<input type="text" name="email" class="form-control">
      					</div>
      				</div>
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						Password
      					</div>
      					<div class="col-md-8">
      						<input type="text" name="password" class="form-control">
      					</div>
      				</div>
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						Confirm Password
      					</div>
      					<div class="col-md-8">
      						<input type="text" name="email" class="form-control">
      					</div>
      				</div>
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						Name
      					</div>
      					<div class="col-md-8">
      						<input type="text" name="email" class="form-control">
      					</div>
      				</div>
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						No HP
      					</div>
      					<div class="col-md-8">
      						<input type="text" name="email" class="form-control">
      					</div>
      				</div>
      			</div>
      			<div class="col-md-6">
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						Provinsi
      					</div>
      					<div class="col-md-8">
      						<input type="text" name="email" class="form-control">
      					</div>
      				</div>
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						City
      					</div>
      					<div class="col-md-8">
      						<input type="text" name="password" class="form-control">
      					</div>
      				</div>
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						Kecamatan
      					</div>
      					<div class="col-md-8">
      						<input type="text" name="email" class="form-control">
      					</div>
      				</div>
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						Kode Pos
      					</div>
      					<div class="col-md-8">
      						<input type="text" name="email" class="form-control">
      					</div>
      				</div>
      				<div class="row custom-margin">
      					<div class="col-md-3">
      						Alamat
      					</div>
      					<div class="col-md-8">
      						<textarea class="form-control"></textarea>
      					</div>
      				</div>
      			</div>
      			<div class="col-md-4"></div>
      			<div class="col-md-1"></div>
      			<div class="col-md-2" style="margin-top: 2%">
      				<button type="submit" class="btn btn-black form-control">Daftar</button>
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