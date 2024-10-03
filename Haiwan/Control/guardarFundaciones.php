<?php
include ('conex.php');

if (isset($_POST['BTnGuardar'])) {
    $RazonSocial = $_POST['RazonSocial'];
    $idTipoFundacion = $_POST['idTipoFundacion'];
    $idTipoDoc = $_POST['idTipoDoc'];
    $Documento = $_POST['Documento'];    
    $Direccion = $_POST['Direccion'];
    $Telefono = $_POST['Telefono'];
    $Correo = $_POST['Correo'];
    $Clave = $_POST['Clave'];
    $Foto = $_POST['Foto'];
    $idCiudad = $_POST['idCiudad'];
    $idDeparta = $_POST['idDeparta'];

    // Construir la consulta
    $coso = "INSERT INTO fundacion (idTipoDoc, idTipoFundacion, Documento, RazonSocial, Foto, Direccion, Telefono, Correo, 
    Clave, idCiudad, idDeparta)
        VALUES (
            '$idTipoDoc',
            '$idTipoFundacion',
            '$Documento',
            '$RazonSocial',
            '$Foto',
            '$Direccion',
            '$Telefono',
            '$Correo',
            '$Clave',
            '$idCiudad',
            '$idDeparta'
        )";

    // Imprimir la consulta para depuración
    echo $coso; // Esto mostrará la consulta en el navegador

    if (mysqli_query($conexion, $coso) == TRUE) {
        echo "<script>
                location.href='../Vista/app/admin/Fundaciones.php';
              </script>";
    } else {
        echo "<script>
                alert('El registro no pudo ser guardado: " . mysqli_error($conexion) . "');
                location.href='../Vista/app/admin/Fundaciones.php';
              </script>";
    }
}

mysqli_close($conexion);
?>
