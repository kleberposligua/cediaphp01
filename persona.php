<?php

class persona{

	 var $nombre;
	 var $edad;
	 
	 function comer(){
		
	 }
	 function moverse($destino="casa"){
	 
	 }
	 function estudiar($asignatura){
	
	 }
}

//instancias
$pepe=new persona();
$pepe->nombre='José de la Cuadra';
$pepe->edad=33;

$pepe->moverse('Universidad');
$pepe->estudiar('Informática');
$pepe->moverse();

$maria=new persona();
$maria->nombre='María López';
$maria->edad=31;

$maria->moverse('Universidad');
$maria->estudiar('Matemáticas');
$maria->moverse();

echo 'Hola: ' . $pepe->nombre . '<hr/>';
echo 'Hola: ' . $maria->nombre . '<br/>';
echo '<strong>Saludos</strong>';