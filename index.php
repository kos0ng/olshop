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

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="assets/font/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Lobster&display=swap" rel="stylesheet"> 


    <title>Hello, world!</title>
  </head>
  <body>

  <?php
  include 'header.php';
  ?>



<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/banner/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/banner/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/banner/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

	<h3 class="text-center custom-font" style="margin-top: 3%;font-size:150%">New Collection<hr style="width: 10%"></h3>
<div class="container" style="margin-top: 3%;margin-bottom: 3%">

	<div class="row">
		 <div class="col-md-4">
          <div class="card" >
             <a href="/olshop/produk/produk-detail.php">
             <img src="/olshop/assets/img/produk/1.jpg" class="card-img-top" alt="...">
         </a>
                <div class="card-body">
              <p class="card-text text-center">
              <span style="color: #333;font-size: 90%">Outware</span><br>GIYOMI ID – Naura Tunic Sienna<br><b>Rp 150.000 – Rp 160.000</b>
              </p>
                </div>
            </div>
        </div>
	</div>
</div>


<?php
include 'footer.php';
?>
<script src="assets/js/jquery-3.4.1.min.js" type="text/javascript"></script>
  	    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>