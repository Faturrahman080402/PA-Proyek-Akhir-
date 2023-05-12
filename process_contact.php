<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'go_map';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Tangkap data yang dikirim dari form kontak
$nama = $_POST['nama'];
$email = $_POST['email'];
$subjek = $_POST['subjek'];
$pesan = $_POST['pesan'];

// Query untuk menyimpan pesan kontak ke dalam tabel
$sql = "INSERT INTO kontak (nama, email, subjek, pesan) VALUES ('$nama', '$email', '$subjek', '$pesan')";

if (mysqli_query($conn, $sql)) {
    echo "Pesan kontak berhasil dikirim";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
