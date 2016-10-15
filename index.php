<!DOCTYPE html>
<html>
<head>
	<title>Map</title>
	<link rel="stylesheet" href="lib/leaflet.css" />
	<script src="hlib/leaflet.js"></script>
</head>
<body>

	<div id="mapid"></div>

	<script type="text/javascript">
		var mymap = L.map('mapid').setView([51.505, -0.09], 13);
		var OpenStreetMap = L.tileLayer('http://{s}.tile.openstreetmap.se/hydda/full/{z}/{x}/{y}.png', { maxZoom: 15, minZoom: 5, attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>' }).addTo(mymap);
	</script>
	
</body>
</html>