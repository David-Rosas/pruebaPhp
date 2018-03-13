<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	$edad = [3];
	$edad[0] = 15;
	$edad[1] = 2.1;
	$edad[2] = "aqui va el tercero";

	echo " el primer ejemplo de locura ".$edad[0]."<br>";
	echo " el primer ejemplo de locura ".$edad[1]."<br>";
	echo " el primer ejemplo de locura ".$edad[2]."<br>";
	?>
	
<?php
	$i = 0;
	while($i <= 3){
	if($edad[0] >= 18){
		echo " eres maypr de edad Bievenidos <br>";
	}
	else if($edad[0] >= 15){
		echo "solo podras recibir noticias <br>";
		
	}
	else{
		echo "eres menor de edad prohibido el acceso <br>";
	}
		$i++;
	}	
	?>
	<form method="post" action="receptionPost.php">
		Usuario: <input type="text" name="user"></br>
	Contraseña: <input type="password" name="pwd"></br>
	<input type="submit" value="Enviar">
	</form>
	
</body>
</html>