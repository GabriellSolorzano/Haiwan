<?php
include ('conex.php');
header( 'Content-Type: text/html; charset=UTF-8'); 
session_start(); 
error_reporting(0); 

$id = $_REQUEST['id'];

$del = $conexion -> query("DELETE FROM animal WHERE dAnimal = '$id' ");
	if ($del) {
		echo "<script>
		location.href='../Vista/app/admin/Mascotas.php#';
		</script>";
		}
        else{
			echo "<script>
			 lert('El registro no pudo ser eliminado');
			location.href='../Vista/app/admin/Mascotas.php';
			</script>";

		}


		
 ?>