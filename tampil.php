<?php
include 'koneksi.php';
$query = "SELECT * FROM image";

$hasil = mysqli_query($koneksi, $query);
$data_user = array();

while ($row = mysqli_fetch_assoc($hasil)) {
    $data_user[] = $row;
}
?>


<html>
    <head>
        <title>List User</title>
<link rel="stylesheet" href="style2.css">
    </head>
    <body>
        
      <div class="tabel">
        <table border="1" class="listuser">
            <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gambar</th>
            </tr>
            <?php
            $i = 1;
            foreach ($data_user as $data) { ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['opsi']; ?></td>
                <td>
                	<img src="fotoprofil/<?php echo $data['filename']; ?>">         		
                </td> 
            </tr>

             <?php
            $i++;
            }
                ?>
        </table>
      </div>
    </body>
</html>
