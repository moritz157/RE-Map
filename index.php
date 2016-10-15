<!DOCTYPE html>
<html>
<head>
	<title>Map</title>
	<link rel="stylesheet" href="leaflet/leaflet.css" />
	<link rel="stylesheet" href="style.css" />
	<script src="leaflet/leaflet.js"></script>
</head>
<body>

	
<div id="map"></div>

	<script type="text/javascript">
		var map = L.map('map').setView([51.505, -0.09], 13);
		var OpenStreetMap = L.tileLayer('http://{s}.tile.openstreetmap.se/hydda/full/{z}/{x}/{y}.png', { maxZoom: 15, minZoom: 5, attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>' }).addTo(map);
	</script>

</body>
</html>