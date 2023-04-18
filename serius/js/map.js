function initMap() {
  var myLatLng = { lat: 2.2375, lng: 99.0372 };
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 12,
    center: myLatLng,
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: "Hello World!",
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
function initMap() {
  const center = { lat: 2.935128336280701, lng: 99.00441168103137 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 8,
    center,
    mapId: "4504f8b37365c3d0",
  });

  for (const property of properties) {
    const advancedMarkerView = new google.maps.marker.AdvancedMarkerView({
      map,
      content: buildContent(property),
      position: property.position,
      title: property.description,
    });
    const element = advancedMarkerView.element;

    ["focus", "pointerenter"].forEach((event) => {
      element.addEventListener(event, () => {
        highlight(advancedMarkerView, property);
      });
    });
    ["blur", "pointerleave"].forEach((event) => {
      element.addEventListener(event, () => {
        unhighlight(advancedMarkerView, property);
      });
    });
    advancedMarkerView.addListener("click", (event) => {
      unhighlight(advancedMarkerView, property);
    });
  }
}

function highlight(markerView, property) {
  markerView.content.classList.add("highlight");
  markerView.element.style.zIndex = 1;
}

function unhighlight(markerView, property) {
  markerView.content.classList.remove("highlight");
  markerView.element.style.zIndex = "";
}

function buildContent(property) {
  const content = document.createElement("div");

  content.classList.add("property");
  content.innerHTML = `
      <div class="icon">
          <i aria-hidden="true" class="fa fa-icon fa-${property.type}" title="${property.type}"></i>
          <span class="fa-sr-only">${property.type}</span>
      </div>
      <div class="details">
          <div class="price">${property.price}</div>
          <div class="address">${property.address}</div>
          <div class="features">
          <div>
              <i aria-hidden="true" class="fa fa-bed fa-lg bed" title="bedroom"></i>
              <span class="fa-sr-only">bedroom</span>
              <span>${property.bed}</span>
          </div>
          <div>
              <i aria-hidden="true" class="fa fa-bath fa-lg bath" title="bathroom"></i>
              <span class="fa-sr-only">bathroom</span>
              <span>${property.bath}</span>
          </div>
          <div>
              <i aria-hidden="true" class="fa fa-ruler fa-lg size" title="size"></i>
              <span class="fa-sr-only">size</span>
              <span>${property.size} ft<sup>2</sup></span>
          </div>
          </div>
      </div>
      `;
  return content;
}

const properties = [
  {
    address: "215 Emily St, MountainView, CA",
    description: "Single family house with modern design",
    price: "$ 3,889,000",
    type: "home",
    bed: 5,
    bath: 4.5,
    size: 300,
    position: { lat: 2.694433262223637, lng: 98.81978988647461 },
  },
  {
    address: "108 Squirrel Ln &#128063;, Menlo Park, CA",
    description: "Townhouse with friendly neighbors",
    price: "$ 3,050,000",
    type: "building",
    bed: 4,
    bath: 3,
    size: 200,
    position: { lat: 2.6773717191046456, lng: 98.8538646697998 },
  },
  {
    address: "100 Chris St, Portola Valley, CA",
    description: "Spacious warehouse great for small business",
    price: "$ 3,125,000",
    type: "warehouse",
    bed: 4,
    bath: 4,
    size: 800,
    position: { lat: 2.5572055152613697, lng: 98.91317367553711 },
  },
];

window.initMap = initMap;
