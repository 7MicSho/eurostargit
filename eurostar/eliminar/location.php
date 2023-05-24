<!DOCTYPE html>
<html>
<head>
	<title>Obtener ubicación del dispositivo</title>
	<script>
		function getLocation(){
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			} else {
				alert("Tu navegador no soporta geolocalización.");
			}
		}
		function showPosition(position) {
			var lat = position.coords.latitude;
			var lng = position.coords.longitude;
			document.getElementById("latitud").value = lat;
			document.getElementById("longitud").value = lng;
		}
	</script>
</head>
<body onload="getLocation()">
	<h1>Obtener ubicación del dispositivo</h1>
	<form>
		<label for="latitud">Latitud:</label>
		<input type="text" id="latitud" name="latitud"><br>
		<label for="longitud">Longitud:</label>
		<input type="text" id="longitud" name="longitud">
	</form>
</body>
</html>
