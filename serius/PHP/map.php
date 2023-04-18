<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWnYSD0G_JeGPjX6m1CIjk_KI6nywBVgc"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script></script>
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
            <li><a href="../PHP/home.php">Home</a></li>
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
</section>
<section>
    <div id="mapid">
        <script>
            function initMap() {
  var myLatLng = { lat: 2.2375, lng: 99.0372 };
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 12,
    center: myLatLng,
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
  });
}
var map = new google.maps.Map(document.getElementById("mapid"), {
  center: { lat: 2.6738, lng: 98.8215 },
  zoom: 10,
  restriction: {
    latLngBounds: {
      north: 4.9,
      south: 1.2,
      east: 99.9167,
      west: 97.8,
    },
  },
});

        </script>

</div>
</section>
     <!--footer-->
    <section class="footer">
        <p>Wisata Kualanamu Silangit</p>
        <p>&copy;2023 by Developer WIsata Kualanamu Silangit</p>
    </section>
</body>

</html>