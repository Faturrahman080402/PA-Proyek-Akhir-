<?php

/*
Nama  : Paian Manalu
NIM   : 133220008
Kelas : 31 TK 1
*/

/*
proses_edit.php
*/

require("config.php");
// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar'])){
    // ambil data dari formulir
    $id= $_POST['id'];  //      
    $nama = $_POST['Nama'];
    $email = $_POST['Email'];
    $jk = $_POST['Jenis_Kelamin'];
    $No_Telp = $_POST['No_Telp'];
    $password = $_POST['Password'];


    // buat query update
    $sql = "UPDATE pendaftar SET Nama='$nama', Email='$email', Jenis_Kelamin='$jk', Password='$password', No_Telp='$No_Telp' WHERE id=$id";

    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list_mahasiswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
}else {
    die("Akses dilarang...");
}
?>