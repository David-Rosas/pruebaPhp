<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
	function conectar_bd()
	{
		$servidor = "localhost";
		$nombrebd = "empleados";
		$usuario = "empresabd";
		$contrasena = "davidbd";
		
		$conexion = mysql_connect($servidor,$usuario,$contrasena);
		mysql_select_db($nombrebd,$conexion);
		return $conexion;
	}
	?>
<body>
</body>
</html>