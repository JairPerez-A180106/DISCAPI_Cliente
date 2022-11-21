<?php
$fields = array('Id' => $_POST['Id'],'NombreComp' => $_POST['NombreComp'],
'Calle' => $_POST['Calle'], 'Colonia' => $_POST['Colonia'],
'Localidad' => $_POST['Localidad'], 'Municipio' => $_POST['Municipio'],
'Entidad' => $_POST['Entidad'], 'CP' => $_POST['CP'],
'Telefono' => $_POST['Telefono'], 'Email' => $_POST['Email'],
'Situacion' => $_POST['Situacion'], 'Estatus' => $_POST['Estatus']);
$fields_string = http_build_query($fields);

$sh=curl_init();
curl_setopt($sh, CURLOPT_URL, "https://www.discapi.somee.com/Denuncias/ActualizarDenu");
curl_setopt($sh, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($sh, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($sh, CURLOPT_RETURNTRANSFER, true);

$respuesta=curl_exec($sh);
curl_close($sh);

echo $respuesta;
?>