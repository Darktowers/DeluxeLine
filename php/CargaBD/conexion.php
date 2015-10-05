<?php

$usuario="root";
$host="localhost";
$pass="";
$db="deluxev1";

$mysql=new mysqli($host,$usuario,$pass,$db);

if($mysql->connect_errno){
	echo "La conexion a la base de datos a fallado"."</br>".$mysql->connect_errno."</br>".$mysql->connect_error;
}
else{
	echo "come pija puto fracasadito!!!";
}

?>