<?php
$fields = array('NoInsidentes' => $_POST['NoInsidentes'], 'Tipo' => $_POST['Tipo'],
'Lugar' => $_POST['Lugar'], 'Pais' => $_POST['Pais'], 'Fecha' => $_POST['Fecha']);
$fields_string = http_build_query($fields);
$sh=curl_init();
curl_setopt($sh,CURLOPT_URL, "https://www.discapi.somee.com/Estadisticas/NuevaEstats");
curl_setopt($sh, CURLOPT_POST, 1);
curl_setopt($sh, CURLOPT_POSTFIELDS, $fields_string );
$respuesta=curl_exec($sh);
curl_close($sh);

echo $respuesta;
?>