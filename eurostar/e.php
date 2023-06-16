<?php

$address = 'Manantial 97, Futurama Monterrey, 37180 León, Gto.'; // Dirección a geocodificar

// Codificar la dirección en formato URL seguro
$encodedAddress = urlencode($address);

// Construir la URL de solicitud a Nominatim
$url = "https://nominatim.openstreetmap.org/search?format=json&q={$encodedAddress}";

// Realizar la solicitud HTTP a Nominatim
$response = file_get_contents($url);

// Decodificar la respuesta JSON
$data = json_decode($response);

// Verificar si se encontraron resultados
if (!empty($data)) {
    // Obtener la latitud y longitud del primer resultado
    $latitude = $data[0]->lat;
    $longitude = $data[0]->lon;

    // Imprimir los resultados
    echo "Latitud: {$latitude}<br>";
    echo "Longitud: {$longitude}<br>";
} else {
    // No se encontraron resultados
    echo "No se encontró la latitud y longitud para la dirección especificada.";
}
?>
