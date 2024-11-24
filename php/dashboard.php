<?php
session_start();
include ('koneksi.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Kocak</title>
</head>
<body>
    <div style="background-color: gold; text-align: center; padding: 15%;">
        <h1>SELAMAT DATANG DI HALAMAN DASHBOARD</h1>
        <?php
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $query = mysqli_query($koneksi, "SELECT users. * FROM `users` WHERE users.username = '$uname'");
            while($row=mysqli_fetch_array($query)){
                echo "Selamat datang, " . $row['username'];
            }
        }
        ?>
    </div>
</body>
</html>
