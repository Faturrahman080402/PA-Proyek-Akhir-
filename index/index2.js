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

  function initMap() {
    var kualanamuLatLng = { lat: 3.6426, lng: 98.8853 }; // koordinat Bandara Kualanamu
    var silangitLatLng = { lat: 2.2769, lng: 98.9565 }; // koordinat Bandara Silangit
    var map = new google.maps.Map(document.getElementById("map"), {
      zoom: 9, // level zoom
      center: kualanamuLatLng, // titik tengah peta
      restriction: {
        latLngBounds: {
          north: 4.6483, // batas utara Sumatera Utara
          south: 0.7893, // batas selatan Sumatera Utara
          east: 100.9198, // batas timur Sumatera Utara
          west: 97.8825, // batas barat Sumatera Utara
        },
      },
    });

    // Menambahkan marker untuk Bandara Kualanamu
    var kualanamuMarker = new google.maps.Marker({
      position: kualanamuLatLng,
      map: map,
      title: "Bandara Kualanamu",
      icon: "https://maps.google.com/mapfiles/kml/shapes/airport.png",
    });

    // Menambahkan marker untuk Bandara Silangit
    var silangitMarker = new google.maps.Marker({
      position: silangitLatLng,
      map: map,
      title: "Bandara Silangit",
      icon: "https://maps.google.com/mapfiles/kml/shapes/airport.png",
    });

    reversePath.setMap(map);
  }

  // Menambahkan jalur lalulintas dari Kualanamu ke Silangit
  var directionsService = new google.maps.DirectionsService();
  var directionsRenderer = new google.maps.DirectionsRenderer({
    map: map,
    suppressMarkers: true,
  });
  directionsService.route(
    {
      origin: kualanamuLatLng,
      destination: silangitLatLng,
      travelMode: google.maps.TravelMode.DRIVING,
    },
    function (response, status) {
      if (status === google.maps.DirectionsStatus.OK) {
        directionsRenderer.setDirections(response);
      } else {
        window.alert("Directions request failed due to " + status);
      }
    }
  );

  // Menambahkan jalur lalulintas dari Silangit ke Kualanamu
  directionsService.route(
    {
      origin: silangitLatLng,
      destination: kualanamuLatLng,
      travelMode: google.maps.TravelMode.DRIVING,
    },
    function (response, status) {
      if (status === google.maps.DirectionsStatus.OK) {
        directionsRenderer.setDirections(response);
      } else {
        window.alert("Directions request failed due to " + status);
      }
    }
  );

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
