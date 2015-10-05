<?php
include_once "conexion.php";

$lineas = file('txt/baseServiciosHabitaciones.txt');//archivo con datos a cargar

foreach ($lineas as $linea_num => $linea)
{
    echo $linea_num;
    $datos = explode(";",$linea);// tener encuenta por que carater estan separadps los campos en el txt
 
    $tipoHabitacion = trim($datos[0]);
    $servicio = trim($datos[1]);
	$tipo = trim($datos[2]);

    $query="insert into habitacionServicio values('','".$tipoHabitacion."','".$servicio."','".$tipo."')";
	    
	$resultado=$mysql->query($query);
	if(!$resultado){echo "fallo carga";}
  
}