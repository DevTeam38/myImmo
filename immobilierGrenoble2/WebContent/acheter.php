<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="lib/css/cssMenu5.css" rel="stylesheet" type="text/css" />
<link href="lib/css/cssLogin3.css" rel="stylesheet" type="text/css" />
<link href="lib/css/cssFiltre.css" rel="stylesheet" type="text/css" />
<link href="lib/css/cssGoogleMaps.css" rel="stylesheet" type="text/css" />
<script src="lib/js/googleMaps.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfN__LlCd4_4jC20o2UAd415jDnsDHxe8&callback=initMap"></script>

  
<title>Acheter</title>
</head>

<body onload="initialize()">
	<header>
		<div id="backgroundColorWebSite">
			<div id="img1NoVisible">

			<?php include ("includes/menu.php");?>	
			<?php include ("includes/filtre.php");?>	
			<div id="mapContainer" data-sticky data-offset="95"><div id="annonces"></div><div id="map_canvas"></div></div>
			</div>	
			</div>
	</header>
	<footer>
		<div id="piedDePage"></div>
	</footer>
	<script src="lib/js/wave.js"></script>
	<script src="lib/js/fixed.js"></script>
	<script src="lib/js/voirMdp.js"></script>
</body>
</html>