// Tambahkan fungsi untuk toggle sidebar
var sidebarToggle = document.getElementById("sidebar-toggle");
var sidebar = document.getElementById("sidebar");

sidebarToggle.addEventListener("click", function () {
  sidebar.classList.toggle("open");
});

// Tambahkan event click untuk menu informasi lokasi
var locationInfoBtn = document.getElementById("location-info-btn");

locationInfoBtn.addEventListener("click", function () {
  sidebar.classList.add("open");
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

var bandaraSilangit = new google.maps.Marker({
  position: { lat: 2.2609, lng: 98.9908 },
  map: map,
});
var bandaraKualanamu = new google.maps.Marker({
  position: { lat: 3.6363, lng: 98.8633 },
  map: map,
});

var currentRoute;

function getRoute(startLat, startLng, endLat, endLng) {
  var url =
    "https://api.openrouteservice.org/v2/directions/driving-car?api_key=AIzaSyAW7zOO9RsrHaI3KGZus3H8pUiHb9bNzmk&start=" +
    startLng +
    "," +
    startLat +
    "&end=" +
    endLng +
    "," +
    endLat;
  fetch(url)
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      if (currentRoute) {
        currentRoute.setMap(null);
      }
      var polyline = new google.maps.Polyline({
        path: data.features[0].geometry.coordinates.map(function (coords) {
          return { lat: coords[1], lng: coords[0] };
        }),
        strokeColor: "blue",
        strokeOpacity: 0.8,
        strokeWeight: 2,
      });
      polyline.setMap(map);
      var bounds = new google.maps.LatLngBounds();
      polyline.getPath().forEach(function (latLng) {
        bounds.extend(latLng);
      });
      map.fitBounds(bounds);
      currentRoute = polyline;
    });
}

function onLocationFound(e) {
  var userLat = e.latLng.lat();
  var userLng = e.latLng.lng();

  var userMarker = new google.maps.Marker({
    position: e.latLng,
    map: map,
    title: "You are here",
  });
  userMarker.setMap(map);

  if (bandaraKualanamu.getPosition() && bandaraSilangit.getPosition()) {
    getRoute(
      bandaraKualanamu.getPosition().lat(),
      bandaraKualanamu.getPosition().lng(),
      bandaraSilangit.getPosition().lat(),
      bandaraSilangit.getPosition().lng()
    );
  } else {
    alert("Failed to get airport locations");
  }
}

function onLocationError(e) {
  alert(e.message);
}

var locationBtn = document.getElementById("location-btn");

locationBtn.addEventListener("click", function () {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(onLocationFound, onLocationError);
  } else {
    alert("Geolocation is not supported by this browser.");
  }
});

getRoute();
