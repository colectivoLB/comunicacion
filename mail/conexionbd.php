<?php

$conexion = mysqli_connect("https://colectivolb.github.io/comunicacion/contact.html", 
	"root", "", "leñabrava");

if (!conexion) {
 	echo 'Error';
 } 
 else {
 	echo 'Envio Exitoso';
 }
