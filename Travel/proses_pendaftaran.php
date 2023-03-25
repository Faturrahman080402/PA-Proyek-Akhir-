<?php
require("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
 // ambil data dari formulir
 $nama = $_POST['Nama'];
 $email= $_POST['email'];
 $jk = $_POST['Jenis_kelamin'];
 $No_Telp = $_POST['No_Telp'];
 $password = $_POST['password'];
 $No_Telp = $_POST['No_Telp'];
 // buat query
 $sql = "INSERT INTO pendaftar(Nama, Email, Jenis_kelamin, Password, No_Telp)
VALUE ('$nama', '$email', '$jk', '$password', '$No_Telp')";
 $query = mysqli_query($db, $sql);

 // apakah query simpan berhasil?
 if( $query ) {
 // kalau berhasil alihkan ke halaman index.php dengan status=sukses
 header('Location: login.php?status=sukses');
 } else {
 // kalau gagal alihkan ke halaman indek.php dengan status=gagal
 header('Location: login.php?status=gagal');
 }
 } else {
 die("Akses dilarang...");
}
?>