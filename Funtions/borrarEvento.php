<?php
$id=$_GET['EvenID'];

$sh=curl_init();
curl_setopt($sh, CURLOPT_URL, "https://www.discapi.somee.com/Eventos/BorrarEven?EvenID=$id");
curl_setopt($sh, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($sh, CURLOPT_RETURNTRANSFER, true);
$respuesta=curl_exec($sh);
curl_close($sh);

echo $respuesta;
?>