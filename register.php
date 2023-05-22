<?php
// session_start();
// if(!isset(SESSION['email']) {
//     header('location:login.php');
// });
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link href="css/regist.css" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <!-- <link rel="stylesheet" type="text/css" href="css/login.css"> -->

  <style>
    body {
      background-color: #fff;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 30px;
      box-shadow: 0 2px 40px rgba(0, 0, 0, 0.3);
      max-width: 400px;
      margin: 0 auto;
      margin-top: 100px;
    }

    .card {
      background-color: #fff;
      margin: 0px;
      padding: 20px;
      border-radius: 30px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    .btn-dark {
      background-color: #333333;
      color: #ffffff;
      border: none;
      width: 100%;
      padding: 15px;
      font-size: 16px;
    }

    .btn-secondary {
      background-color: #888888;
      color: #ffffff;
      border: none;
      width: 100%;
      padding: 15px;
      font-size: 16px;
    }

    .kembali {
      margin-top: 10px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 15px;
      font-size: 16px;
    }
  </style>
</head>

<body style="background-color:#fff;">
  <div class="container mt-5" style="background-color:#fff;">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
        </div>
        <h1 class="m-3">Register</h1>
        <form action="insert_data.php" method="POST" onsubmit="return validateLogin()">
          <div class="container">

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Nama</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="nama">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="d-grid gap-2">
              <button class="btn btn-dark text-light mt-3 m-4" name="daftar">SIGN UP</button>
              <div class="container">
                <img src="img/orwith.png" class="img-fluid" alt="" style="margin-left:10%;">
              </div>

              <div class="d-grid gap-2 col-6 mx-auto">
                <a href="login.php" class="btn btn-dark" type="button">LOGIN</a><br>

              </div>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>