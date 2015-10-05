<?php
include_once "conexion.php";

$lineas = file('txt/servicios.txt');//archivo con datos a cargar

foreach ($lineas as $linea_num => $linea)
{
    echo $linea_num;
    $datos = explode(";",$linea);// tener encuenta por que carater estan separadps los campos en el txt
 
    $nombre = trim($datos[0]);
    $tipo = trim($datos[1]);

    $query="insert into servicio values('','".$nombre."','".$tipo."')";
	    
	$resultado=$mysql->query($query);
	if(!$resultado){echo "fallo carga";}
  
}