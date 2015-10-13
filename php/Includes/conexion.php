<?php

$usuario="b0818c18938003";
$host="us-cdbr-azure-west-c.cloudapp.net";
$pass="9c0f15ab";
$db="deluxe";

$mysql=new mysqli($host,$usuario,$pass,$db);

if($mysql->connect_errno){
	echo "La conexion a la base de datos a fallado"."</br>".$mysql->connect_errno."</br>".$mysql->connect_error;
}

?>