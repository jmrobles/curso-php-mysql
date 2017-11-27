<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Cambiar título -->
	<title>PLANTILLA FORMULARIO</title>
</head>
<body>
	<!-- Cambiar título -->
	<h1>TITULO DEL FORMULARIO</h1>	
	<form action="#" method="POST">
		<!-- Introducir los campos del formulario -->
		<!-- Importante, en cada campo debe ir la etiqueta "name" 
			 que será el nombre que PHP necesita para obtener los datos
		-->

		<!-- Ejemplos:
			Texto: <input type="text" name="nombre">
		-->
		<!-- Botón de Enviar -->
		<input type="submit">
	</form>
	<?php
		// Aqui entra el procesamiento de PHP
		// Lo primero es comprobar si la petición es
		// GET o POST
		// Lo normal es sólo hacer cosas cuando sea
		// POST
		// Con la variable array asociativo "$_SERVER"
		// podemos ver el tipo de solicitud que es
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			// Aqui viene el código a ejecutar cuando la
			// solicitud es un POST, es decir, el usuario
			// ha pulsado sobre el botón "Enviar" y llegan
			// los datos al servidor

			// Los datos se encuentran dentro de la variable predefinida
			// "$_POST" (que es otro array asociativo)
			// Para acceder a los campos del formulario, hay que indica el
			// nombre del campo.
			// Si por ejemplo el formulario incluye un campo de texto con nombre
			// "edad" (<input type="number" name="edad">), se accederá con
			// $_POST["edad"]

			// Lo primero es comprobar si el dato no es vacio
			// Lo haremos usando la función "empty"

			// CAMBIAR nombre_campo por el nombre del campo que sea
			if (!empty($_POST["nombre_campo"])) {
				// Procesar los datos

				// Para sacar código HTML, usamos "echo"

				// En el caso de abajo, mostramos el campo tal cual nos llega
				echo $_POST["nombre_campo"];
			} else {
				// Podemos mostrar mensaje al usuario
				// advirtiendo que está vacio
				echo "El campo está vacio";
			}
		}
	?>
</body>
</html>