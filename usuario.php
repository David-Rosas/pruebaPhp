<?php
/*
¿que es una clase?
Es un molde para realizar un objeto

Atributos:
Privados

Metodos:
Privado, Publicos y Protected
*/

class Usuario{
//atributos
private $nombre;
private $clave;	


 function __contruct(){
	$this->nombre = "";
	$this->clave = "";

}
 public function setNombre($nom){
	$this->nombre = $nom;
}
 public function getNombre(){
	return $this->nombre;
}

public function setClave($clav){
	$this->clave = $clav;
}

public function getclave(){
	return $this->clave;
}
public function saludar(){
	echo "Hello";
}
}
?>