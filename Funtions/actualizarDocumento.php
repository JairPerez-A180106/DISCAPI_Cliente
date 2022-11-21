<?php
$fields = array('Id' => $_POST['Id'], 'Fecha' => $_POST['Fecha'],
'Tipo' => $_POST['Tipo'], 'Nombre' => $_POST['Nombre'],
'Sinopsis' => $_POST['Sinopsis'], 'Categoria' => $_POST['Categoria'],
'Temas' => $_POST['Temas']);
$fields_string = http_build_query($fields);
$sh=curl_init();
curl_setopt($sh,CURLOPT_URL, "https://www.discapi.somee.com/Documentos/ActualizarDoc");
curl_setopt($sh, CURLOPT_PUT, 1);
curl_setopt($sh, CURLOPT_PUTFIELDS, $fields_string );
$respuesta=curl_exec($sh);
curl_close($sh);

echo $respuesta;
?>