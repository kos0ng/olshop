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
<b>2. Detail pembayaran</b>
    <hr style="width: 60%"></h2>
<div class="container" style="margin-top: 3%;margin-bottom: 3%;padding-left: 5%;margin-bottom: 10%">
<?php
if(!isset($_GET['id']) || $_GET['id']==''){
  header("Location: index.php");
}
else{
  $id_receipt=$_GET['id'];
  $data=mysqli_query($koneksi,"select * from pesanan join produk on pesanan.id_produk=produk.id_produk where id_receipt='$id_receipt'");
  $cek= mysqli_num_rows($data);
  if($cek>0){
?>
<h4 style="text-align: center">Nomor Pesanan : #<?=$id_receipt?></h4><br>
<table class="table">
  <thead>
    <th>No.</th>
    <th>Nama Produk</th>
    <th>Ukuran</th>
    <th>Jumlah</th>
    <th>Harga</th>
    <th>Sub Total</th>
  </thead>
  <tbody>
    <?php
    $list_pesanan = array();
    while ($row = mysqli_fetch_assoc($data)) {
    $list_pesanan[] = $row;
    }
    $i=1;
    $sum=0;
    foreach ($list_pesanan as $row) {
      ?>
      <tr>
      <td><?=$i?></td>
      <td><?=$row['nama_produk']?></td>
      <td><?=$row['ukuran_pesanan']?></td>
      <td><?=$row['jumlah']?></td>
      <td><?=$row['harga']?></td>
      <td><?=$row['total_harga']?></td>
    </tr>
      <?php
    $sum+=$row['total_harga'];
    $i++;
    }
    ?>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><b>Total Harga</b></td>
      <td><?=$sum?></td>
      <td></td>
    </tr>
  </tbody>
</table>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
  <div class="card">
  <div class="card-header bg-success text-center" style="color:white">
    Payment Information
  </div>
  <div class="card-body">
    <h5 class="card-title">Mandiri 123123123123123 a.n coba1</h5>
    <h5 class="card-title">BRI 123123123123123 a.n coba2</h5>
    <h5 class="card-title">BCA 123123123123123 a.n coba3</h5><br>
    <p class="card-text">Silahkan melakukan transfer ke rekening diatas dengan total pembayaran Rp<?=number_format($sum+$id_receipt)?>,00 (Total Harga+Kode Pembayaran)</p>
  </div>
</div>
</div>
<div class="col-md-3"></div>
  
</div>
<?php
  }
  else{
    ?>
<p class="text-center">
  Receipt Not Found;
  </p>
    <?php
  }
}
?>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <a href="../produk/"><button type="button" class="btn btn-black form-control">Return to Shop</button></a>
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
