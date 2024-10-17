<?php
include('Menu.php');
$id = $_REQUEST['id'];
include('../../../Control/conex.php');

// Consultamos el registro específico de la tabla animal
$sql = "SELECT animal.idAnimal, animal.Nombre, animal.Descripcion, animal.EdadPromedio, 
                animal.idTipoAnimal, animal.idRaza, animal.idTamaño, animal.idColor, animal.idColor2, 
                ciudad.Descripcion AS Ciudad, departamento.Descripcion AS Departamento
        FROM animal 
        INNER JOIN ciudad ON animal.idCiudad = ciudad.idCiudad 
        INNER JOIN departamento ON animal.idDepartamento = departamento.idDepartamento
        WHERE animal.idAnimal = '$id'";

$eje = $conexion->query($sql);
if ($eje->num_rows > 0) {
    $row = $eje->fetch_assoc();
} else {
    echo "No se encontraron datos para el ID especificado.";
    exit();
}
?>

<div class="container">
    <h1 class="h3 mb-2 text-gray-800 mb-4">Modificar Animal</h1>
    <form action="../../../Control/ModificarAnimal.php" method="post">
        <input type="hidden" name="idAnimal" value="<?php echo $row['idAnimal']; ?>">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label style="color:black;" for="input_nombre">Nombre</label>
                <input type="text" class="form-control" name="Nombre" value="<?php echo $row['Nombre']; ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label style="color:black;" for="input_descripcion">Descripción</label>
                <input type="text" class="form-control" name="Descripcion" value="<?php echo $row['Descripcion']; ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label style="color:black;" for="input_edad">Edad Promedio</label>
                <input type="number" class="form-control" name="EdadPromedio" value="<?php echo $row['EdadPromedio']; ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label style="color:black;" for="input_tipoAnimal">Tipo de Animal</label>
                <select id="inputState" name="idTipoAnimal" class="form-control">
                    <?php
                    $sql = "SELECT * FROM tipoanimal";
                    $eje = $conexion->query($sql);
                    while ($row1 = $eje->fetch_row()) { 
                        $selected = ($row1[0] == $row['idTipoAnimal']) ? 'selected' : '';
                        echo '<option value="'.$row1[0].'" '.$selected.'>'.$row1[1].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label style="color:black;" for="input_raza">Raza</label>
                <select id="inputState" name="idRaza" class="form-control">
                    <?php
                    $sql = "SELECT * FROM raza";
                    $eje = $conexion->query($sql);
                    while ($row1 = $eje->fetch_row()) { 
                        $selected = ($row1[0] == $row['idRaza']) ? 'selected' : '';
                        echo '<option value="'.$row1[0].'" '.$selected.'>'.$row1[1].'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label style="color:black;" for="input_tamaño">Tamaño</label>
                <select id="inputState" name="idTamaño" class="form-control">
                    <?php
                    $sql = "SELECT * FROM tamaños";
                    $eje = $conexion->query($sql);
                    while ($row1 = $eje->fetch_row()) { 
                        $selected = ($row1[0] == $row['idTamaño']) ? 'selected' : '';
                        echo '<option value="'.$row1[0].'" '.$selected.'>'.$row1[1].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label style="color:black;" for="input_color">Color</label>
                <select id="inputState" name="idColor" class="form-control">
                    <?php
                    $sql = "SELECT * FROM color";
                    $eje = $conexion->query($sql);
                    while ($row1 = $eje->fetch_row()) { 
                        $selected = ($row1[0] == $row['idColor']) ? 'selected' : '';
                        echo '<option value="'.$row1[0].'" '.$selected.'>'.$row1[1].'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label style="color:black;" for="input_color2">Color Secundario</label>
                <select id="inputState" name="idColor2" class="form-control">
                    <?php
                    $sql = "SELECT * FROM color";
                    $eje = $conexion->query($sql);
                    while ($row1 = $eje->fetch_row()) { 
                        $selected = ($row1[0] == $row['idColor2']) ? 'selected' : '';
                        echo '<option value="'.$row1[0].'" '.$selected.'>'.$row1[1].'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label style="color:black;" for="input_ciudad">Ciudad</label>
