function initMap() {
  // koordinat lokasi Bandara Silangit
  var silangit = { lat: 2.243784, lng: 98.991619 };
  // koordinat lokasi Bandara Kualanamu
  var kualanamu = { lat: 3.642381, lng: 98.885165 };
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
  // menambahkan polyline yang menghubungkan dua marker
  var flightPath = new google.maps.Polyline({
    path: [silangit, kualanamu],
    geodesic: true,
    strokeColor: "#FF0000",
    strokeOpacity: 1.0,
    strokeWeight: 2,
  });
  flightPath.setMap(map);
}

// memanggil fungsi initMap saat halaman HTML selesai dimuat
google.maps.event.addDomListener(window, "load", initMap);

function initMap() {
  var sumutLatLng = { lat: 2.2509, lng: 99.0395 }; // koordinat Sumatera Utara
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 9, // zoom level
    center: sumutLatLng, // titik tengah map
    restriction: {
      latLngBounds: {
        north: 4.6483, // batas utara Sumatera Utara
        south: 0.7893, // batas selatan Sumatera Utara
        east: 100.9198, // batas timur Sumatera Utara
        west: 97.8825, // batas barat Sumatera Utara
      },
    },
  });

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
  // Menambahkan event listener pada map
  map.addListener("click", (event) => {
    // Membuat marker pada titik yang di-klik
    var marker = new google.maps.Marker({
      position: event.latLng,
      map: map,
      title: "Kamu mengklik di sini!",
    });
  });

  var marker = new google.maps.Marker({
    position: sumutLatLng,
    map: map,
    title: "Sumatera Utara",
  });
}
