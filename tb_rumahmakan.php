<!DOCTYPE html>
<html>

<head>
    <title>Map</title>
    <meta charset="utf-8"><!--parsing code-->
    <meta name="viewport" content="initial-scale=1.0"> <!--web mobile-->
    <link rel="stylesheet" href="maps.css">
    <script src="maps.js"></script>
    <style>

    </style>

</head>

<body>
    <section class="header" id="home">
        <header>
            <a href="../php/home.php" class="logo">iTravel</a>
            <nav>
                <ul>
                    <div class="navigation">
                        <a href="home.php">Home</a>
                        <a href="tb_map.php">Map</a>
                        <a href="login.php">Login</a>
                        <a href="tb_contact.php">Contact Us</a>
                        <li class="nav-item dropdown">
                            <a href="home.php" class="nav-link dropdown-toggle">Account</a>
                            <div class="dropdown-menu">
                                <a href="#home" class="dropdown-item">Keluar</a>
                            </div>
                        </li>
                    </div>
                </ul>
            </nav>
        </header>
    </section><br><br><br><br>
    <section class="body">
        <div class="bodyBx">
            <div class="content">
                <h1>RUMAH MAKAN<br /></h1>
                <p>

                </p>
                <div class="btn-box">
                    <a href="../php/map.php">Try Now</a>
                </div>
            </div>
        </div>
    </section><br>
    <div class="datalist-wrapper">
        <div class="search">
            <input type="text" id="search-box" name="search" list="search-options" placeholder="Temukan lokasi....">
            <datalist id="search-options">
                <select id="options">
                    <option value="">--Pilih Lokasi--</option>
                </select>
            </datalist>
        </div>
        <div id="map"></div>
        <!--rekomendation-->
        <section class="Destination">
            <section class="popular-destination">
                <h1 class="heading"> Popular Destination</h1>
                <div class="container">
                    <h3 class="section-subtitle">Check out some of our most popular travel destinations</h3>
                    <ul class="destination-list">
                        <li class="destination-item">
                            <img src="img/srikandi.jpg" alt="Destination 1" class="destination-image">
                            <h3 class="destination-title">Rumah Makan Srikandi</h3>
                            <p class="destination-description">Rumah Makan Srikandi di Medan, Sumatera Utara, menawarkan hidangan Indonesia lezat dengan spesialisasi khas Batak seperti naniura dan saksang. Dengan interior yang nyaman, staf yang ramah, dan harga terjangkau, ini adalah tempat yang sempurna untuk menikmati hidangan khas Batak saat berada di Medan.</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/penatapan.jpg" alt="Destination 2" class="destination-image">
                            <h3 class="destination-title">Penatapan Restaurant</h3>
                            <p class="destination-description">Penatapan Restaurant di Danau Toba, Sumatera Utara, menawarkan hidangan Indonesia dan Barat yang lezat dengan pemandangan indah dari danau. Dengan interior modern dan bersih, serta staf yang ramah dan profesional, restoran ini menawarkan pengalaman makan yang nyaman dan santai. Dari hidangan nasi goreng hingga steak, tempat ini memiliki pilihan yang luas untuk semua selera. Nikmati makanan lezat sambil menikmati pemandangan alam yang indah di Danau Toba di Penatapan Restaurant.</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/panorama1.jpg" alt="Destination 3" class="destination-image">
                            <h3 class="destination-title">Warung Panorama</h3>
                            <p class="destination-description">Warung Panorama di Danau Toba menawarkan pengalaman makan yang unik dengan pemandangan yang menakjubkan dari atas bukit. Dengan hidangan tradisional Indonesia yang lezat, restoran ini menawarkan pengalaman kuliner yang autentik dan menyenangkan.</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/kens.jpg" alt="Destination 4" class="destination-image">
                            <h3 class="destination-title">Ken’s Coffee</h3>
                            <p class="destination-description">Ken's Coffee di Bandung adalah tempat kopi yang nyaman dan modern, menawarkan berbagai pilihan kopi berkualitas tinggi dari berbagai daerah di Indonesia. Para barista yang ahli akan meracik kopi dengan sempurna sesuai dengan selera Anda, dan Anda dapat menikmatinya sambil menikmati suasana santai</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/baren.jpg" alt="Destination 5" class="destination-image">
                            <h3 class="destination-title">Baren Coffee & Roastery</h3>
                            <p class="destination-description">Baren's Coffee & Roastery adalah tempat kopi yang menawarkan kopi berkualitas tinggi yang dipanggang dengan baik, serta suasana yang modern dan nyaman untuk menikmati kopi. Dalam lingkungan yang ramah pengunjung</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/istana minang.jpg" alt="Destination 6" class="destination-image">
                            <h3 class="destination-title">Restaurant Minang Gumarang</h3>
                            <p class="destination-description">Restoran Minang Gumarang menyajikan makanan khas Minangkabau dengan cita rasa yang autentik.</p>
                        </li>
                    </ul>
                </div>
            </section>
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
            <script>
                var input = document.getElementById("search-box");
                var select = document.getElementById("options");
                var data = [
                    "Rumah Makan Srikandi",
                    "Rumah Makan Padang SABANA MINANG",
                    "Rumah Makan Muslim Bundo Minang",
                    "Restaurant Sehat",
                    "Restaurant Asia",
                    "Restaurant Istana Minang 2",
                    "Parapat Pansit",
                    "Rumah Makan Lembah Anai Salero Minang",
                    "Damar Toba ~ Lakeside Eatery & Stay",
                    "RM. Fly Over Laguboti",
                    "RUMAH MAKAN BATAK SABAS",
                    "RM. Khas Batak Tumorang",
                    "Rm Asido Rohana",
                    "Bpk Jaya",
                    "Rumah makan jahir tombur bpk gultom",
                    "Wr. Muslim",
                    "PIZZA MATAHARI",
                    "Rest Area Modern Bamboo",
                    "Rumah Makan Sri Kemuning",
                    "RM MUSLIM MAS ARI",
                    "TOTA Cafe & Resto",
                    "Pintu Batu Tepi Sawah",
                    "RM. Khas Batak Horas Silindung",
                    "Kepiting Gokil's",
                    "Restaurant Panorama ori"
                ];

                for (var i = 0; i < data.length; i++) {
                    var option = document.createElement("option");
                    option.value = data[i];
                    select.appendChild(option);
                }

                var optionCounter = 0; // Add this line   
                input.addEventListener("input", function() {
                    var value = this.value.toLowerCase();
                    var options = select.getElementsByTagName("option");
                    for (var i = 0; i < options.length; i++) {
                        var text = options[i].value.toLowerCase();
                        if (text.indexOf(value) !== -1 && optionCounter < 6) {
                            options[i].style.display = "";
                            optionCounter++;
                        } else {
                            options[i].style.display = "none";
                        }
                    }
                    select.classList.add('show');
                });

                // Hide options when click outside
                document.addEventListener('click', function(event) {
                    var isClickInside = select.contains(event.target);
                    if (!isClickInside) {
                        select.classList.remove('show');
                        optionCounter = 0; // Reset optionCounter when hiding options
                    }
                });
                var map;
                var markers = [];

                function initMap() {
                    <?php
                    include "database.php";

                    $sql = "SELECT * FROM tb_rumahmakan";
                    $result = $conn->query($sql);

                    $locations = [];

                    while ($row = $result->fetch_assoc()) {
                        $locations[] = array(
                            $row['nama'],
                            $row['garis_lintang'],
                            $row['garis_bujur'],
                            $row['icon'],
                            $row['alamat'],
                            $row['gambar']
                        );
                    }
                    ?>

                    var locations = <?php echo json_encode($locations); ?>;

                    map = new google.maps.Map(document.getElementById('map'), {
                        center: {
                            lat: 3.0016031867434,
                            lng: 98.61766475067328
                        },
                        zoom: 9
                    });

                    var button3 = document.createElement("button");
                    button3.innerHTML = "MAP";
                    map.controls[google.maps.ControlPosition.TOP_CENTER].push(button3);
                    button3.addEventListener("click", function() {
                        window.location.href = "tb_map.php";
                    });

                    var button1 = document.createElement("button");
                    button1.id = "button1";
                    button1.innerHTML = "Destinasi";
                    map.controls[google.maps.ControlPosition.TOP_CENTER].push(button1);
                    button1.addEventListener("click", function() {
                        window.location.href = "tb_wisata.php";
                    });

                    var button2 = document.createElement("button");
                    button2.innerHTML = "Penginapan";
                    map.controls[google.maps.ControlPosition.TOP_CENTER].push(button2);
                    button2.addEventListener("click", function() {
                        window.location.href = "tb_penginapan.php";
                    });

                    var button4 = document.createElement("button");
                    button4.innerHTML = "Souvenir";
                    map.controls[google.maps.ControlPosition.TOP_CENTER].push(button4);
                    button4.addEventListener("click", function() {
                        window.location.href = "tb_souvenir.php";
                    });

                    var button5 = document.createElement("button");
                    button5.innerHTML = "Transportasi";
                    map.controls[google.maps.ControlPosition.TOP_CENTER].push(button5);
                    button5.addEventListener("click", function() {
                        window.location.href = "tb_transportasi.php";
                    });
                    for (var i = 0; i < locations.length; i++) {

                        map: map

                    };



                    var marker;
                    var infoWindow = new google.maps.InfoWindow();
                    var infoSidebar = document.createElement('div');
                    infoSidebar.id = 'info-sidebar';
                    // Sembunyikan sidebar saat halaman pertama kali dimuat
                    infoSidebar.style.display = 'none';
                    map.controls[google.maps.ControlPosition.RIGHT_TOP].push(infoSidebar); // Gunakan RIGHT_TOP agar posisi sidebar lebih rapi

                    for (var i = 0; i < locations.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                            icon: {
                                url: locations[i][3],
                                scaledSize: new google.maps.Size(35, 20)
                            },
                            map: map
                        });
                        //membuat marker posisi pengguna
                        navigator.geolocation.getCurrentPosition(function(position) {
                            var lat = position.coords.latitude;
                            var lng = position.coords.longitude;

                            // Add a marker at the user's location
                            var marker = new google.maps.Marker({
                                position: {
                                    lat: lat,
                                    lng: lng
                                },
                                map: map,
                                title: 'Posisi Saya'
                            });
                        });

                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                var contentString = '<div style="font-weight: bold;">' + locations[i][0] + '</div>';
                                infoWindow.setContent(contentString);
                                infoWindow.open(map, marker);
                                // Munculkan sidebar dan isi kontennya
                                infoSidebar.style.display = 'block';
                                infoSidebar.innerHTML = '<div class="location-info">' +
                                    '<b>Keterangan :</b><br>' +
                                    '<b><h1>' + locations[i][0] + '</h1><b><br>' +
                                    '<b>Lokasi :</b><br>' +
                                    '<h3>' + locations[i][4] + '</h3><br>' +
                                    '<img src="' + locations[i][5] + '" style="width: 420px; height: 250px;"><br>' +
                                    '<h3>Rating</h3><br>' +
                                    '<div class="rating">' +
                                    '<input type="radio" id="star5" name="rating" value="5">' +
                                    '<label for="star5"></label><br>' +
                                    '<input type="radio" id="star4" name="rating" value="4">' +
                                    '<label for="star4"></label><br>' +
                                    '<input type="radio" id="star3" name="rating" value="3">' +
                                    '<label for="star3"></label><br>' +
                                    '<input type="radio" id="star2" name="rating" value="2">' +
                                    '<label for="star2"></label><br>' +
                                    '<input type="radio" id="star1" name="rating" value="1">' +
                                    '<label for="star1"></label><br>' +
                                    '</div><br>' +
                                    '<h3>Komentar</h3><br>' +
                                    '<textarea id="comment"></textarea><br>' +
                                    '</div>';

                            };
                        })(marker, i));
                        markers.push(marker);
                    }

                    google.maps.event.addListener(map, 'click', function() {
                        infoSidebar.style.display = 'none'; // sembunyikan sidebar
                    });

                    // Tambahkan event listener untuk input pencarian
                    document.getElementById('search-box').addEventListener('input', function() {
                        var searchString = this.value.toLowerCase();

                        // Tampilkan semua marker jika pencarian kosong
                        if (searchString === '') {
                            for (var i = 0; i < markers.length; i++) {
                                markers[i].setVisible(true);
                            }
                            infoSidebar.style.display = 'none'; // Sembunyikan sidebar saat pencarian kosong
                            return;
                        }

                        // Sembunyikan semua marker yang tidak sesuai
                        for (var i = 0; i < markers.length; i++) {
                            var locationName = locations[i][0].toLowerCase();
                            if (locationName.indexOf(searchString) === -1) {
                                markers[i].setVisible(false);
                            } else {
                                markers[i].setVisible(true);
                            }
                        }
                    });
                    var input = document.getElementById("search-box");
                    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                    var searchBox = new google.maps.places.SearchBox(input);

                    searchBox.addListener('places_changed', function() {
                        var places = searchBox.getPlaces();
                        if (places.length == 0) {
                            return;
                        }

                        // Sembunyikan semua marker yang tidak sesuai dengan pencarian
                        for (var i = 0; i < markers.length; i++) {
                            markers[i].setVisible(false);
                        }

                        // Tampilkan marker yang sesuai dengan tempat yang dicari
                        var bounds = new google.maps.LatLngBounds();
                        for (var i = 0; i < places.length; i++) {
                            var place = places[i];
                            for (var j = 0; j < markers.length; j++) {
                                if (markers[j].getPosition().equals(place.geometry.location)) {
                                    markers[j].setVisible(true);
                                    bounds.extend(place.geometry.location);
                                    break;
                                }
                            }

                        }
                        map.fitBounds(bounds);
                    });

                }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?AIzaSyBA9KznFyKV2mH5JyKf1nRdJATnGRCV8bQ&callback=initMap"></script>
            <script src="script.js"></script>
</body>

</html>

</body>

</html>