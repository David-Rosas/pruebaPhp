<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	include("basedatos.php");
$nombre = $_POST['empleado_nombre'];
$edad= $_POST['empleado_edad'];


	if(!empty($nombre) && !empty($edad){
		$conexionbd = conectar_bd();
     $query = "INSERT INTO empleado ('nombre','edad') 
     VALUES ('".$nombre."','".$edad."')";
	$exito = mysql_query($query.$conexionbd);
	
		     if($exito)
	         {
	            header('Location:Listaempleados.php');
	         }
	      else
	         {
	         header('Location:nuevoempleado.php');
	         }
	}
	
	else
	{
	header('Location:nuevoempleado.php');
	}

	?>

</body>
</html>