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
   <h5>Nomor Pesanan(*)</h5>
   <form method="post" action=""  enctype="multipart/form-data">
   <input type="number" name="id_receipt" class="form-control" style="width: 40%" required>
   <h5 style="margin-top: 2%">Tanggal Pembayaran(*) </h5>
   <input type="date" name="tanggal" class="form-control" style="width: 40%" required>
   <h5 style="margin-top: 2%">Nama Pembayar(*) </h5>
   <input type="text" name="nama_pembayar" class="form-control" style="width: 40%" required>
   <h5 style="margin-top: 2%"> Nama Bank(*) </h5>
   <input type="text" name="bank" class="form-control" style="width: 40%" required>
   <h5 style="margin-top: 2%"> Transfer Amount(*) </h5>
   <input type="number" name="total_pembayaran" class="form-control" style="width: 40%" required>
   <h5 style="margin-top: 2%"> Catatan </h5>
   <textarea name="catatan" class="form-control" style="width: 40%"></textarea>
   <h5 style="margin-top: 2%">Bukti Transfer(*)</h5>
   <input type="file" name="file" class="form-control" style="width: 20%">
   <button type="submit" class="btn btn-black" style="margin-top:5%;width: 10%" name="submit">Submit</button>
  </form>
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
  $id_receipt=$_POST['id_receipt'];
  $data=mysqli_query($koneksi,"SELECT * from pesanan where id_receipt='$id_receipt'");
  $cek=mysqli_num_rows($data);
  if($cek==0){
    echo '<script>alert("Nomor Pesanan tidak diketahui");window.location.replace("konfirmasi-pembayaran.php"); </script>';
  }
  $tanggal=$_POST['tanggal'];
  $nama_pembayar=$_POST['nama_pembayar'];
  $bank=$_POST['bank'];
  $total_pembayaran=$_POST['total_pembayaran'];
  $catatan=$_POST['catatan'];
  $ekstensi_boleh = array('png','jpg','jpeg');
  $nama = $_FILES['file']['name'];
  $x = explode('.', $nama);
  $ekstensi = strtolower(end($x));
  echo $ekstensi;
  $size = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];  
    if(in_array($ekstensi, $ekstensi_boleh) === true){
        if($size < 1044070){      
      move_uploaded_file($file_tmp, '../assets/img/bukti/'.$nama);
      $result = mysqli_query($koneksi, "INSERT INTO pembayaran(id_receipt,tanggal,nama_pembayar,bank,total_pembayaran,catatan,bukti_transfer) VALUES('$id_receipt','$tanggal','$nama_pembayar','$bank','$total_pembayaran','$catatan','$nama')");
      if($result){
            echo '<script>alert("Berhasil Mengirim Bukti Pembayaran");window.location.replace("konfirmasi-pembayaran.php"); </script>';
      }else{
            echo '<script>alert("Gagal Mengirim Bukti Pembayaran");window.location.replace("konfirmasi-pembayaran.php"); </script>';
      }
        }else{
         echo '<script>alert("Ukuran Gambar Terlalu Besar");window.location.replace("konfirmasi-pembayaran.php"); </script>';
        }
         }else{
       echo '<script>alert("Ekstensi tidak diperbolehkan");window.location.replace("konfirmasi-pembayaran.php"); </script>';
         }
}
?>