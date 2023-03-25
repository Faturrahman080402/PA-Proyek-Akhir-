<?php
/*
Nama  : Paian Manalu
NIM   : 13322008
Kelas : 31 TK 1
*/

/*list_mahasiswa.php*/
include("config/config.php");
if(!isset($_GET['id'])){
    header('Location: list_mahasiswa.php');
}
$id = $_GET['id'];
$sql = "SELECT * FROM pendaftar WHERE id=$id";
$query = mysqli_query($db, $sql);
$mahasiswa = mysqli_fetch_assoc($query);
if(mysqli_num_rows($query) <1 ){
    die("data tidak ditemukan...");
}

?>