<?php
include("basedatos.php");
$conexionbd = conectar_bd();
$query = "SELECT id,nombre,edad FROM empleado:";
$resultado = mysql_query($query.$conexionbd);
$mysql_close($conexionbd);
?>

<html>
<head></head>
<bodY>
<h1>Lista empleado</h1>
<ul>
    <?php
    while($registro = mysql_fetch_assoc($resultado)){
        echo'<li>'.$registro['nombre'].'('.$registro['edad'].'años)';
        echo <a href="modificarempleado.php?empleadoid='.$registro['id'].'">modificar</a></li>';
        echo <a href="eliminarempleado.php?empleadoid='.$registro['id'].'">eliminar</a></li>';
    }
    ?>
</ul>
</bodY>
</html>