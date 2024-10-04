<?php
include ('conex.php');

if (isset($_POST['BTnGuardar'])) {
    $idUsuario = $_POST['idUsuario'];
    $idAnimal = $_POST['idAnimal'];
    $FechaPub = $_POST['FechaPub'];
    $idEstadoPub = $_POST['idEstadoPub'];

    $coso = "INSERT INTO publicacionusua (idUsuario, idAnimal, FechaPub, idEstadoPub) 
        VALUES (
            '$idUsuario',
            '$idAnimal',
            '$FechaPub',
            '$idEstadoPub')";

    if (mysqli_query($conexion, $coso) == TRUE) {
        echo "<script>
                location.href='../Vista/app/admin/PublicaUsua.php';
              </script>";
    } else {
        echo "<script>
                alert('El registro no pudo ser guardado');
                location.href='../Vista/app/admin/PublicaUsua.php';
              </script>";
    }
}

mysqli_close($conexion);
?>
