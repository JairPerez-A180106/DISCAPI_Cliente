<?php

$sh=curl_init();
curl_setopt($sh,CURLOPT_URL, "https://www.discapi.somee.com/Documentos/ObtenerDoc/");
curl_setopt($sh,CURLOPT_RETURNTRANSFER, TRUE);
$respuesta=curl_exec($sh);
curl_close($sh);

echo $respuesta;
?>