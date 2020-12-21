<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Página de inicio</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>

	<header></header>
	<nav>
		<a href="index.html">Inicio</a>
		<a href="empresa.html">Empresa</a>
		<a href="servicios.html">Servicios</a>
		<a href="portfolio.html">Portfolio</a>
		<a href="contacto.html">Contacto</a>
	</nav>
	<main>

		<h1>Formulario de contacto</h1>

		<div id="mensaje">
<?php
	// capturamos datos enviados por el form
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$comentarios = $_POST['comentarios'];

	// configuramos datos de email a enviar
	$destinatario = 'direccion@email';
	$asunto = 'Email enviado desde mi sitio';
	$cuerpo = 'Nombre: '.$nombre.'<br>';
	$cuerpo .= 'Email: '.$email.'<br>';
	$cuerpo .= 'Comentarios: '.$comentarios;

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

	// enviamos el email
	mail($destinatario, $asunto, $cuerpo, $headers);

?>

	Gracias por su consulta, nos contactaremos a la brevedad.
	
		</div>


	</main>
	<footer>
		© 1996-2020, Pandemic Warriors Inc.
	</footer>
	
</body>
</html>