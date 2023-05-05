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
    .container {
      width: 100%;
      margin: 0 auto;
      max-width: 500px;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
    }

    .card {
      border: none;
      border-radius: 5px;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }

    .form-control {
      border-radius: 0px;
      border: none;
      border-bottom: 2px solid #999;
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #12495A;
    }

    .btn-dark {
      background-color: #12495A;
      border-color: #12495A;
    }

    .btn-dark:hover {
      background-color: #0D3A45;
      border-color: #0D3A45;
    }

    .btn-dark:active {
      background-color: #0A2E36;
      border-color: #0A2E36;
    }

    .btn-dark:focus {
      box-shadow: none;
    }

    img.img-fluid {
      max-width: 100%;
      height: auto;
    }

    /* Modifikasi tombol SIGN UP */
    button[name="daftar"] {
      font-size: 1.2rem;
      font-weight: bold;
      padding: 1rem 2rem;
      margin-top: 1rem;
    }

    /* Modifikasi gambar */
    .container img {
      max-width: 50%;
      margin-left: 25%;
    }

    /* Modifikasi tombol LOGIN */
    .d-grid a.btn[type="button"] {
      font-size: 1rem;
      margin-top: 1rem;
      padding: 0.5rem 1rem;
      border: 1px solid #212529;
      color: #fff;
      transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    }

    .d-grid a.btn[type="button"]:hover {
      background-color: #212529;
      color: #fff;
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