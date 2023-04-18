<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/home.css" />
</head>

<body>
    <section class="banner" id="sec">
        <header>
            <a href="../PHP/home.php" class="logo">Wisata Kualanamu Silangit</a>
            <div id="toggle" ondblclick="toggle()"></div>
        </header>
        <div class="content">
            <h2>
                Welcome <br />
                we are<span>Tour Guide</span>
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
                ipsum quosy corporis dicta? Voluptatem libero ipsum illo in velit,
                neque consectetur ab nostrum? Saepe ea numquam voluptate! Enim,
                laborum architecto.
            </p>
            <a href="../PHP/map.php">Try Now </a>
        </div>
        <ul class="sci">
            <li>
                <a href=""><img src="../gambar/facebook.png" alt="" /></a>
            </li>
            <li>
                <a href=""><img src="../gambar/twitter.png" alt="" /></a>
            </li>
            <li>
                <a href=""><img src="../gambar/linkedin.png" alt="" /></a>
            </li>
        </ul>
    </section>
    <div id="navigation">
        <ul>
            <li><a href="../PHP/home.php">Home</a></li>
            <li><a href="../PHP/map.php">Map</a></li>
            <li><a href="">About</a></li>
            <li><a href="../PHP/login.php">Login</a></li>
            <li><a href="../PHP/register.php">Register</a></li>
        </ul>
    </div>
    <script type="text/javascript">
        function toggle() {
            var sec = document.getElementById("sec");
            var nav = document.getElementById("navigation");
            sec.classList.toggle("active");
            nav.classList.toggle("active");
        }
    </script>
    <section class="about">
        <div class="contentBx">
            <h2 class="heading">About us</h2>
            <hr />
            <h5>WE CREATE THIS JUST FOR EXAMPLE</h5>
            <br />
            <p class="text">
                <br /><br />Dapatkan informasi terperinci tentang destinasi wisata yang Anda minati. Mulai dari sejarah,
                budaya, kuliner, atraksi, hingga tips perjalanan, kami menyajikan informasi yang komprehensif dan
                terkini untuk membantu Anda merencanakan perjalanan yang tak terlupakan.
            </p>
        </div>
    </section>
    <!--testimonials-->
    <section class="testimonial">
        <h2 class="heading">What our client Say</h2>
        <div class="container">
            <div class="contentBx">
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque,
                        dolorum ut! Dolorum quo cumque dolore optio odit dicta eos
                        repudiandae autem. Tempore odit alias quos quam voluptate ab
                        commodi nisi.
                    </p>
                    <br />
                    <h3>Just me and You</h3>
                </div>
            </div>
            <div class="contentBx">
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque,
                        dolorum ut! Dolorum quo cumque dolore optio odit dicta eos
                        repudiandae autem. Tempore odit alias quos quam voluptate ab
                        commodi nisi.
                    </p>
                    <br />
                    <h3>Just me and You</h3>
                </div>
            </div>
        </div>
    </section>
    <!--nothing to see here-->
    <section class="other">
        <div class="imgBx">
            <img src="../gambar/5.jpg" alt="" class="f" />
            <img src="../gambar/6.jpg" alt="" class="s" />
        </div>
        <div class="contenBx">
            <h2>NOT ONLY WISATA</h2>
            <hr><br><br>
            <p class="text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est
                voluptate recusandae possimus ab facere numquam veritatis
                consequuntur, voluptatibus blanditiis modi. Deserunt maxime
                voluptatibus animi, facilis id reprehenderit non ducimus fuga. Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Dolorem saepe
                quia et non amet alias aliquam? Eius distinctio quod, minima eaque
                quasi at provident sunt, quibusdam doloribus quas numquam unde.
            </p>
        </div>
        </div>
    </section>
    <!--Penutup-->
    <section class="penutup">
        <a href="">
            <hr>
            <h1>WISATA KUALANAMU SIALANGIT</h1>
            <hr>
        </a>
    </section>
    <!--footer-->
    <section class="footer">
        <p>Wisata Kualanamu Silangit</p>
        <p>&copy;2023 by Developer WIsata Kualanamu Silangit</p>
    </section>
</body>

</html>