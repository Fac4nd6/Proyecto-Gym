<?php 

$conexion = mysqli_connect("localhost", "root", "", "Proyect-Gym");

if(!$conexion){

die("Error al conectar: " . mysqli_connect_error());

}

?>