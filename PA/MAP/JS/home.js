//section
let heroSection = document.getElementById("hero-section");
let bg = document.getElementById("bg");
let lake = document.getElementById("lake");
let road = document.getElementById("road");
let text = document.getElementById("text");

let heroSectionHeight = heroSection.clientHeight;
let heroSectionTop = heroSection.offsetTop;

window.addEventListener("scroll", function () {
  var value = window.scrollY;

  if (value > heroSectionTop + heroSectionHeight) {
    return;
  }

  if (value > heroSectionTop) {
    value = value - heroSectionTop;
  } else {
    value = 0;
  }

  bg.style.top = value * 0.5 + "px";
  lake.style.top = -value * 0.5 + "px";
  road.style.top = value * 0.5 + "px";
  text.style.top = value * 0.1 + "vh";
});
//search-bar to side-bar
// mendapatkan elemen search bar dan sidebar
const searchBar = document.getElementById("searchBar");
const sidebar = document.getElementById("sidebar");

// menambahkan event listener untuk tombol pencarian
searchBar.addEventListener("click", () => {
  // toggle kelas CSS pada elemen sidebar
  sidebar.classList.toggle("show");
});

//memanggil map
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
