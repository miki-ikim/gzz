<?Php
  require '../../../libs/_admin-header.php';
  require '../../../libs/_getJSON.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add a default marker to a web map</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link rel="stylesheet" href="../../styles/style_db.css">
    <link rel="stylesheet" href="../../styles/in.css">
<link href="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script>
<style>
body { margin: 0; padding: 0; }
#map {  position: absolute; top: 0; bottom: 0; width:30%; }
</style>
</head>
<body>
<button style="float:right;" onclick="getLocation()">Try It</button>


<p id="demo" style="float:right;"></p>
<div id="map"></div>

<script>
const x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}

mapboxgl.accessToken = 'pk.eyJ1IjoibWlraWlraW0iLCJhIjoiY2wzYnRremN2MDBsdDNqcnhvcDFhNTY5aCJ9.EoI7zg7Zcm1fCaDrR342Fg';
const map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [38.801076,9.019405],
zoom: 8
});
 
// Create a default Marker and add it to the map.
const marker1 = new mapboxgl.Marker()
.setLngLat([38.801076,9.019405])
.addTo(map);
 
</script>
  

<link href="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script>

</body>
</html>