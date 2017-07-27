<!--Enviar Formulario-->
<?php
	$destino="josefa@linuxero.cl";
	$nombre=$_POST["nombre"];
	$correo=$_POST["correo"];
	$telefono=$_POST["telefono"];
	$mensaje=$_POST["mensaje"];
	$contenido="Nombre: " . $nombre . "/n Correo: " . $correo . "/n Telefono: " . $telefono . "/n Mensaje: " . $mensaje;
	mail($destino, "pagina web", $contenido);
	header("Location:formulario-enviado.html");
?>