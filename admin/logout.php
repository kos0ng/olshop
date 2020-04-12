<?php 
// mengaktifkan session

session_start();

// menghapus semua session

session_destroy();

header("Location: /olshop/admin/login.php");
 ?>