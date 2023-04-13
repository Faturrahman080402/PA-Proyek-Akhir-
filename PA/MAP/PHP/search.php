<?php
// membuat koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "namadatabase";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mendapatkan kata kunci dari form search
$search = $_POST["search"];

// Menyiapkan perintah SQL untuk mencari data yang sesuai dengan kata kunci
$sql = "SELECT * FROM wisata WHERE alamat LIKE '%$search%' OR nama_wisata LIKE '%$search%' OR nama_penginapan LIKE '%$search%' OR transportasi LIKE '%$search%'";

// Mengeksekusi perintah SQL dan menyimpan hasilnya ke dalam variabel $result
$result = mysqli_query($conn, $sql);

// Menampilkan hasil pencarian
if (mysqli_num_rows($result) > 0) {
    // output data dari setiap baris
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " - Alamat: " . $row["alamat"] . " - Nama Wisata: " . $row["nama_wisata"] . " - Nama Penginapan: " . $row["nama_penginapan"] . " - Transportasi: " . $row["transportasi"] . " - Rumah Makan/Restoran: " . $row["rumah_makan_restoran"] . " - Souvenir: " . $row["souvenir"] . "<br>";
    }
} else {
    echo "Tidak ada hasil pencarian";
}

// Menutup koneksi ke database
mysqli_close($conn);
