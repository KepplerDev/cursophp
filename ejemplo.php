<?php

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

if($edad >= 18){
	$mensaje = "Puedes acceder";
}else{
	$mensaje = "No puedes acceder";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
</head>
<body>
	<form action="ejemplo.php" method="post">
		<input type="text" placeholder="Ingresa tu nombre aqui: " id="nombre" name="nombre">
		<input type="number" placeholder="ingresa tu edad aqui: " id="edad" name="edad">
		<input type="submit" value="enviar">
	</form>
	<br>
	
	<h3>Tu nombre es: <?php echo $nombre ?></h3>
	<h3>Tu edad es: <?php echo $edad; ?></h3>
	<h3>Mensaje: <?php echo $mensaje; ?></h3>
</body>
</html>