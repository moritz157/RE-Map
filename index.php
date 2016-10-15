<!DOCTYPE html>
<html>
<head>
	<title>Map</title>
	<link rel="stylesheet" href="leaflet/leaflet.css" />
	<link rel="stylesheet" href="style.css" />
	<script src="leaflet/leaflet-src.js"></script>
</head>
<body>

	
<div id="map"></div>

	<script type="text/javascript">
		var latitude = 52.495271;
		var longitude = 13.299706;
		var map = L.map('map').setView([latitude, longitude], 13);
		var OpenStreetMap = L.tileLayer('http://{s}.tile.openstreetmap.se/hydda/full/{z}/{x}/{y}.png', { maxZoom: 15, minZoom: 5, attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>' }).addTo(map);
		L.marker([latitude, longitude])
		.bindPopup("<b>Hello world!</b><br>I am a popup.")
		.openPopup()
		.addTo(map);
	</script>

</body>
</html>