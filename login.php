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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <!-- <link rel="stylesheet" type="text/css" href="css/login.css"> -->
  <style>
    body {
      background-color: whitesmoke;
    }

    .card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
      margin: 0 auto;
      max-width: 500px;
      padding: 30px;
      text-align: center;
      margin-top: 100px;
    }

    .card h1 {
      color: #12495A;
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 30px;
      text-align: center;
    }

    .form-control {
      background-color: #f8f8f8;
      border: none;
      border-radius: 20px;
      padding: 15px;
      margin-bottom: 10px;
      width: 100%;
    }

    .btn {
      background-color: #12495A;
      border: none;
      border-radius: 20px;
      color: white;
      cursor: pointer;
      padding: 10px 20px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #0b3742;
    }

    .btn:focus {
      outline: none;
    }

    .text-center {
      text-align: center;
      margin-top: 20px;
    }

    .container img {
      max-width: 80%;
      margin-top: 30px;
      margin-bottom: 10px;
    }

    @media (max-width: 576px) {
      .card {
        margin-top: 50px;
        padding: 20px;
      }
    }
  </style>
</head>

<div class="col-md-6">
  <div class="card">
    <div class="card-body">
    </div>
    <h1 class="m-3">LOGIN</h1>
    <form action="get_data.php" method="POST" onsubmit="return validateLogin()">
      <label for="email"></label>
      <div class="container">
        <div class="mb-3">
          <input type="email" id="email" name="email" placeholder="Email/UserName" required class="form-control p-2" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
        </div>

        <div class="mb-3">
          <input type="password" id="password" name="password" placeholder="Password" class="form-control p-2" id="exampleInputPassword1">
        </div>

        <div class="d-grid gap-2">
          <button class="btn btn-dark text-light mt-3 m-4" name="login">LOGIN</button>
          <div class="container">
            <img src="img/orwith.png" class="img-fluid" alt="" style="margin-left:10%;">
          </div>

          <div class="d-grid gap-2 col-6 mx-auto">
            <a href="register.php" class="btn btn-dark" type="button">SIGN UP</a><br>
            <p class="text-center">By registering, You agree to the Terms, Conditions and Policies of Borcelle & Privacy Policy</p>
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