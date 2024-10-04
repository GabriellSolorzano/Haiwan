<?php
include ('conex.php');

if (isset($_POST['BTnGuardar'])) {
    $idUsuario = $_POST['idUsuario'];
    $idAnimal = $_POST['idAnimal'];
    $FechaSolicitud = $_POST['FechaSolicitud'];
    $DocumentoSop = $_POST['DocumentoSop'];
    $idEstadoSolicitud = $_POST['idEstadoSolicitud'];

    $coso = "INSERT INTO solicitudadopcion (idUsuario, idAnimal, FechaSolicitud, DocumentoSop, idEstadoSolicitud) 
        VALUES (
            '$idUsuario',
            '$idAnimal ',
            '$FechaSolicitud ',
            '$DocumentoSop ',
            '$idEstadoSolicitud')";

    if (mysqli_query($conexion, $coso) == TRUE) {
        echo "<script>
                location.href='../Vista/app/admin/SolicitudA.php';
              </script>";
    } else {
        echo "<script>
                alert('El registro no pudo ser guardado');
                location.href='../Vista/app/admin/SolicitudA.php';
              </script>";
    }
}

mysqli_close($conexion);
?>
