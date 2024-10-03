<?php
include ('conex.php');

if (isset($_POST['BTnGuardar'])) {
    $Nombre = $_POST['Nombre'];
    $Foto = $_POST['Foto'];
    $Descripcion = $_POST['Descripcion'];
    $idTipoAnimal = $_POST['idTipoAnimal'];    
    $idRaza = $_POST['idRaza'];
    $idTamaño = $_POST['idTamaño'];
    $idColor = $_POST['idColor'];
    $idColor2 = $_POST['idColor2'];
    $EdadPromedio = $_POST['EdadPromedio'];
    $idCiudad = $_POST['idCiudad'];
    $idDeparta = $_POST['idDeparta'];

    // Construir la consulta
    $coso = "INSERT INTO animal (Nombre, Foto, Descripcion, idTipoAnimal, idRaza, idTamaño, idColor, idColor2, EdadPromedio, idCiudad, idDepartamento) 
        VALUES (
            '$Nombre',
            '$Foto',
            '$Descripcion',
            '$idTipoAnimal',
            '$idRaza',
            '$idTamaño',
            '$idColor',
            '$idColor2',
            '$EdadPromedio',
            '$idCiudad',
            '$idDeparta'
        )";

    // Imprimir la consulta para depuración
    echo $coso; // Esto mostrará la consulta en el navegador

    if (mysqli_query($conexion, $coso) == TRUE) {
        echo "<script>
                location.href='../Vista/app/admin/Mascotas.php';
              </script>";
    } else {
        echo "<script>
                alert('El registro no pudo ser guardado: " . mysqli_error($conexion) . "');
                location.href='../Vista/app/admin/Mascotas.php';
              </script>";
    }
}

mysqli_close($conexion);
?>
