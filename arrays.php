/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
<?php

$notas = array
			(
			array("7", "8", "8", "7"),
 			array("6", "5", "4", "3"),
 			array("8", "8", "8", "9"),
 			array("4", "3", "3", "6")
);

/*
foreach ($notas as $key => $value) {
	echo "El alumno AL" $value;

	foreach ($key as $key1 => $value1) {
		echo " de la asignatura DAW ha obtenido un " $value1;
	}
}
*/
foreach ($notas as $key) {
	echo "El alumno alumno1";

	foreach ($key as $nota) {
		echo " ha sacado un " . $nota;
	}
	echo "<br>";
}



?>
