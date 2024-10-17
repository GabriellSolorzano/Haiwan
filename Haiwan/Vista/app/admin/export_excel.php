<?php
include('../../../Control/Conex.php');

// Asegúrate de que no haya salida antes de esto
ob_start(); // Iniciar el buffer de salida

// Establecer la cabecera para el archivo Excel
header("Content-Type: application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=reporte_mascotas.xls");
header("Pragma: no-cache");
header("Expires: 0");

// Consulta a la base de datos
$cons = $conexion->query("SELECT animal.idAnimal, animal.Nombre, animal.Foto, animal.Descripcion, tipoanimal.Descripcion AS tipoDescripcion, raza.Descripcion AS razaDescripcion, tamaños.descripcion AS tamanioDescripcion, color.Descripcion AS colorPrimario, color.Descripcion AS colorSecundario, animal.EdadPromedio, ciudad.Descripcion AS ciudadDescripcion, departamento.Descripcion AS departamentoDescripcion
FROM animal
INNER JOIN tipoanimal ON animal.idTipoAnimal = tipoanimal.idTipoAnimal
INNER JOIN raza ON animal.idRaza = raza.idRaza
INNER JOIN tamaños ON animal.idTamaño = tamaños.idTamaño
INNER JOIN color ON animal.idColor AND animal.idColor2 = color.idColor
INNER JOIN ciudad ON animal.idCiudad = ciudad.idCiudad
INNER JOIN departamento ON animal.idDepartamento = departamento.idDepartamento;");

// Encabezados de la tabla
echo "\xEF\xBB\xBF"; // Agregar BOM para UTF-8
echo "Cód. Mascota\tNombre\tFoto\tDescripción\tTipo Animal\tRaza\tTamaño\tColor Primario\tColor Secundario\tEdad Promedio\tCiudad\tDepartamento\n";

// Datos
while ($row = $cons->fetch_assoc()) {
    // Asegúrate de que los datos se manejen en UTF-8
    foreach ($row as &$value) {
        $value = mb_convert_encoding($value, 'UTF-8', 'auto');
    }
    echo implode("\t", $row) . "\n";
}

// Finalizar el buffer y enviar la salida
ob_end_flush(); // Enviar el contenido del buffer
?>
