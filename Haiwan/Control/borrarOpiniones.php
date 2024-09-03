<?php
include ('conex.php');
header( 'Content-Type: text/html; charset=UTF-8'); 
session_start(); 
error_reporting(0); 

$id = $_REQUEST['id'];

$del = $conexion -> query("DELETE FROM opiniones WHERE idOpiniones = '$id' ");
	if ($del) {
		echo "<script>
		location.href='../Vista/app/admin/Opiniones.php#';
		</script>";
		}
        else{
			echo "<script>
			 lert('El registro no pudo ser eliminado');
			location.href='../Vista/app/admin/Opiniones.php';
			</script>";

		}


		
 ?>