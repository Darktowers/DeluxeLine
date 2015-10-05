<?php
include_once "conexion.php";

$lineas = file('txt/tipoHabitacion.txt');//archivo con datos a cargar

foreach ($lineas as $linea_num => $linea)
{
    echo $linea_num;
    $datos = explode(";",$linea);// tener encuenta por que carater estan separadps los campos en el txt
 
    $descripcion = trim($datos[0]);
    $precio = trim($datos[1]);
    $cantHuespedes = trim($datos[2]);
    $tamaño = trim($datos[3]);

    $query="insert into tipohabitacion values('','".$descripcion."','".$precio."','".$cantHuespedes."','".$tamaño."')";
	    
	$resultado=$mysql->query($query);
	if(!$resultado){echo "fallo carga";}
  
}

    //$resultado->free();
    //$query->close();
// $consulta="SELECT descripcion FROM rolusu";

// $resultado=$conexion->query($consulta);


// while ($resl = $resultado->fetch_assoc()) {
//     echo $resl['descripcion'];
//     echo "</br>";
// }

// $resultado->free();
// $conexion->close();

?>

