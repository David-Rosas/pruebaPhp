<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	include("basedatos.php");
	
	$conexionbd = conectar_bd();
	echo $conexionbd;
	mysql_close($conexionbd);
	?>
</body>
</html>