<?php
if(!isset($_GET['id']) || $_GET['id']==''){
  header("Location: ../index.php");
}
?>
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
  $id_produk=$_GET['id'];
  $data=mysqli_query($koneksi,"select * from produk join kategori on produk.id_kategori=kategori.id_kategori where id_produk='$id_produk'");
   $cek= mysqli_num_rows($data);
   $avail_stok=0;
   if($cek>0){
$produk_data = mysqli_fetch_array($data);
$ukuran=explode(',', $produk_data['ukuran']);
  ?>


<div class="container" style="margin-bottom: 5%;margin-top: 5%">
  <div class="row">
    <div class="col-md-6" style="margin-top: 5%">
        <!--Carousel Wrapper-->
    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/olshop/assets/img/produk/<?=$produk_data['gambar']?>" alt="First slide">
        </div>
<!--         <div class="carousel-item">
          <img class="d-block w-100" src="/olshop/assets/img/produk/thumbnail/1_2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/olshop/assets/img/produk/thumbnail/1_3.jpg" alt="Third slide">
        </div> -->
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
<!--         <li data-target="#carousel-thumb" data-slide-to="1"></li>
        <li data-target="#carousel-thumb" data-slide-to="2"></li> -->
      </ol>
    </div>
    </div>
    <div class="col-md-6" style="padding: 3%">
      <a href="#" style="color:grey">Beranda / <?=$produk_data['nama_kategori']?></a>
      <h3> <?=$produk_data['nama_produk']?></h3><hr>
      <h4>Rp <?=number_format($produk_data['harga'])?></h4>
      <h5>Sisa Stok : 
        <?php
        $tmp=$produk_data['stok'];
        if($tmp==0){
          echo 'Kosong';
        }
        else{
          echo $tmp;
        }
        ?>
      </h5><br>
      <form method="post" action="">
        <input type="hidden" name="id_produk" value="<?=$produk_data['id_produk']?>">
      <div class="row">
        <div class="col-md-3">
          <label style="margin-top: 8%">Ukuran</label>
        </div>
        <div class="col-md-9">
      
      <select class="form-control" name="ukuran">
        <?php
        $avail_stok+=$produk_data['stok'];
        foreach ($ukuran as $row) {
          ?>
<option value="<?=$row?>"><?=$row?></option>
          <?php
        }
        ?> 
      </select>
        </div>
      </div>
      <div class="row" style="margin-top: 5%">
              <div class="col-md-3">
                Jumlah
              </div>
              <div class="col-md-3" >
           <input type="number" name="jumlah" class="form-control" required>
        </div>
        <div class="col-md-3">
          <?php
          if(!isset($_SESSION['id_user'])){
            ?>
<a href="../"><button type="button" class="btn btn-warning form-control" name="submit">Login</button></a>
            <?php
          }
          else{
            ?>
<button type="submit" class="btn btn-primary form-control" name="submit">Beli</button>
            <?php
          }
          ?>
        </div>
      </div>
      </form>
      <hr>
      <p>Kategori : <?=$produk_data['nama_kategori']?></p>
      <hr>
    </div>
  </div>
  <hr>
   <h3 class="text-center" style="margin-top:2%">Deskripsi</h3>
  <div class="row" style="margin-top:5%">
    <div class="col-md-12">
      <p>
<?=$produk_data['deskripsi']?>
      </p>
    </div>
  </div>
  <?php
}
else{
  header("Location: ../index.php");
}
  ?>
 <hr>
 <h3 class="text-center" style="margin-top:2%">Produk Lainnya</h3>
 <div class="row">
  <?php
  $data=mysqli_query($koneksi,"select id_kategori from produk where id_produk='$id_produk'");
  $kategori = mysqli_fetch_array($data);
  $id_kategori=$kategori['id_kategori'];
  $data=mysqli_query($koneksi,"select * from produk join kategori on produk.id_kategori=kategori.id_kategori where produk.id_kategori='$id_kategori' and id_produk!='$id_produk'");
  $cek= mysqli_num_rows($data);
            if($cek>0){
              $list_produk = array();
              while ($row = mysqli_fetch_assoc($data)) {
              $list_produk[] = $row;
            }
            foreach ($list_produk as $row) {
              ?>
   <div class="col-md-3">
     <div class="card">
      <img src="/olshop/assets/img/produk/<?=$row['gambar']?>" class="card-img-top" alt="...">
      <div class="card-body">
              <p class="card-text text-center">
              <span style="color: #333;font-size: 90%"><?=$row['nama_kategori']?></span><br><?=$row['nama_produk']?><br><b>Rp <?=number_format($row['harga'])?></b>
              </p>
                </div>
    </div>
   </div>
              <?php
            }
          }
          else{
            echo '<h6 class="text-center">There are no other products in this category</h6>';
          }
  ?>
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
$id_produk=$_POST['id_produk'];
$id_user=$_SESSION['id_user'];
$status_cart=0;
$status_pesanan=0;
$jumlah=$_POST['jumlah'];
$ukuran=$_POST['ukuran'];
if($jumlah>$avail_stok){
  echo '<script>alert("Stok tidak mencukupi");window.location.replace(); </script>';
}
else{
  $avail_stok-=$jumlah;

$total_harga=$_POST['jumlah']*$produk_data['harga'];
$result = mysqli_query($koneksi, "INSERT INTO pesanan(id_produk,id_user,status_cart,status_pesanan,jumlah,ukuran_pesanan,total_harga) VALUES('$id_produk','$id_user','$status_cart','$status_pesanan','$jumlah','$ukuran','$total_harga')");
$result2 = mysqli_query($koneksi,"UPDATE produk set stok='$avail_stok' where id_produk='$id_produk'");
    echo '<script>alert("Berhasil Menambah ke Keranjang");window.location.replace("../order/"); </script>';
}
}
?>