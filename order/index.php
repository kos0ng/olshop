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
<b>1. Keranjang belanja > </b>
2. Detail pembayaran 
    <hr style="width: 60%"></h2>
<div class="container" style="margin-top: 3%;margin-bottom: 3%;padding-left: 5%;margin-bottom: 10%">
<?php
if(!isset($_SESSION['id_user'])){
  echo '<p class="text-center">
  Silahkan login terlebih dahulu
  </p>';
}
else{

$id_user=$_SESSION['id_user'];
 $data=mysqli_query($koneksi,"select * from pesanan join produk on pesanan.id_produk=produk.id_produk where status_cart=0 and id_user='$id_user'");
  $cek= mysqli_num_rows($data);
  if($cek>0){
?>
<table class="table">
  <thead>
    <th>No.</th>
    <th>Nama Produk</th>
    <th>Ukuran</th>
    <th>Jumlah</th>
    <th>Harga</th>
    <th>Sub Total</th>
    <th>Action</th>
  </thead>
  <tbody>
    <?php
    $list_pesanan = array();
    $list_id_order=array();
    while ($row = mysqli_fetch_assoc($data)) {
    $list_pesanan[] = $row;
    }
    $i=1;
    $sum=0;
    foreach ($list_pesanan as $row) {
      array_push($list_id_order, $row['id_pesanan']);
      ?>
      <tr>
      <td><?=$i?></td>
      <td><?=$row['nama_produk']?></td>
      <td><?=$row['ukuran_pesanan']?></td>
      <td><?=$row['jumlah']?></td>
      <td>Rp<?=number_format($row['harga'])?></td>
      <td>Rp<?=number_format($row['jumlah']*$row['harga'])?></td>
      <td>
       <a href="delete-order.php?id=<?=$row['id_pesanan']?>"> <button class="btn btn-danger">Hapus</button> </a>
      </td>
    </tr>
      <?php
    $sum+=$row['jumlah']*$row['harga'];
    $i++;
    }
    ?>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><b>Total Harga</b></td>
      <td>Rp<?=number_format($sum)?></td>
      <td></td>
    </tr>
  </tbody>
</table>
<div class="row">

  <div class="col-md-4"></div>
  <div class="col-md-4">
    <form method="post" action="">
    <button type="submit" class="btn btn-success form-control" name="submitCheckout">Checkout</button>
    </form>
  </div>
    <div class="col-md-4"></div>
</div>
<?php
  }
  else{
    ?>
<p class="text-center">
  Keranjang Anda masih kosong.
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

<?php
if(isset($_POST['submitCheckout'])){
  $data=mysqli_query($koneksi,"select max(id_receipt) as max_id from pesanan");
  $receipt = mysqli_fetch_array($data);
  $id_receipt= $receipt['max_id']+1;
  foreach ($list_id_order as $row) {
    $data = mysqli_query($koneksi,"UPDATE pesanan SET status_cart=1,id_receipt='$id_receipt' WHERE id_pesanan='$row'");
  }
  echo '<script>alert("Berhasil Melakukan Checkout!");window.location.replace("detail-order.php?id='.$id_receipt.'"); </script>';
}
?>