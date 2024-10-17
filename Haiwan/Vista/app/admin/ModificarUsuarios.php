<?php
include('conex.php');

$idUsuario = $_POST['idUsuario'];
$Nombre = $_POST['Nombre'];
$Documento = $_POST['Documento'];
$idTipoDocumento = $_POST['idTipoDocumento'];
$idTipoUsuario = $_POST['idTipoUsuario'];
$Correo = $_POST['Correo'];
$idCiudad = $_POST['idCiudad'];
$idDeparta = $_POST['idDeparta'];
$Direccion = $_POST['Direccion'];
$Clave = $_POST['Clave'];

// Consulta para modificar el usuario
$sql = "UPDATE usuario SET 
            Nombre = '$Nombre', 
            Documento = '$Documento', 
            idTipoDocumento = '$idTipoDocumento', 
            idTipoUsuario = '$idTipoUsuario', 
            Correo = '$Correo', 
            idCiudad = '$idCiudad', 
            idDeparta = '$idDeparta', 
            Direccion = '$Direccion', 
            Clave = '$Clave' 
        WHERE idUsuario = '$idUsuario'";

if ($conexion->query($sql) === TRUE) {
   echo "<script>
    alert('Registro Modificado correctamente');
   location.href='../Vista/app/admin/usuarios.php';
   </script>";
} else {
    echo  $conexion->error;
    echo "<script>
    alert('Registro No pudo ser modificado');
   location.href='../Vista/app/admin/usuarios.php';
   </script>";
}

$conexion->close();
?>