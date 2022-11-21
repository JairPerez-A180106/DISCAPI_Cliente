<?php
$id=$_POST['DenuID'];
$sh=curl_init();
curl_setopt($sh,CURLOPT_URL, "https://www.discapi.somee.com/Denuncias/ObtenerDenuID/?DenuID=$id");
curl_setopt($sh,CURLOPT_RETURNTRANSFER, TRUE);
$respuesta=curl_exec($sh);
curl_close($sh);

echo $respuesta;
?>