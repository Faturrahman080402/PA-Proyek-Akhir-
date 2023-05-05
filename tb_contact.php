<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <link rel="stylesheet" href="contact.css">
  <style>
    body {
      background-color: #f7f7f7;
      font-family: 'Roboto', sans-serif;
      font-size: 16px;
      line-height: 1.5;
      color: #333;
    }

    header {
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    nav li {
      margin: 0 10px;
    }

    nav a {
      text-decoration: none;
      color: #333;
    }

    nav a.active {
      color: #e53935;
    }

    main {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .container {
      margin: 20px 0;
    }

    h1 {
      font-size: 36px;
      margin: 0 0 20px;
    }

    .contact-info {
      display: flex;
      align-items: center;
    }

    .logo {
      width: 80px;
      height: 80px;
      margin-right: 20px;
    }

    .contact-info p {
      margin: 0;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input,
    textarea {
      display: block;
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #f7f7f7;
      font-size: 16px;
      line-height: 1.5;
      color: #333
    }

    textarea {
      height: 200px;
    }

    button[type="submit"] {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: #0026ff;
      color: #fff;
      font-size: 16px;
      line-height: 1.5;
      cursor: pointer;
    }

    button[type="submit"] {
      transition: all 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #0026ff;
      transform: scale(1.05);
    }

    .logo {
      display: block;
      margin: 0 auto;
      max-width: 100%;
      height: 150px;
      width: 400px;
      padding: 20px;
    }

    .success-message {
      color: red;
    }
  </style>
</head>

<body>
  <main>
    <div class="container">
      <div class="contact-info">
        <img src="logo.png" alt="Logo" class="logo">
      </div>
      <?php
      // Panggil file database.php
      require_once "database.php";

      // Proses form contact us
      if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Masukkan data ke database
        $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
        if (mysqli_query($conn, $sql)) {
          echo '<b><p class="success-message">Pesan Anda berhasil dikirim!</p><b>';
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      }

      // Tutup koneksi
      mysqli_close($conn);
      ?>
      <form action="contact.php" method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea name="message" id="message" placeholder="Enter your message" required></textarea>
        </div>
        <button type="submit">Submit</button>
      </form>
    </div>

  </main>
</body>

</html>