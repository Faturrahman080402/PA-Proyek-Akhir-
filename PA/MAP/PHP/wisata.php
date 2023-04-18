<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "database_wisata";

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $dbname);

// Memeriksa apakah koneksi berhasil terhubung atau tidak
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
