<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="login.css">
    <script src="JS/login.js"></script>
</head>

<body>
    <div class="container">
        <h1>Login</h1><form action="get_data.php">
        <form action="index.php" method="POST" onsubmit="return validateLogin()">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan Email Anda" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan Password Anda">
            <input type="submit" value="Log In" name="login">
        </form>
        </form>
        <p id="link" style="text-align:center;">Belum Punya Akun? <a href="form_daftar.php">Daftar</a></p>
    </div>
</body>

</html>