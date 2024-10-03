<?php
include ('conex.php');

if (isset($_POST['BTnGuardar'])) {
    $nombre = $_POST['Nombre'];
    $documento = $_POST['Documento'];
    $tipoDocumento = $_POST['idTipoDocumento'];
    $tipoUsuario = $_POST['idTipoUsuario'];
    $direccion = $_POST['Direccion'];
    $email = $_POST['Correo'];
    $contraseña = $_POST['Clave'];
    $ciudad = $_POST['idCiudad'];
    $Departamento = $_POST['idDeparta'];

    $coso = "INSERT INTO usuario (Nombre, Documento, idTipoDocumento, idTipoUsuario, Direccion,
        Correo, Clave, idCiudad, idDeparta) 
        VALUES (
            '$nombre',
            '$documento',
            '$tipoDocumento',
            '$tipoUsuario',
            '$direccion',
            '$email',
            '$contraseña',
            '$ciudad',
            '$Departamento')";

    if (mysqli_query($conexion, $coso) == TRUE) {
        echo "<script>
                location.href='../Vista/app/admin/usuarios.php';
              </script>";
    } else {
        echo "<script>
                alert('El registro no pudo ser guardado');
                location.href='../Vista/app/admin/usuarios.php';
              </script>";
    }
}

mysqli_close($conexion);
?>
