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
  include 'header.php';
  ?>
<div style="height: 120px;background-color: rgb(242, 242, 242);padding-top:2%;padding-left: 10%;">
  <h2>Akun Saya</h2>
  <p>Dasbor</p>
</div>
<div class="container" style="margin-top: 3%;margin-bottom: 3%">
  <div class="row">
    <div class="col-md-3">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-3">
                <img src="/olshop/assets/img/user/default.png" class="rounded-circle">
              </div>
              <div class="col-md-6">
                <h5 style="margin-top: 20%;margin-left: 15%">
                  <?=$_SESSION['username'];?>
                </h5>
              </div>
            </div>
          </div>
   <div class="col-md-12" style="margin-top: 8%">
           <a href="index.php" class="custom-font"> Dasbor</a>
          </div> 
          <hr style="width: 100%">
           <div class="col-md-12">
           <a href="pesanan.php" class="custom-font"> List Pesanan Proses </a>
          </div> 
          <hr style="width: 100%">
            <div class="col-md-12">
           <a href="detail-akun.php" class="custom-font">  Detail Akun</a>
          </div> 
          <hr style="width: 100%">
            <div class="col-md-12">
          <a href="logout.php" class="custom-font">   Keluar</a>
          </div> 
          <hr style="width: 100%">
        </div>
    </div>
    <div class="col-md-1">
      <div class="vl"></div>
    </div>
    <div class="col-md-8">
      <?php
      $data=mysqli_query($koneksi,"SELECT DISTINCT id_receipt from pesanan where status_cart=1 and status_pesanan=1");
      $cek = mysqli_num_rows($data);
      if($cek>0){
        $list_receipt = array();
        while ($row = mysqli_fetch_assoc($data)) {
             $list_receipt[] = $row;
        }
        ?> 
        <h4 class="text-center">List Pesanan Proses</h4><br>
        <table class="table">
          <th>No.</th>
          <th>ID Receipt</th>
          <th>Bukti Transfer</th>
          <th>Detail Pesanan</th>
          <th>Action</th>
          <?php
          $i=1;
            foreach ($list_receipt as $row) {
              ?>
              <tr>
                <td>
                  <?=$i;?>
                </td>
                <td>
                  <?=$row['id_receipt']?>
                </td>
                <td>
                  <?php
                  $id_receipt=$row['id_receipt'];
                  $data=mysqli_query($koneksi,"SELECT * from pembayaran where id_receipt='$id_receipt'");
                  $cek=mysqli_num_rows($data);
                  if($cek>0){
                    $bukti_data = mysqli_fetch_array($data);
                    ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buktiTransfer<?=$i?>">
 Lihat
</button>

<!-- Modal -->
<div class="modal fade" id="buktiTransfer<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bukti Transfer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="row">
         <div class="col-md-3">
           Tanggal
         </div>
         <div class="col-md-1">:</div>
         <div class="col-md-8">
           <?=$bukti_data['tanggal']?>
         </div><hr style="width: 90%">
          <div class="col-md-3">
           Nama Pembayar
         </div>
         <div class="col-md-1">:</div>
         <div class="col-md-8">
           <?=$bukti_data['nama_pembayar']?>
         </div><hr style="width: 90%">
          <div class="col-md-3">
           Total Pembayaran
         </div>
         <div class="col-md-1">:</div>
         <div class="col-md-8">
           <?=$bukti_data['total_pembayaran']?>
         </div><hr style="width: 90%">
          <div class="col-md-3">
           Nama Bank
         </div>
         <div class="col-md-1">:</div>
         <div class="col-md-8">
           <?=$bukti_data['bank']?>
         </div><hr style="width: 90%">
          <div class="col-md-3">
           Catatan
         </div>
         <div class="col-md-1">:</div>
         <div class="col-md-8">
           <textarea disabled>
             <?=$bukti_data['catatan']?>
           </textarea>
         </div><hr style="width: 90%">
          <div class="col-md-3">
           Bukti Pembayaran
         </div>
         <div class="col-md-1">:</div>
         <div class="col-md-8">
           <img src="../assets/img/bukti/<?=$bukti_data['bukti_transfer']?>" class="img-thumbnail">
         </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


                    <?
                  }
                  else{
                    echo 'Not Uploaded Yet';
                  }
                  ?>
                </td>
                <td>
                  <!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#detailReceipt<?=$i?>">
  Lihat
</button>

<!-- Modal -->
<div class="modal fade" id="detailReceipt<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content"  style="width: 150%;margin-left: -25%;margin-top: 15%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">List Pesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
               $data = mysqli_query($koneksi,"SELECT * FROM pesanan JOIN produk ON pesanan.id_produk = produk.id_produk JOIN user on pesanan.id_user=user.id_user where id_receipt='$id_receipt'");
              $list_pesanan = array();
              while ($row2 = mysqli_fetch_assoc($data)) {
              $list_pesanan[] = $row2;
            }
            $nama_pemesan=$list_pesanan[0]['nama'];
        ?>
        <h4>Nama pemesan : <span style="color:red"> <?=$nama_pemesan?></span></h4><br>
        <table class="table">
          <thead class="thead-dark">
            <th>No.</th>
            <th>Nama Produk</th>
            <th>Ukuran</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub Total</th>
          </thead>
          <tbody>
            <?php
            $j=1;
            $sum=0;
            foreach ($list_pesanan as $row2) {
              ?>
              <tr>
                <td><?=$j?></td>
                <td><?=$row2['nama_produk']?></td>
                <td><?=$row2['ukuran_pesanan']?></td>
                <td><?=$row2['jumlah']?></td>
                <td><?=$row2['harga']?></td>
                <td><?=$row2['total_harga']?></td>
              </tr>
              <?php
            $sum+=$row2['total_harga'];
            $j++;
            }
            ?>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><b>Total Pembayaran</b></td>
              <td><?=$sum?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                </td>
                <td>
                  <form method="post" action="">
                    <input type="hidden" name="id_receipt" value="<?=$id_receipt?>">
                    <button type="submit" name="submit_delete" class="btn btn-danger" style="margin-top:1%">Hapus</button>
                  </form>
                </td>
              </tr>
              <?php
            }
          ?>
        </table>

        <?php
      }
      else{
        ?>
      <p>No order has been finished yet. 
      </p>
        <?php
      }
      ?>

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

<?php
if(isset($_POST['submit_delete'])){
    mysqli_query($koneksi,"DELETE FROM pesanan WHERE id_receipt='$id_receipt'");
    echo '<script>alert("Berhasil menghapus!");window.location.replace("pesanan-selesai.php"); </script>';
}
?>