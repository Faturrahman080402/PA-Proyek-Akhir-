<?php
require("config.php");

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: login.php?status=gagal');
        exit();
    }

    // Validasi password
    if (strlen($password) < 6) {
        header('Location: login.php?status=gagal');
        exit();
    }

    // Verifikasi kredensial pengguna
    $sql = "SELECT * FROM pendaftar WHERE Email='$email' AND Password='$password'";
    $result = mysqli_query($db, $sql);

    if(mysqli_num_rows($result) == 1) {
        // Kredensial valid, arahkan ke halaman dashboard
        header('Location: index.php');
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