var map;

function initMap() {
	// Menentukan koordinat awal peta
	var myLatLng = {lat: -6.21462, lng: 106.84513};

	// Membuat objek peta baru
	map = new google.maps.Map(document.getElementById('map'), {
		center: myLatLng,
		zoom: 13
	});

	// Menambahkan marker pada lokasi yang ditentukan
	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		title: 'Kantor Saya'
	});

	// Menambahkan event listener pada marker
	marker.addListener('click', function() {
		alert('Anda mengklik marker!');
	});
}
