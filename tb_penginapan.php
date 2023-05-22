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
                                <a href="home.php" class="dropdown-item">Keluar</a>
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
                <h1>PENGINAPAN<br /></h1>
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
                            <img src="img/niagara.jpg" alt="Destination 1" class="destination-image">
                            <h3 class="destination-title">Hotel Niagara Parapat</h3>
                            <p class="destination-description">Hotel Niagara Parapat di tepi Danau Toba menawarkan pemandangan indah dari kamar yang menghadap danau. Terdapat kolam renang, restoran, dan spa, serta dekat dengan tempat wisata seperti Bukit Indah Simarjarunjung dan Air Terjun Sipiso-piso. Pilihan tepat untuk menginap saat berkunjung ke Danau Toba.</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/parapat.jpg" alt="Destination 2" class="destination-image">
                            <h3 class="destination-title">Khas Parapat Hotel</h3>
                            <p class="destination-description">Khas Parapat Hotel di Sumatera Utara menawarkan kamar-kamar nyaman dan modern, serta restoran yang menyajikan makanan khas dan internasional. Dekat dengan tempat wisata di sekitar Parapat seperti Bukit Indah Simarjarunjung dan Air Terjun Sipiso-piso. Pilihan tepat untuk menginap saat berkunjung ke Parapat dan Danau Toba.</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/gibeon1.jpg" alt="Destination 3" class="destination-image">
                            <h3 class="destination-title">Sapadia Villa Bukit Gibeon</h3>
                            <p class="destination-description"> Sapadia Villa Bukit Gibeon di Sumatera Utara menawarkan kamar-kamar luas dengan pemandangan yang spektakuler, dilengkapi dengan fasilitas seperti AC dan balkon pribadi. Terdapat juga kolam renang, lounge, dan restoran. Dekat dengan tempat wisata seperti Taman Alam Lumbini dan Air Terjun Sipiso-piso. Pilihan sempurna untuk menginap saat berkunjung ke Bukit Gibeon dan sekitarnya.</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/toledo.jpg" alt="Destination 4" class="destination-image">
                            <h3 class="destination-title">Toledo InnToledo Inn</h3>
                            <p class="destination-description">Hotel di Pematangsiantar, Sumatera Utara menawarkan kamar-kamar modern dengan fasilitas seperti AC dan TV layar datar. Terdapat juga restoran, lounge, dan ruang rapat. Dekat dengan tempat wisata seperti Air Terjun Sipiso-piso dan Danau Toba. Pilihan tepat untuk menginap di Pematangsiantar.</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/my nasha.jpg" alt="Destination 5" class="destination-image">
                            <h3 class="destination-title">My Nasha Tigaras</h3>
                            <p class="destination-description">My Nasha Tigaras Hotel di Tigaras, Sumatera Utara menawarkan kamar-kamar mewah dan nyaman dengan fasilitas modern seperti AC dan TV layar datar. Terdapat juga kolam renang, pusat kebugaran, spa, dan restoran. Dekat dengan tempat wisata seperti Danau Toba dan Bukit Indah Simarjarunjung. Pilihan tepat untuk menginap saat berkunjung ke Tigaras.</p>
                        </li>
                        <li class="destination-item">
                            <img src="img/sitito.jpg" alt="Destination 6" class="destination-image">
                            <h3 class="destination-title">Hotel Sitio tio</h3>
                            <p class="destination-description">Hotel Sitio Tio di Parapat, Sumatera Utara menawarkan kamar-kamar nyaman dengan fasilitas seperti AC, TV layar datar, dan kamar mandi pribadi. Dilengkapi dengan restoran, lounge, dan akses Wi-Fi gratis. Dekat dengan tempat wisata seperti Danau Toba dan Air Terjun Sipiso-piso. Pilihan yang tepat untuk menginap di Parapat.</p>
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
                    "Pondok Berata Dapdap",
                    "Tiara Bunga Hotel",
                    "Hotel Nabasa",
                    "Lago Hotel & Resto",
                    "HOTRONA HOTEL",
                    "Mabar Homestay & Taxi",
                    "Hotel Santo Djaya",
                    "Patane l",
                    "Desa Bonandolok Sosortaguru Sinurat",
                    "Sinagodang Park",
                    "BAGAS HOMESTAY",
                    "Ps. Lumbun Julu",
                    "PIK ( Penginapan Indah Kirana )",
                    "Star Beach Hotel",
                    "Hotel Niagara Parapat",
                    "Parapat Danau Toba",
                    "OYO 2045 Hotel 211",
                    "Patra Parapat Hotel",
                    "Rumah Nek Ribut",
                    "Desa Lumban Holbung Nabalau",
                    "Desa Huta Baru",
                    "OYO 90920 Agave Hotel",
                    "OYO 90509 Nadia Hotel",
                    "Batavia Hotel",
                    "Sapadia Hotel"
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

                    $sql = "SELECT * FROM tb_penginapan";
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
                    button1.innerHTML = "Destinasi";
                    map.controls[google.maps.ControlPosition.TOP_CENTER].push(button1);
                    button1.addEventListener("click", function() {
                        window.location.href = "tb_wisata.php";
                    });

                    var button2 = document.createElement("button");
                    button2.innerHTML = "Rumah Makan";
                    map.controls[google.maps.ControlPosition.TOP_CENTER].push(button2);
                    button2.addEventListener("click", function() {
                        window.location.href = "tb_rumahmakan.php";
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
                                scaledSize: new google.maps.Size(20, 20)
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