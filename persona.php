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
$pepe->nombre='Jos� de la Cuadra';
$pepe->edad=33;

$pepe->moverse('Universidad');
$pepe->estudiar('Inform�tica');
$pepe->moverse();

$maria=new persona();
$maria->nombre='Mar�a L�pez';
$maria->edad=31;

$maria->moverse('Universidad');
$maria->estudiar('Matem�ticas');
$maria->moverse();

echo 'Hola: ' . $pepe->nombre . '<hr/>';
echo 'Hola: ' . $maria->nombre . '<br/>';
echo '<strong>Saludos por KLEBER POSLIGUA</strong>';