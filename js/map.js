// [START maps_map_simple]
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 24.866438410698734, lng: 67.07104967337933 },
    zoom: 8,
  });
}
// [END maps_map_simple]