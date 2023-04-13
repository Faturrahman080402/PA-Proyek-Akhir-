// Membuat peta
var map = L.map("map").setView([2.246, 99.001], 8);

// Menambahkan layer Google Maps
L.tileLayer(
  "https://{s}.googleapis.com/maps/vt?hl=id&x={x}&y={y}&z={z}&apikey=AIzaSyAW7zOO9RsrHaI3KGZus3H8pUiHb9bNzmk",
  {
    attribution: "© Google Maps contributors",
  }
).addTo(map);

// Membuat layer marker
var markerLayer = L.layerGroup().addTo(map);

// Fungsi untuk menampilkan popup pada marker
function showPopup(latlng) {
  // Mengambil data terkait lokasi dari API untuk wilayah Sumatera Utara
  fetch(
    "https://api.example.com/location?lat=" +
      latlng.lat +
      "&lng=" +
      latlng.lng +
      "&region=sumatera-utara"
  )
    .then((response) => response.json())
    .then((data) => {
      // Menampilkan popup dengan informasi lokasi
      L.popup()
        .setLatLng(latlng)
        .setContent("<b>" + data.name + "</b><br>" + data.description)
        .openOn(map);
    });
}

// Menambahkan event listener untuk klik pada peta
map.on("click", function (e) {
  // Menghapus semua marker sebelumnya
  markerLayer.clearLayers();

  // Menambahkan marker pada titik yang diklik
  var marker = L.marker(e.latlng);
  markerLayer.addLayer(marker);

  // Menampilkan popup dengan informasi terkait lokasi yang diklik
  showPopup(e.latlng);
});
