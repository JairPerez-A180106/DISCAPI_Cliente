<?php
$fields = array('Id' => $_POST['Id'], 'NoInsidentes' => $_POST['NoInsidentes'],
'Tipo' => $_POST['Tipo'], 'Lugar' => $_POST['Lugar'],
'Pais' => $_POST['Pais'], 'Fecha' => $_POST['Fecha']);
$fields_string = http_build_query($fields);

$sh=curl_init();
curl_setopt($sh,CURLOPT_URL, "https://www.discapi.somee.com/Estadisticas/ActualizarEstats");
curl_setopt($sh, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($sh, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($sh, CURLOPT_RETURNTRANSFER, true);

$respuesta=curl_exec($sh);
curl_close($sh);

echo $respuesta;
?>