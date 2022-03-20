<?php
	
	$datos = json_decode(file_get_contents("php://input"));
	
	$nombre_cliente = $datos->nombre;
	$edad_cliente = $datos->edad;

	echo $nombre_cliente . " --- " . $edad_cliente;

?>