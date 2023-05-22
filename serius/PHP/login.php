<?php
// session_start();
// if(!isset(SESSION['email']) {
//     header('location:login.php');
// });
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../CSS/LR.css" />
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  <title></title>
</head>

<body>
  <script src="../JS/register.js"></script>
  <section>
    <div class="form-box">
      <div class="form-value">
      <form action="get_data.php" method="POST" onsubmit="return validateLogin()">
          <h2>Login</h2>
          <div class="inputbox">
            <ion-icon name="person-circle-outline"></ion-icon>
            <input type="text" name="username" required />
            <label for="">Username</label>
          </div>
          <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password" name="password" required />
            <label for="">Password</label>
          </div>

          <button type="submit"><a href="../PHP/home.php">Login</a></button>
          <div class="register">
            <p>
              Don't have an account yet?<a href="../PHP/register.php">Register</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </section>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>