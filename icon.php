<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Mengimpor Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    /* Menambahkan style ke body */
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    /* Menambahkan style ke navbar */
    .navbar {
        display: grid;
        /* Menambahkan display grid */
        grid-template-columns: repeat(1, 1fr);
        /* Mengatur satu kolom */
        width: 100%;
        background-color: #555;
        overflow: auto;
    }

    /* Menambahkan style ke link pada navbar */
    .navbar a {
        display: flex;
        /* Menambahkan display flex */
        justify-content: center;
        /* Mengatur posisi item pada center */
        align-items: center;
        /* Mengatur item berada di tengah-tengah */
        padding: 12px;
        color: white;
        text-decoration: none;
        font-size: 17px;
    }

    /* Menambahkan style ketika link di hover pada navbar */
    .navbar a:hover {
        background-color: #000;
    }

    /* Menambahkan style ke link aktif pada navbar */
    .active {
        background-color: #04AA6D;
    }

    /* Menambahkan style untuk media query */
    @media screen and (max-width: 500px) {
        .navbar a {
            float: none;
            display: block;
        }
    }
</style>

<body>

    <h2>Responsive Navigation Bar with Icons</h2>
    <p>Try to resize the browser window to see the responsive effect.</p>

    <!-- Membuat navigasi menggunakan div -->
    <div class="navbar">
        <a class="active" href="#"><i class="fa fa-fw fa-home"></i><br> Home</a>
        <a href="#"><i class="fa fa-fw fa-facebook"></i><br> Facebook</a>
        <a href="#"><i class="fa fa-fw fa-twitter"></i><br> Twitter</a>
        <a href="#"><i class="fa fa-fw fa-instagram"></i><br> Instagram</a>
        <a href="#"><i class="fa fa-fw fa-user"></i><br> Pengguna</a>
        <a href="#"><i class="fa fa-fw fa-comments"></i><br> Komentar</a>
        <a href="#"><i class="fa fa-fw fa-envelope"></i><br> Kontak</a>
        <a href="#"><i class="fa fa-fw fa-ellipsis-h"></i><br> Lain-lain</a>
    </div>

</body>

</html>