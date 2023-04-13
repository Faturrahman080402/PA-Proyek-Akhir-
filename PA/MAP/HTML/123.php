<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../CSS/123.css" />
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWnYSD0G_JeGPjX6m1CIjk_KI6nywBVgc"></script>

    <title>Peta dari Bandara Silangit ke Bandara Kualanamu</title>

</head>

<body>
    <header>
        <h1>Wisata Silangit Kualanamu</h1>
        <img src="" alt="" />
        <nav>
            <a class="active" href="">Map</a>
            <a href="">About us</a>
            <a href="">Login</a>
            <div class="container">
                <div class="main-content">
                    <h1>Halaman Utama</h1>
                    <p>Ini adalah halaman utama.</p>
                </div>
                <div class="sidebar">
                    <h3>Menu</h3>
                    <ul>
                        <li><a href="#">Menu 1</a></li>
                        <li><a href="#">Menu 2</a></li>
                        <li><a href="#">Menu 3</a></li>
                    </ul>
                </div>
                <button class="toggle-sidebar">Toggle Sidebar</button>
            </div>
            <script>
                const toggleSidebarBtn = document.querySelector('.toggle-sidebar');
                const sidebar = document.querySelector('.sidebar');

                toggleSidebarBtn.addEventListener('click', () => {
                    sidebar.classList.toggle('show');
                });
            </script>
        </nav>

    </header>
</body>

</html>