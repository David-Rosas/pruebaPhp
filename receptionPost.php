<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
	$usuario = $_POST['user'];
	$password = $_POST['pwd'];
	
	$resultado=verificarDatos($usuario, $password);
	if($resultado==true){
		echo "Bienvenido";
	}
	else{
		echo "Datos incorrectos";
	}
	function verificarDatos($Usuario, $Contrasena){
		if($Usuario=="Administrador" && $Contrasena=="admin1234"){
			return true;
		}
		else{
			return false;
		}
	}
	?>
<body>
</body>
</html>