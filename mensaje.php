<?php

$destino = "octaviiom97@gmail.com";
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$mensaje=$_POST["mensaje"];
$contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje;

mail($destino,"Correo desde php",$contenido);

?>