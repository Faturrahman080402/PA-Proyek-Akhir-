<!DOCTYPE html>
<html>

<head>
  <title>Form Kontak</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      flex-direction: column;
      background-color: gray;
    }

    .form-kontak {
      width: 600px;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      background-color: #ffffff;
      border: 1px solid #dddddd;
      /* Garis keliling */
    }

    h2 {
      color: #ffffff;
      transition: color 0.3s ease;
      cursor: pointer;
    }

    h2:hover {
      color: #e0e0e0;
    }


    label {
      color: #555555;
      font-size: 20px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 10px;
      border: 1px solid #cccccc;
      border-radius: 5px;
      background-color: #f9f9f9;
      color: #555555;
    }

    input[type="submit"] {
      background-color: #007bff;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      border-radius: 3px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <h2>Contact Us</h2><br>
  <div class="form-kontak">
    <form method="POST" action="process_contact.php">
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Masukkan Email Aktif Anda" required>

      <label for="subjek">Subjek:</label>
      <input type="text" id="subjek" name="subjek" placeholder="Masukkan Subjek" required>

      <label for="pesan">Pesan:</label>
      <textarea id="pesan" name="pesan" placeholder="Masukkan Pesan Atau Kritikan" required></textarea>

      <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

    <a href="home.php" class="btn btn-secondary mt-3">Kembali</a>
  </div>
</body>

</html>