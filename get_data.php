<?php
require("connection/Connection.php");

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: login.php?status=gagal');
        exit();
    }

    // Validasi password
    if (strlen($password) < 1) {
        header('Location: login.php?status=gagal');
        exit();
    }

    // Verifikasi kredensial pengguna
    $sql = "SELECT * FROM akun_user WHERE Email='$email' AND Password='$password'";
    $result = mysqli_query($db, $sql);

    if(mysqli_num_rows($result) == 1) {
        $nama = $_SESSION['email'];
        // Kredensial valid, arahkan ke halaman dashboard
        header('Location: home.php');
        exit();
    } else {
        // Kredensial tidak valid, tampilkan pesan kesalahan
        header('Location: login.php?status=gagal');
        exit();
    }
} else {
    die("Akses dilarang...");
} 
?>