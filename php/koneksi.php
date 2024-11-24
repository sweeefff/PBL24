<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "pbl24"; //Nama Database
// melakukan koneksi ke db
$conn = mysqli_connect($host, $user, $pass, $db); if(!$conn){
echo "Gagal menghubungkan: " . die(mysqli_error($conn));
}
?>
