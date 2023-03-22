<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // buka koneksi ke database
  $conn = mysqli_connect('localhost', 'root', '', 'login_db');

  // query untuk mengambil data pengguna dari database
  $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
  $result = mysqli_query($conn, $query);

  // verifikasi username dan password
  if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user['password'])) {
      // login sukses, simpan data pengguna ke session
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['user_name'] = $user['name'];
      $_SESSION['user_email'] = $user['email'];
      header('Location: /HTML/Beranda.html');
      exit;
    } else {
      // password salah
      echo 'Password salah';
    }
  } else {
    // username tidak ditemukan
    echo 'Username tidak ditemukan';
  }
}
?>