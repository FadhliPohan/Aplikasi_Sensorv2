<!-- <?php 
// $server = "localhost";
// $username = "root";
// $password = "";
// $database = "app";
// $konek = mysqli_connect($server, $username, $password) or die("Gagal konek ke server MySQLi" .mysqli_error());
// $bukadb = mysqli_select_db($database) or die("Gagal membuka database " .mysqli_error());
?> -->


<?php
$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "app";
$konek      = mysqli_connect($host, $user, $password,$database) or die("Gagal konek ke server MySQLi" .mysqli_error());

?>