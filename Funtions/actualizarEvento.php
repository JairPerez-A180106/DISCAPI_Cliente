<?php
$fields = array('Id' => $_POST['Id'], 'Fecha' => $_POST['Fecha'],
'Tema' => $_POST['Tema'], 'Tipo' => $_POST['Tipo'],
'Lugar' => $_POST['Lugar'], 'Acceso' => $_POST['Acceso']);
$fields_string = http_build_query($fields);

$sh=curl_init();
curl_setopt($sh,CURLOPT_URL, "https://www.discapi.somee.com/Eventos/ActualizarEven");
curl_setopt($sh, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($sh, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($sh, CURLOPT_RETURNTRANSFER, true);

$respuesta=curl_exec($sh);
curl_close($sh);

echo $respuesta;
?>