  
<?
include '../db/koneksi.php';
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
    </ul>

  </div>
</nav>

