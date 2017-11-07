<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Justificantes</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<section class="content">
		<form action="justificante_enviado.php" method="post">
			<!-- <input type="" name="id"> -->
			<input class="input_class" type="text" name="matricula" placeholder="Matricula" minlength="7" maxlength="7"><br>
			<input class="input_class" type="text" name="carrera" placeholder="Carrera"><br>
			<input class="input_class" type="text" name="razon" placeholder="Motivo por el cual no puede asistir">
			<input class="input_class" type="text" name="fecha" placeholder="Fecha: dd/mm/aaaa"><br>
			de las <input class="input_date" type="text" name="hora1" placeholder="Hora de salida: 00:00am/pm"> a las <input class="input_date" type="text" name="hora2" placeholder="Hora de regreso: 00:00am/pm"><br>
			<input class="input_button" type="submit" name="guardar">
		</form>
	</section>

	



</body>
</html>