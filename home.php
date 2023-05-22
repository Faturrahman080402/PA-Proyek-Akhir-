<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/home.css" />
    <script src="../js/home.js"></script>
    <title>i-Travel</title>
    <style>
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /*header*/
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 20px 10%;
            z-index: 100;
            transition: 0.6s;
            background: #000;
            align-items: center;
        }

        .logo {
            position: relative;
            font-weight: bold;
            color: #0dcdc2;
            text-decoration: none;
            font-size: 3em;
            letter-spacing: 2px;
            transition: 0.6s;
        }

        /* navigasi */
        .navigation a {
            font-size: 20px;
            color: #ffffff;
            text-decoration: none;
            font-weight: 400;
            margin-left: 5px;
            transition: background 0.3s ease;
            position: relative;
            z-index: 1;
            padding: 5px 10px;
            /* Tambahkan border tipis putih pada menu yang aktif */
            border: 1px solid transparent;
        }

        .navigation a::before {
            content: "";
            position: absolute;
            top: 0;
            left: -5px;
            right: -5px;
            bottom: 0;
            border-radius: 100px;
            background: rgba(255, 255, 255, 0.233);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .navigation a:hover::before,
        .navigation a.active::before {
            opacity: 1;
        }

        /* Tambahkan style untuk menu yang aktif */
        .navigation a.active {
            border-color: #ffffff;
            border-radius: 100px;
        }

        .nav-item.dropdown {
            position: relative;
            float: right;
            margin-left: 15px;
        }

        .nav-link.dropdown-toggle::after {
            display: inline-block;
            margin-left: 5px;
            vertical-align: middle;
            content: "\25BC";
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            display: none;
            padding: 0;
            margin: 0;
        }

        .dropdown-item {
            display: block;
            padding: 10px 20px;
            color: #fff;
            background-color: #000;
            text-decoration: none;
            padding: 0;
            margin: 0;
            list-style: none;
            pointer-events: none;
        }

        .nav-item:hover .dropdown-menu {
            display: block;
        }

        /*content*/
        .body .bodyBx {
            position: relative;
            background: linear-gradient(to left, #00000000, transparent),
                linear-gradient(to right, #000000 1%, transparent), url(img/bgbg2.jpg );
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            height: 58vh;
            margin-left: 10%;
            margin-right: 0;
            min-height: 100%;
            margin-top: 115px;
        }

        .body::before {
            display: flex;
            align-items: center;
            content: "";
            background: #000;
            position: absolute;
            max-height: 69.5vh;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -1;
        }

        .body .content h1 {
            font-size: 70px;
            font-weight: 750;
            color: #0dcdc2;
        }

        .body .content p {
            max-width: 700px;
            font-size: 40px;
            margin: 20px 0 40px;
            color: #fff;
        }

        .body .content .btn-box {
            display: flex;
            width: 345px;
            height: 50px;
        }

        .btn-box a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 150px;
            height: 100%;
            background: transparent;
            border: 2px solid #0dcdc2;
            border-radius: 20px;
            font-size: 26px;
            color: #0dcdc2;
            text-decoration: none;
            font-weight: 600;
            letter-spacing: 1px;
        }

        /* Popular Destination */
        .popular-destination {
            padding: 20px 0;
        }

        .section-title {
            font-size: 36px;
            font-weight: bold;
        }

        .section-subtitle {
            font-size: 24px;
            color: #000000;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .destination-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .destination-item {
            width: calc(33.33% - 40px);
            padding: 20px;
            margin: 20px;
            text-align: center;
            position: relative;
            /* menambahkan posisi relatif untuk efek mengambang */
            overflow: hidden;
            /* mengatur overflow menjadi hidden untuk mengatur efek mengambang */
        }

        .destination-image {
            width: 650px;
            height: 350px;
            /* ukuran gambar yang diperbesar */
            object-fit: cover;
            border-radius: 20px;
            transition: transform 0.3s ease-in-out;
            /* menambahkan transisi transform untuk efek mengambang */
        }

        .destination-title {
            font-size: 28px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .destination-description {
            font-size: 22px;
            color: #000000;
            margin-bottom: 10px;
        }

        .destination-link {
            font-size: 16px;
            color: #007bff;
            text-decoration: none;
        }

        .destination-link:hover {
            text-decoration: underline;
        }

        /* Efek mengambang saat hover */
        .destination-item:hover .destination-image {
            transform: scale(1.1);
            border-radius: 20px;
            /* memberikan efek perbesaran pada gambar saat hover */
        }

        /*testinmonials*/

        .testimonial {
            background: url(img/1.jpeg);
            background-size: cover;
            min-height: 800px;
            padding: 60px 0;
        }

        .testimonial .heading {
            text-align: center;
            font-size: 72px;
            font-weight: bold;
            color: #0dcdc2;
            margin-bottom: 40px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 60px;
        }

        .contentBx {
            width: 600px;
            padding: 50px;
            background-color: rgba(0, 0, 0, 0.4);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.6);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 160px;
        }

        .testimonialContent {
            flex: 1;
        }

        .testimonialImg {
            margin-top: 20px;
        }

        .contentBx p {
            font-size: 24px;
            color: #ffffff;
            line-height: 1.6;
        }

        h3 {
            font-size: 28px;
            font-weight: bold;
            color: #0dcdc2;
            margin-top: 20px;
        }

        .testimonial .rating {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .testimonial .rating .star {
            color: #f8d32a;
            margin: 0 2px;
        }

        /*service*/
        .heading {
            text-align: center;
            padding: 2.5rem;
            font-size: 3.9rem;
            border-radius: 0.5rem;
            padding: 2rem 1rem;
            color: #0dcdc2;
        }

        .services {
            text-align: center;
            color: #000;
        }

        .services .box-container {
            display: flex;
            flex-wrap: nowrap;
            overflow: auto;
            gap: 1.5rem;
            justify-content: center;
        }

        .services .box-container .box {
            max-width: 20%;
            border-radius: 0.5rem;
            padding: 1rem;
            text-align: center;
            white-space: normal;
        }

        .services .box-container .box:hover {
            color: #0dcdc2;
        }

        .services .box-container .box i {
            padding: 1rem;
            font-size: 5.5 xrem;
        }

        .services .box-container .box h3 {
            font-size: 2.5rem;
            margin-top: 1rem;
        }

        .services .box-container .box p {
            font-size: 1.4rem;
            padding: 0.5rem 0;
        }

        .services .box-container :hover {
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1);
        }

        /*about us*/
        .about {
            position: relative;
            width: 100%;
            display: flex;
            color: #000;
            padding: 50px;
        }

        .about .left {
            padding: 100px;
            display: flex;
            width: 50%;
        }

        .about .left img.imgabout {
            position: sticky;
            max-width: 1000px;
            border-radius: 100px;
            box-shadow: -30px 20px 40px 0 rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease-in-out;
        }

        .about .left img.imgabout:hover {
            transform: translateY(-20px);
            box-shadow: -50px 40px 40px 0 rgba(0, 0, 0, 0.5);
        }

        .about .about-content {
            padding: 100px;
            width: 50%;
        }

        .headingabout {
            color: #0dcdc2;
            font-size: 50px;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        hr {
            color: #0dcdc2;
            border: none;
            height: 1px;
            background-color: #0dcdc2;
            margin-bottom: 20px;
            position: relative;
        }

        hr::before {
            content: "";
            position: absolute;
            top: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 30px;
            background-color: #0dcdc2;
            border-radius: 50%;
        }

        hr::after {
            content: "";
            position: absolute;
            top: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 10px;
            height: 10px;
            background-color: #fff;
            border-radius: 50%;
        }

        .text {
            color: #000000;
            font-size: 32px;
            font-weight: 300;
            letter-spacing: 1px;
        }

        h5 {
            color: #0dcdc2;
            font-size: 72px;
        }

        /* Mengatur tampilan footer */
        .footer {
            background-color: #000;
            padding: 10px;
            text-align: center;
        }

        .footer p {
            margin: 0;
            font-size: 16px;
            color: #999;
        }

        /*efek responsif*/

        /*responsif header*/
        /* Tambahkan style untuk logo menjadi lebih kecil pada layar kecil */
        @media (max-width: 768px) {
            .logo {
                font-size: 2.5em;
                /* Mengurangi ukuran font pada layar kecil */
            }
        }

        /* Tambahkan style untuk navigasi menjadi flex column pada layar kecil */
        @media (max-width: 768px) {
            .navigation {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }

            .navigation a {
                margin: 0;
                /* Menghapus margin pada layar kecil */
            }
        }

        /* Tambahkan style untuk menu yang aktif pada layar kecil */
        @media (max-width: 768px) {
            .navigation a.active {
                border-width: 1px;
                /* Mengurangi ketebalan border pada layar kecil */
            }
        }

        /* Tambahkan style untuk logo menjadi lebih besar pada layar besar */
        @media (min-width: 900px) {
            .logo {
                font-size: 3em;
                /* Menambahkan ukuran font pada layar besar */
            }
        }

        /* Tambahkan style untuk padding pada header pada layar besar */
        @media (min-width: 900px) {
            header {
                padding: 20px 5%;
                /* Mengurangi padding kiri dan kanan pada layar besar */
            }
        }

        /* Tambahkan style untuk margin pada navigasi pada layar besar */
        @media (min-width: 900px) {
            .navigation {
                margin-right: 20px;
                /* Menambahkan margin kanan pada layar besar */
            }
        }

        /* Tambahkan style untuk menu yang aktif pada layar besar */
        @media (min-width: 900px) {
            .navigation a.active {
                border-width: 2px;
                /* Menambahkan ketebalan border pada layar besar */
            }
        }

        /* Tambahkan style untuk logo menjadi lebih besar pada layar besar */
        @media (min-width: 1200px) {
            .logo {
                font-size: 3.5em;
                /* Menambahkan ukuran font pada layar besar */
            }
        }

        /* Tambahkan style untuk padding pada header pada layar besar */
        @media (min-width: 1200px) {
            header {
                padding: 20px 5%;
                /* Mengurangi padding kiri dan kanan pada layar besar */
            }
        }

        /* Tambahkan style untuk margin pada navigasi pada layar besar */
        @media (min-width: 1200px) {
            .navigation {
                margin-right: 20px;
                /* Menambahkan margin kanan pada layar besar */
            }
        }

        /* Tambahkan style untuk menu yang aktif pada layar besar */
        @media (min-width: 1200px) {
            .navigation a.active {
                border-width: 2px;
                /* Menambahkan ketebalan border pada layar besar */
            }
        }

        /*responsif navigasi*/
        /* Tambahkan style untuk navigasi pada layar menengah (min-width: 768px) */
        @media (min-width: 768px) {
            .navigation a {
                font-size: 20px;
                /* Menambahkan ukuran font pada layar menengah */
                margin-left: 15px;
                /* Menambahkan margin kiri pada layar menengah */
                padding: 8px 16px;
                /* Mengurangi padding atas dan bawah pada layar menengah */
            }

            .navigation a::before {
                left: -4px;
                /* Menambahkan margin kiri pada pseudo-element pada layar menengah */
                right: -4px;
                /* Menambahkan margin kanan pada pseudo-element pada layar menengah */
            }
        }

        /* Tambahkan style untuk menu yang aktif pada layar menengah */
        @media (min-width: 768px) {

            .navigation a.active,
            .navigation a.active::before {
                border-color: #fff;
                border-radius: 100px;
            }
        }

        /* Tambahkan style untuk navigasi pada layar besar (min-width: 900px) */
        @media (min-width: 900px) {
            .navigation a {
                font-size: 24px;
                /* Menambahkan ukuran font pada layar besar */
                margin-left: 30px;
                /* Menambahkan margin kiri pada layar besar */
                padding: 12px 24px;
                /* Mengurangi padding atas dan bawah pada layar besar */
            }

            .navigation a::before {
                left: -7px;
                /* Menambahkan margin kiri pada pseudo-element pada layar besar */
                right: -7px;
                /* Menambahkan margin kanan pada pseudo-element pada layar besar */
            }
        }

        /* Tambahkan style untuk navigasi pada layar sangat besar (min-width: 1200px) */
        @media (min-width: 1200px) {
            .navigation a {
                font-size: 26px;
                /* Menambahkan ukuran font pada layar sangat besar */
                margin-left: 40px;
                /* Menambahkan margin kiri pada layar sangat besar */
                padding: 15px 30px;
                /* Mengurangi padding atas dan bawah pada layar sangat besar */
            }

            .navigation a::before {
                left: -9px;
                /* Menambahkan margin kiri pada pseudo-element pada layar sangat besar */
                right: -9px;
                /* Menambahkan margin kanan pada pseudo-element pada layar sangat besar */
            }
        }

        /* Tambahkan style untuk menu yang aktif pada layar besar dan sangat besar */
        @media (min-width: 900px) {

            .navigation a.active,
            .navigation a.active::before {
                border-color: #fff;
                border-radius: 100px;
            }
        }

        /*responsif content */
    </style>
</head>

<body>
    <!--header-->
    <section class="header" id="home">
        <header>
            <a href="home.php" class="logo">iTravel</a>
            <nav>
                <ul>
                    <div class="navigation">
                        <a href="#home">Home</a>
                        <a href="tb_map.php">Map</a>
                        <a href="#service">Service</a>
                        <a href="#about">About</a>
                        <a href="login.php">Login</a>
                        <a href="tb_contact.php">Contact Us</a>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle">Account</a>
                            <div class="dropdown-menu">
                                <a href="#home" class="dropdown-item">Keluar</a>
                            </div>
                        </li>
                    </div>

                </ul>
            </nav>
            <script src="../js/nav.js">
                /*active navigation*/
            </script>
        </header>
    </section>
    <!--body-->
    <section class="body" ">
      <div class=" bodyBx">
        <div class="content">
            <h1>Welcome To iTravel <br /></h1>
            <p>
                Explore North Sumatra with i-Travel: Your Ultimate Guide to Accommodations, Restaurants, Souvenirs, and
                Transportation around Kualanamu to Silangit Airports!
            </p>
            <div class="btn-box">
                <a href="home.php">Try Now</a>
            </div>
        </div>
        </div>
    </section>
    <!--rekomendation-->
    <section class="Destination">
        <section class="popular-destination">
            <h1 class="heading"> Popular Destination</h1>
            <div class="container">
                <h3 class="section-subtitle">Check out some of our most popular travel destinations</h3>
                <ul class="destination-list">
                    <li class="destination-item">
                        <img src="img/taman eden.jpeg" alt="Destination 1" class="destination-image">
                        <h3 class="destination-title">Taman Eden 100</h3>
                        <p class="destination-description">Taman Eden 100 di Sumatera Utara menawarkan keindahan alam
                            yang menakjubkan. Wisatawan dapat menikmati sejumlah air terjun yang indah, Bukit Manja yang
                            mempesona, dan Gunung Pangulubao yang menantang. Taman ini memiliki 100 jenis tanaman dan
                            cocok sebagai tempat berkemah, mendaki, dan penelitian alam. Jangan lewatkan kesempatan
                            untuk menikmati panorama alami di Taman Eden 100!</p>
                    </li>
                    <li class="destination-item">
                        <img src="img/kebun teh sidamanik.jpg" alt="Destination 2" class="destination-image">
                        <h3 class="destination-title">Kebun Teh Sidamanik</h3>
                        <p class="destination-description">Kebun Teh Sidamanik di Indonesia dikenal sebagai perkebunan
                            teh terbesar nomor 2. Dengan luas 8.373 ha, tempat ini memiliki kondisi alam yang masih
                            alami sehingga memberikan kesan yang sejuk dan menyegarkan. Cocok untuk refreshing dan
                            melepaskan penat dari segala beban pekerjaan. Disini, kita bisa melihat petani memetik pucuk
                            daun teh di pagi hari dan membantu mereka dalam aktifitasnya.</p>
                    </li>
                    <li class="destination-item">
                        <img src="img/Inna Parapat Hotel.jpg" alt="Destination 3" class="destination-image">
                        <h3 class="destination-title">Inna Parapat Hotel</h3>
                        <p class="destination-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            ut iaculis enim.</p>
                    </li>
                    <li class="destination-item">
                        <img src="img/Puncak Sipinsur.jpg" alt="Destination 4" class="destination-image">
                        <h3 class="destination-title">Puncak Sipinsur</h3>
                        <p class="destination-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            ut iaculis enim.</p>
                    </li>
                    <li class="destination-item">
                        <img src="img/Lembah Bakkara.jpg" alt="Destination 5" class="destination-image">
                        <h3 class="destination-title">Lembah Bakkara</h3>
                        <p class="destination-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            ut iaculis enim.</p>
                    </li>
                    <li class="destination-item">
                        <img src="img/bukit-simarjarunjung.jpg" alt="Destination 6" class="destination-image">
                        <h3 class="destination-title">Bukit Indah Simarjarunjung</h3>
                        <p class="destination-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            ut iaculis enim.</p>
                    </li>
                </ul>
            </div>
        </section>
        <!--testimonials-->
        <section class="testimonial">
            <h2 class="heading">What Our Clients Say</h2>
            <div class="container">
                <div class="contentBx">
                    <div>
                        <p>
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, dolorum ut! Dolorum quo
                            cumque dolore optio odit dicta eos repudiandae autem. Tempore odit alias quos quam voluptate
                            ab commodi nisi."
                        </p>
                        <div class="rating">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                        </div>
                        <br />
                        <h3>Just me and You</h3>
                    </div>
                </div>
                <div class="contentBx">
                    <div>
                        <p>
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, dolorum ut! Dolorum quo
                            cumque dolore optio odit dicta eos repudiandae autem. Tempore odit alias quos quam voluptate
                            ab commodi nisi."
                        </p>
                        <div class="rating">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                        </div>
                        <br />
                        <h3>Just me and You</h3>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!--service-->
    <section class="services" id="service">
        <h1 class="heading">Service</h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>Hotel</h3>
                <p>
                    Temukan pilihan penginapan nyaman dan terjangkau di sekitar Bandara
                    Kualanamu dan Bandara Silangit untuk memastikan Anda memiliki tempat
                    istirahat yang sempurna.
                </p>
            </div>
            <div class="box">
                <i class="fas fa-camera"></i>
                <h3>Tempat Wisata</h3>
                <p>
                    Temukan destinasi wisata menarik di sekitar Bandara Kualanamu dan
                    Bandara Silangit yang memukau dengan keindahan alam, budaya, dan
                    atraksi wisata unik.
                </p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>Restoran</h3>
                <p>
                    Cicipi kuliner lokal terbaik di sekitar Bandara Kualanamu dan
                    Bandara Silangit yang memanjakan lidah Anda dengan cita rasa khas
                    daerah dan masakan internasional.
                </p>
            </div>
            <div class="box">
                <i class="fas fa-bus"></i>
                <h3>Transportasi</h3>
                <p>
                    Dapatkan informasi lengkap tentang layanan shuttle, angkutan umum,
                    dan penyewaan mobil/sepeda motor di sekitar Bandara Kualanamu dan
                    Bandara Silangit untuk memudahkan perjalanan Anda dan menjadikan
                    pengalaman liburan Anda lebih nyaman.
                </p>
            </div>
            <div class="box">
                <i class="fas fa-gift"></i>
                <h3>Souvenir</h3>
                <p>
                    Temukan toko-toko souvenir terbaik di sekitar Bandara Kualanamu dan
                    Bandara Silangit yang menawarkan produk unik dan khas daerah sebagai
                    oleh-oleh yang sempurna untuk diambil pulang.
                </p>
            </div>
        </div>
    </section>
    <!--about us-->
    <section class="about" id="about">
        <div class="left">
            <img src="img/2.jpg" alt="" class="imgabout">
        </div>
        <div class="about-content">
            <h2 class="headingabout">About us</h2>
            <hr />
            <h5>Temukan Pesona Sumatera Utara Bersama i-Travel!</h5>
            <br />
            <p class="text">
                i-Travel adalah teman perjalanan Anda yang siap membantu Anda menjelajahi pesona Sumatera Utara. Dengan
                informasi terpercaya tentang destinasi wisata, penginapan, kuliner, souvenir, dan transportasi, kami
                hadir untuk membuat perjalanan Anda menjadi pengalaman tak terlupakan.
            </p><br>
            <p class="text">
                Kami adalah tim yang terdiri dari pecinta wisata dan teknologi yang berkomitmen untuk memberikan
                pengalaman pengguna yang mengesankan dan memudahkan Anda dalam merencanakan perjalanan impian Anda.
            </p><br>
            <p class="text">
                Kami juga berfokus pada keberlanjutan dan pelestarian lingkungan serta budaya daerah yang kami
                promosikan. Kami bekerja sama dengan pihak lokal, menjaga keberagaman budaya, menghargai tradisi, dan
                berpartisipasi dalam kegiatan konservasi alam.
            </p><br>
            <p class="text">Kami berharap i-Travel dapat menjadi sumber inspirasi bagi Anda dalam merencanakan
                perjalanan Anda di sekitar Bandara Kualanamu hingga Bandara Silangit. Jangan ragu untuk menghubungi kami
                jika Anda membutuhkan informasi lebih lanjut atau memiliki pertanyaan. Terima kasih telah memilih
                i-Travel sebagai teman perjalanan Anda. Selamat menjelajahi keindahan Sumatera Utara!</p>
        </div>
    </section>

    <!--footer-->
    <footer style="background-color: #222222; color: #fff; padding: 50px 0;">
        <div style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
            <div style="flex: 1;">
                <h3 style="font-size: 24px; margin-bottom: 20px;">Kontak Kami</h3>
                <p style="font-size: 16px;">Alamat: Jl. Raya Puncak, Bogor, Indonesia</p>
                <p style="font-size: 16px;">Telepon: (021) 123456</p>
                <p style="font-size: 16px;">Email: info@contoh.com</p>
            </div>
            <div style="flex: 1;">
                <h3 style="font-size: 24px; margin-bottom: 20px;">Ikuti Kami</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 10px;"><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                    <li style="margin-bottom: 10px;"><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li style="margin-bottom: 10px;"><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                </ul>
            </div>
        </div>
        <div style="background-color: #333; padding: 20px; text-align: center;">
            <p style="margin: 0; font-size: 16px;">© 2023 Contoh. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>