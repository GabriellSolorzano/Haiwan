<?php
include ('conex.php');

if (isset($_POST['BTnGuardar'])) {
    $idFundacion = $_POST['idFundacion'];
    $idAnimal = $_POST['idAnimal'];
    $FechaPub = $_POST['FechaPub'];
    $idEstadoPub = $_POST['idEstadoPub'];

    $coso = "INSERT INTO publicacionfund (idFundacion, idAnimal, FechaPub, idEstadoPub) 
        VALUES (
            '$idFundacion',
            '$idAnimal',
            '$FechaPub',
            '$idEstadoPub')";

    if (mysqli_query($conexion, $coso) == TRUE) {
        echo "<script>
                location.href='../Vista/app/admin/PublicaFunda.php';
              </script>";
    } else {
        echo "<script>
                alert('El registro no pudo ser guardado');
                location.href='../Vista/app/admin/PublicaFunda.php';
              </script>";
    }
}

mysqli_close($conexion);
?>
