<!DOCTYPE html>
<html>

<head>
    <title>Google Maps API: Cara Menampilkan Lokasi dengan PHP dan MySQL</title>
    <h3>Form Pencarian Dengan PHP - WWW.MALASNGODING.COM</h3>
    <form action="index.php" method="get">
        <label>Cari :</label>
        <input type="text" name="cari">
        <input type="submit" value="Cari">
    </form>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGl5e95hdB_l6vlyar0aNSv8pkK36Ccrg&callback=initialize" async defer></script>
    <script type="text/javascript">
        var marker;

        function initialize() {
            // Variabel untuk menyimpan informasi lokasi
            var infoWindow = new google.maps.InfoWindow;
            //  Variabel berisi properti tipe peta
            var mapOptions = {
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            // Pembuatan peta
            var peta = new google.maps.Map(document.getElementById('googleMap'), mapOptions);
            // Variabel untuk menyimpan batas kordinat
            var bounds = new google.maps.LatLngBounds();
            // Pengambilan data dari database MySQL
            addMarker(-8.344295, 115.101547, 'Bali');
            addMarker(2.550684074855552, 98.67357293577228, 'Bukit Sibea-Bea');
            addMarker(-6.208760, 106.845599, 'Jakarta');
            addMarker(-5.147696, 119.432593, 'Makassar');
            addMarker(-0.861277, 134.062422, 'Manokwari');
            addMarker(-3.371565, 135.501464, 'Nabire');
            addMarker(-0.947110, 100.414603, 'Padang');
            addMarker(-2.216392, 113.921577, 'Palangkaraya');
            addMarker(-0.027842, 109.344250, 'Pontianak');
            addMarker(-7.795766, 110.369866, 'Yogyakarta');

            // Proses membuat marker 
            function addMarker(lat, lng, info) {
                var lokasi = new google.maps.LatLng(lat, lng);
                bounds.extend(lokasi);
                var marker = new google.maps.Marker({
                    map: peta,
                    position: lokasi
                });
                peta.fitBounds(bounds);
                bindInfoWindow(marker, peta, infoWindow, info);
            }
            // Menampilkan informasi pada masing-masing marker yang diklik
            function bindInfoWindow(marker, peta, infoWindow, html) {
                google.maps.event.addListener(marker, 'click', function() {
                    infoWindow.setContent(html);
                    infoWindow.open(peta, marker);
                });
            }
        }
    </script>
</head>

<body>

    <div id="googleMap" style="width:1100px;height:500px;"></div>

</body>

</html>