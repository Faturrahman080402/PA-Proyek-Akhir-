<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWnYSD0G_JeGPjX6m1CIjk_KI6nywBVgc"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/map.css">
    <title>Peta dari Bandara Silangit ke Bandara Kualanamu</title>
</head>

<body>
    <section class="banner" id="sec">
        <header>
            <div class="header">
                <header>
                    <a href="../PHP/home.php" class="logo">Wisata Silangit Kualanamu</a>
                    <div id="toggle" onclick="toggle()"></div>
                </header>
                <div class="content">
                </div>
            </div>
    </section>
    <div id="navigation">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Penginapan</a></li>
            <section></section>
            <li><a href="">Restoran</a></li>
            <li><a href="">Tranprotasi</a></li>
            <li><a href="">Soufenir</a></li>
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
    <div>
        <div class="searchbar">
            <form action="../PHP/search.php" class="search-bar" method="get">
                <input type="text" placeholder="Cari Lokasi" name="q" />
                <button type="submit">
                    <img src="search.png" alt="" />
        </div>
        <div id="mapid">
            <script>
            function initMap() {
                // koordinat lokasi Bandara Silangit
                var silangit = {
                    lat: 2.243784,
                    lng: 98.991619,
                };
                // koordinat lokasi Bandara Kualanamu
                var kualanamu = {
                    lat: 3.642381,
                    lng: 98.885165,
                };
                // menampilkan peta pada elemen div dengan id "mapid"
                var map = new google.maps.Map(document.getElementById("mapid"), {
                    center: silangit,
                    zoom: 8,
                });
                // menambahkan marker untuk lokasi Bandara Silangit
                var markerSilangit = new google.maps.Marker({
                    position: silangit,
                    map: map,
                    title: "Bandara Silangit",
                });
                // menambahkan marker untuk lokasi Bandara Kualanamu
                var markerKualanamu = new google.maps.Marker({
                    position: kualanamu,
                    map: map,
                    title: "Bandara Kualanamu",
                });
            }
            // memanggil fungsi initMap saat halaman HTML selesai dimuat
            google.maps.event.addDomListener(window, "load", initMap);
            </script>
        </div>
        </section>
</body>

</html>