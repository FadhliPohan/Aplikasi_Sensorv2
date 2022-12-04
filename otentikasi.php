

<?php

include 'inc/koneksi.php';


// menyimpan inputan dari halaman login
// $username =  $_POST['username'];
// $password =  $_POST['password'];

// memanggil konfigurasi database
$username    =mysqli_real_escape_string($konek, $_POST['username']);
$password    =mysqli_real_escape_string($konek, $_POST['password']);

// perintah SQL untuk chek data ke database
$sql  = "SELECT * FROM tbl_user where username='$username' AND password='$password'";
$user = mysqli_query($konek, $sql);

// menghitung jumlah data yang ketemu
if(mysqli_num_rows($user)== 1){
    // kalau berhasil maka dialihkan ke halaman index
    session_start();
    $userData = mysqli_fetch_array($user);
 
   
        // password benar
  
		$_SESSION['username'] = $userData['username'];
		$_SESSION['password'] = $userData['password'];
		$_SESSION['status'] = $userData['status'];

		header('location: home.php');
    

}else{
    // kalau gagal maka balik ke halaman login
    echo"<script>alert('Username dan Password tidak terdaftar');location.href='index.php'</script>";
}
?>