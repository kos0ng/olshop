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


	<h2 class="text-center custom-font" style="margin-top: 3%;font-size:150%">
1. Keranjang belanja > 
2. Detail pembayaran > 
3. Pesanan lengkap
    <hr style="width: 60%"></h2>
<div class="container" style="margin-top: 3%;margin-bottom: 3%;padding-left: 5%;margin-bottom: 10%">
<p>
  
Checkout is not available whilst your cart is empty.

</p>
<p class="text-center">
  Keranjang Anda masih kosong.
  </p>

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <button type="button" class="btn btn-black form-control">Return to Shop</button>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>


<?php
include '../footer.php';
?>
<script src="/olshop/assets/js/jquery-3.4.1.min.js" type="text/javascript"></script>
  	    <script src="/olshop/assets/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>