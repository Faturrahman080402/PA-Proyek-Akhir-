<?php
// Memeriksa apakah form telah disubmit atau belum
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Mendapatkan nilai dari form
  $alamat = $_POST["alamat"];
  $nama_wisata = $_POST["nama_wisata"];
  $nama_penginapan = $_POST["nama_penginapan"];
  $transportasi = $_POST["transportasi"];
  $rumah_makan = $_POST["rumah_makan"];
  $souvenir = $_POST["souvenir"];

  // Menyiapkan perintah SQL untuk menyimpan data ke dalam tabel
  $sql = "INSERT INTO wisata (alamat, nama_wisata, nama_penginapan, transportasi, rumah_makan, souvenir) VALUES ('$alamat', '$nama_wisata', '$nama_penginapan', '$transportasi', '$rumah_makan', '$souvenir')";

  // Menjalankan perintah SQL untuk menyimpan data ke dalam tabel
  if (mysqli_query($conn, $sql)) {
    echo "Data berhasil disimpan";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Menutup koneksi ke database
mysqli_close($conn);
