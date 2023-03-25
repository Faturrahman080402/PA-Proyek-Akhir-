<!DOCTYPE html>
<html>
<style></style>
<head>
    <title>Form Registrasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="form_daftar.css">
    <script src="form_daftar.js"></script>
</head>
<form action="proses_pendaftaran.php" method="POST">
<body>
    <div class="container">
        <h1>Registrasi</h1>
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="Nama" placeholder="Nama Lengkap" id="nama">
                </p>
                <p>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Email" required>
                </p>
                <p>
                    <label>Jenis Kelamin: </label>
                    <label><input type="radio" name="Jenis_kelamin" value="laki-laki">Laki-laki</label>
                    <label><input type="radio" name="Jenis_kelamin" value="perempuan">Perempuan</label>
                </p>
                <p>
                    <label for="No_Telp">No Telp: </label>
                    <input type="teL" name="No_Telp" placeholder="No. Telepon" id="No. Telepon">
                </p>
                <p>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Password">
                </p>
                <p>
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" id="confirmpassword" name="confirmpassword"placeholder="Masukkan Kembali Password Anda" required>
                </p>
                <p>
                    <input type="submit" value="Daftar" name="daftar" >
                </p>
        </form>
        <p id="link" style="text-align:center;">Sudah Punya Akun? <a href="login.php">Login</a></p>
    </div>
</form>
</body>
</html>
