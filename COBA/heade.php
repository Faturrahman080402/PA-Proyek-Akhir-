<!DOCTYPE html>
<html>

<head>
    <title>Map</title>
    <meta charset="utf-8"><!--parsing code-->
    <meta name="viewport" content="initial-scale=1.0"> <!--web mobile-->
    <link rel="stylesheet" href="heade.css">
</head>

<body>
    <h1>
        <div style="font-size:40px; text-align:center;">TRANSPORTASI</div>
        <hr width="50%" size="2" color="red">
    </h1>
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

        <script>
            var input = document.getElementById("search-box");
            var select = document.getElementById("options");
            var data = [
                "Stasiun Siantar",
                "Dolok Merangir",
                "Stasiun Kereta Api Baja Linggei",
                "Stasiun K.A. Sei Rampah",
                "Stasiun KA Galang",
                "Stasiun Kereta Api Perbaungan",
                "Stasiun Lubuk Pakam",
                "Terminal Amplas",
                "Terminal Bus Sumatera Transport",
                "Terminal Pinang Baris Medan",
                "Terminal Helvetiav",
                "Terminal Tanjung Gusta",
                "Pelabuhan Tigaraja / Tiga Raja Pier",
                "Pelabuhan Penyeberangan Balige",
                "Bandara Silangit International Airport",
                "Bandara Kualanamu International Airport",
                "Terminal Porsea",
                "Terminal Sidulang",
                "Terminal Sosor Saba Parapat",
                "Loket Sejahtera"
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

                $sql = "SELECT * FROM tb_transportasi";
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

                var button2 = document.createElement("button");
                button2.innerHTML = "Penginapan";
                map.controls[google.maps.ControlPosition.TOP_CENTER].push(button2);
                button2.addEventListener("click", function() {
                    window.location.href = "tb_penginapan.php";
                });

                var button4 = document.createElement("button");
                button4.innerHTML = "Rumah Makan";
                map.controls[google.maps.ControlPosition.TOP_CENTER].push(button4);
                button4.addEventListener("click", function() {
                    window.location.href = "tb_rumahmakan.php";
                });

                var button5 = document.createElement("button");
                button5.innerHTML = "Souvenir";
                map.controls[google.maps.ControlPosition.TOP_CENTER].push(button5);
                button5.addEventListener("click", function() {
                    window.location.href = "tb_souvenir.php";
                });

                var button1 = document.createElement("button");
                button1.innerHTML = "Destinasi";
                map.controls[google.maps.ControlPosition.TOP_CENTER].push(button1);
                button1.addEventListener("click", function() {
                    window.location.href = "tb_wisata.php";
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
                                '<b><h1><b>Keterangan :</h1></b>' +
                                '<b><h1>' + locations[i][0] + '</h1><b>' +
                                '<h3>' + locations[i][4] + '</h3>' +
                                '<h1> Gambar </h1>' +
                                '<img src="' + locations[i][5] + '" style="width: 390px; height: 250px;">' +
                                '<h3> Rating </h3>' +
                                '<input type="checkbox" id="star1"><label for="star1"></label>' +
                                '<input type="checkbox" id="star2"><label for="star2"></label>' +
                                '<input type="checkbox" id="star3"><label for="star3"></label>' +
                                '<input type="checkbox" id="star4"><label for="star4"></label>' +
                                '<input type="checkbox" id="star5"><label for="star5"></label>' +
                                '<h3> Komentar </h3>' +
                                '<textarea id="comment"></textarea>' +
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