<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>Justificante enviado</title>
</head>
<body>
	<?php 
	include('conexion.php');
	// include('index.php');

	// error_reporting(0);
	$matricula 	= $_POST['matricula'];
	$carrera	= $_POST['carrera'];
	$razon		= $_POST['razon'];
	$fecha		= $_POST['fecha'];
	$hora1		= $_POST['hora1'];
	$hora2		= $_POST['hora2'];
	$guardar	= $_POST['guardar'];

	$query2 = "SELECT * FROM alumnos";
	$ejecutar2 = $conexion->query($query2);
	foreach ($ejecutar2 as $dato)
	$con = 0;
	{
		if ($matriculaPost == $dato->$matricula)
		{
			$con++;
		}
	}

	

	if (isset($guardar))
	{
		$sql="INSERT INTO alumnos VALUES('$matricula', '$carrera', '$razon', '$fecha', '$hora1', '$hora2')";
		if ($ejecutar=$conexion->query($sql))
		{
			echo "se ha guardado correctamente";
		}
		else
		{
			echo "no se guardo";
		}
	}


	// if ($traer_matricula<=2)
	// {
	// 	echo 'esta matricula no se puede usar';
	// }
	// else
	// 	{
	// 		echo "SE HA GUARDADO CORRECTAMENTE";
	// 	}



		// for ($matricula1=0; $matricula1<3;) 
		// 	{
		// 		if ($matricula1<3) 
		// 		{	
		// 			echo " Esta matricula si puede ser utilizada";
		// 			$matricula++;
		// 		}
		// 		else
		// 		{
		// 			echo "La matricula " .$matricula." no puede ser utilizada debido a que ya alcanzo el limite de justificantes"."<br>" ;
		// 		}
		// 	}

		// if ($matricula1 <= 3)
		// {
		// 	for ($matricula1=0; $matricula1<3; $matricula1++)
		// 	{ 
		// 		echo "Usted puede usar esta matricula";
		// 	}
		// }
		// else
		// {
		// 	echo "La matricula NO es menor que 3";
		// }

	?>
</body>
</html>