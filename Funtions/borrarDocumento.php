<?php
$id=$_GET['DocuID'];

$sh=curl_init();
curl_setopt($sh, CURLOPT_URL, "https://www.discapi.somee.com/Documentos/BorrarDoc?DocID=$id");
curl_setopt($sh, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($sh, CURLOPT_RETURNTRANSFER, true);
$respuesta=curl_exec($sh);
curl_close($sh);

echo $respuesta;
?>