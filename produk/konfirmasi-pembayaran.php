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


	<h3 class="text-center custom-font" style="margin-top: 3%;font-size:150%">Konfirmasi Pembayaran<hr style="width: 10%"></h3>
<div class="container" style="margin-top: 3%;margin-bottom: 3%;padding-left: 5%">
	 <p>
    Jika mengalami kendala saat melakukan konfirmasi pembayaran, harap konfirmasi pembayaran melalui WhatsApp di : 082140754070<br><br>

Silakan isi form di bawah ini lalu submit untuk melakukan konfirmasi pembayaran. 
   </p>
   <h5>Nomor Order(*)</h5>
   <form>
   <input type="number" name="no_order" class="form-control" style="width: 40%">
   <h5 style="margin-top: 2%">Tanggal Pembayaran(*) </h5>
   <input type="date" name="no_order" class="form-control" style="width: 40%">
   <h5 style="margin-top: 2%">Nama Pembayar(*) </h5>
   <input type="text" name="no_order" class="form-control" style="width: 40%">
   <h5 style="margin-top: 2%"> Nama Bank(*) </h5>
   <input type="text" name="no_order" class="form-control" style="width: 40%">
   <h5 style="margin-top: 2%"> Transfer Amount(*) </h5>
   <input type="number" name="no_order" class="form-control" style="width: 40%">
   <h5 style="margin-top: 2%"> Catatan </h5>
   <textarea name="no_order" class="form-control" style="width: 40%"></textarea>
   <h5 style="margin-top: 2%">Bukti Transfer(*)</h5>
   <input type="file" name="no_order" class="form-control" style="width: 20%">
   <button type="submit" class="btn btn-black" style="margin-top:5%;width: 10%">Submit</button>
  </form>
</div>


<?php
include '../footer.php';
?>
<script src="/olshop/assets/js/jquery-3.4.1.min.js" type="text/javascript"></script>
  	    <script src="/olshop/assets/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>