  
<?php
include 'db/koneksi.php';
session_start();
if(!isset($_SESSION['status'])){
  $_SESSION['status']='not_login';
}
?>

  <nav class="navbar navbar-expand-lg shadow-sm bg-white rounded" style="height: 80px">
  <!-- <a class="navbar-brand" href="/olshop/" style="margin-left: 10%;margin-right:3%;font-family: 'Lobster', cursive;font-size:200%">OLSHOP</a> -->
  <a class="navbar-brand" href="/olshop/" style="width: 5%;margin-left: 10%"><img src="/olshop/assets/img/logo.jpeg" style="width: 100%"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link custom-font" href="/olshop/" >Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link custom-font" href="/olshop/produk">Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link custom-font" href="/olshop/produk/konfirmasi-pembayaran.php">Konfirmasi Pembayaran</a>
      </li>
    </ul>
    <!-- Button trigger modal -->
<?php
if($_SESSION['status']=='login'){
  if(isset($_SESSION['id_admin'])){
    echo '<a href="/olshop/admin"><button type="button" class="btn" >';
  }
  else{
    echo '<a href="/olshop/user"><button type="button" class="btn" >';
  }
?>
<span class="oi oi-person custom-font"></span>
</button></a>
<?php
}
else{
  ?>
<button type="button" class="btn" data-toggle="modal" data-target="#loginModal">
<span class="oi oi-person custom-font"></span>
</button>
  <?php
}
?>

<div class="vl" style="height: 20px;border-color: #3333"></div>
<a href="/olshop/order/" style="margin-right: 5%">
	<button type="button" class="btn">
<span class="oi oi-cart custom-font"></span>
</button>
</a>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
  <div class="modal-dialog" role="document" style="margin-top: 10%">
    <div class="modal-content">

      <div class="modal-body">
        <form method="post" action="/olshop/user/proses_login.php">
          <h4 class="custom-font text-center" style="font-size: 200%">Masuk</h4>
          <label>Alamat email *</label>
          <input type="text" name="email" class="form-control" style="margin-bottom: 3%">
          <label>Kata Sandi *</label>
          <input type="text" name="password" class="form-control" style="margin-bottom: 3%" >
          <button type="submit" class="btn btn-black" name="login">
            Masuk
          </button>
          <a href="/olshop/user/register.php"><button type="button" class="btn btn-success" >
            Daftar
          </button>
        </a>
        </form>
      </div>
    </div>
  </div>
</div>
