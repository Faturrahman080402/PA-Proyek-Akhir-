<?php
require("connection/Connection.php");

// Get the form data
if(isset($_POST['daftar'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $id = 1;
    $id++;
    // Generate user ID
    //$id = uniqid();

    $sql = "INSERT INTO akun_user (ID, Email, Password, Nama ) 
            VALUE ('', '$email', '$password', '$nama')";
    
    $query = mysqli_query($db, $sql);

    if($query) { 
        header('Location: login.php?status=sukses');
    } elseif (strlen($password) < 1) {
        header('Location: login.php?status=gagal');
        exit();
    }
    else {    
        header('Location: login.php?status=gagal');
    }
    } else {
    die("Akses dilarang...");
    }

?>