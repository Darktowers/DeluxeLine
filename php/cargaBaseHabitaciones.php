<?php
include_once "conexion.php";

$lineas = file('txt/baseHabitaciones.txt');//archivo con datos a cargar

foreach ($lineas as $linea_num => $linea)
{
    echo $linea_num;
    $datos = explode(";",$linea);// tener encuenta por que carater estan separadps los campos en el txt
 
    $tipohabitacion = trim($datos[0]);
    $codigo = trim($datos[1]);
    $estado = trim($datos[2]);

    $query="insert into habitacion values('','".$tipohabitacion."','".$codigo."','".$estado."')";
	    
	$resultado=$mysql->query($query);
	if(!$resultado){echo "fallo carga";}
  
}