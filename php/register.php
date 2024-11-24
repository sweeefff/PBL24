<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $email = $_POST['email'];
    $password = md5($password);

        $checkUsername = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($checkUsername);
        if ($result->num_rows > 0) {
            echo "Username sudah terdaftar";
        } else {
            $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
            if ($conn->query($sql) === TRUE) {
                echo "Berhasil mendaftar";
            } else {
                echo "Error: ". $conn->error;
            }
        }
} else if (isset($_POST['login'])) {
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['username']=$row['username'];
        echo "Berhasil login";
        header("Location: index.php");
        exit();
    } else {
        echo "Username atau password salah";
    }
}
?>