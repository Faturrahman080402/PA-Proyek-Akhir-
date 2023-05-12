<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <style>
    body {
      background-color: #f2f2f2;
    }

    h1 {
      text-align: center;
    }

    .container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 30px;
      box-shadow: 0 2px 40px rgba(0, 0, 0, 0.3);
      max-width: 400px;
      margin: 0 auto;
      margin-top: 100px;
    }

    .card {
      background-color: #ffffff;
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
      padding: 10px;
      font-size: 16px;
    }

    .btn-secondary {
      background-color: #888888;
      color: #ffffff;
      border: none;
      width: 100%;
      padding: 10px;
      font-size: 16px;
    }

    .kembali {
      margin-top: 10px;
    }

    input[type="email"],
    input[type="password"] {
      width: 93%;
      padding: 10px;
      font-size: 16px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
        </div>
        <h1 class="m-3">LOGIN</h1>
        <form action="get_data.php" method="POST" onsubmit="return validateLogin()">
          <label for="email"></label>
          <div class="container">
            <div class="mb-3">
              <input type="email" id="email" name="email" placeholder="Email/UserName" required class="form-control p-2" id="exampleInputEmail1" aria-describedby="emailHelp"><br><br>
            </div>

            <div class="mb-3">
              <input type="password" id="password" name="password" placeholder="Password" class="form-control p-2" id="exampleInputPassword1"><br><br>
            </div>

            <div class="d-grid gap-2">
              <button class="btn btn-dark text-light mt-3 m-4" name="login">LOGIN</button>
              <div class="container">
                <img src="img/orwith.png" class="img-fluid" alt="" style="margin-left:10%;">
              </div>

              <div class="d-grid gap-2 col-6 mx-auto">
                <a href="register.php" class="btn btn-dark" type="button">SIGN UP</a>
                <p class="text-center">By registering, You agree to the Terms, Conditions and Policies of Borcelle & Privacy Policy</p>
              </div>
            </div>
          </div>
          <div class="kembali">
            <a href="home.php" class="btn btn-dark" type="button">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>