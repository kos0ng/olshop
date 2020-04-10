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


<div class="container" style="margin-bottom: 5%;margin-top: 5%">
  <div class="row">
    <div class="col-md-6">
        <!--Carousel Wrapper-->
    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/olshop/assets/img/produk/thumbnail/1_1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/olshop/assets/img/produk/thumbnail/1_2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/olshop/assets/img/produk/thumbnail/1_3.jpg" alt="Third slide">
        </div>
      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-thumb" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-thumb" data-slide-to="1"></li>
        <li data-target="#carousel-thumb" data-slide-to="2"></li>
      </ol>
    </div>
    </div>
    <div class="col-md-6" style="padding: 3%">
      <a href="#" style="color:grey">Beranda / Outwear</a>
      <h3> GIYOMI ID – Naura Tunic Sienna</h3><hr>
      <h4>Rp 150.000</h4><br>
      <div class="row">
        <div class="col-md-3">
          <label style="margin-top: 8%">Ukuran</label>
        </div>
        <div class="col-md-9">
                
      <select class="form-control">
        <option>L</option>
      </select>
        </div>
      </div>
      <div class="row" style="margin-top: 5%">
              <div class="col-md-3" style="">
            <input type="number" name="" class="form-control">
        </div>
        <div class="col-md-3">
          <button type="submit" class="btn btn-primary form-control">Beli</button>
        </div>
      </div>
      <hr>
      <p>Kategori : Outwear</p>
      <hr>
    </div>
  </div>
  <hr>
   <h3 class="text-center" style="margin-top:2%">Deskripsi</h3>
  <div class="row" style="margin-top:5%">
    <div class="col-md-12">
      <p>
• NAURA SIENNA TUNIC •<br>
Available Size : S, M, L, XL<br>
__<br>
Material : Cotton Rayon (bahan adem, jatuh, breathable, lembut, nyaman dipakai, tidak mengkilap dan menyerap keringat)<br>
__<br>
Detail : 100% made by giyomi dengan detail jahitan yang rapi, kancing di bagian depan (busui friendly), Tali di pinggang dan saku di samping kiri kanan.<br>
__<br>
Info & Care : Cuci terpisah, hindari pencucian dengan mesin cuci serta zat kimia (pemutih)<br>
__<br>
HARGA:<br>
S – L : 150.000<br>
XL     : 160.000<br>
__<br>
On model : SIZE S<br>
Model TB : 167cm / BB : 48kg<br>
__<br>
#giyominauratunic<br>
      </p>
    </div>
  </div>
 <hr>
 <h3 class="text-center" style="margin-top:2%">Produk Lainnya</h3>
 <div class="row">
   <div class="col-md-3">
     <div class="card">
      <img src="/olshop/assets/img/produk/1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
   </div>
      <div class="col-md-3">
     <div class="card">
      <img src="/olshop/assets/img/produk/1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
   </div>
      <div class="col-md-3">
     <div class="card" >
      <img src="/olshop/assets/img/produk/1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
   </div>
      <div class="col-md-3">
     <div class="card">
      <img src="/olshop/assets/img/produk/1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
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