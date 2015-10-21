<?php
session_start();
if(@$_SESSION['activo']!=true){

	echo "false";

}
elseif(@$_SESSION['activo']==true){

	echo "true";

}
?>