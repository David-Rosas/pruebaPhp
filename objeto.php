<!DOCTYPE html>
<html>
<head>
	<title>Objeto</title>
</head>
<body>
<h1>Objeto</h1>

<?php
//incluir usuario
include "usuario.php";

$persona1 = new Usuario();
$persona1->setNombre("Mario");
$persona1->setClave("123");


echo "el nombre del usuario es ". $persona1->getNombre()."<br>";
echo "el nombre del usuario es ". $persona1->getClave()."<br>";

$persona2 = new Usuario();
$persona2->setNombre("julia");
$persona2->setClave("5462");

echo "el nombre del usuario es ". $persona2->getNombre()."<br>";
echo "el nombre del usuario es ". $persona2->getClave()."<br>";
echo "el usuario ". $persona2->getNombre()." dice ".$persona2->saludar();


?>



</body>
</html>