<?php
$fields = array('Fecha' => $_POST['Fecha'], 'Tema' => $_POST['Tema'],
'Tipo' => $_POST['Tipo'], 'Lugar' => $_POST['Lugar'], 'Acceso' => $_POST['Acceso']);
$fields_string = http_build_query($fields);
$sh=curl_init();
curl_setopt($sh,CURLOPT_URL, "https://www.discapi.somee.com/Eventos/NuevoEven");
curl_setopt($sh, CURLOPT_POST, 1);
curl_setopt($sh, CURLOPT_POSTFIELDS, $fields_string );
$respuesta=curl_exec($sh);
curl_close($sh);

echo $respuesta;
?>