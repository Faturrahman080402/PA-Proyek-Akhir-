<?php
// Menyambungkan ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_register_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memproses input dari form
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];

// Memeriksa apakah password dan konfirmasi password sama
if ($password !== $confirm_password) {
  echo "Password and confirm password do not match!";
  exit;
}

// Memeriksa apakah email sudah terdaftar
$sql = "SELECT * FROM registrations WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  echo "Email already registered!";
  exit;
}

// Menyimpan data registrasi ke database
$sql = "INSERT INTO registrations (name, email, password) VALUES ('$name', '$email', '$password')";
if (mysqli_query($conn, $sql)) {
  echo "Registration successful!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Menutup koneksi ke database
mysqli_close($conn);
?>