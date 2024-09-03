<?php
include('Menu.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Mascotas</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="col-md-12 align-self-end card-header py-3 justify-content-end">
                            <button class="btn btn-sm btn-primary offset-md-10 col-md-2" data-toggle="modal" data-target="#exampleModal">Nueva Mascota</button>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Cód. Mascota</th>
                                            <th>Nombre</th>
                                            <th>Foto</th>
                                            <th>Descripción</th>
                                            <th>Tipo Animal</th>
                                            <th>Raza</th>
                                            <th>Tamaño</th>
                                            <th>Color Primario</th>
                                            <th>Color Secundario</th>
                                            <th>Edad Promedio</th>
                                            <th>Ciudad</th>
                                            <th>Departamento</th>
                                            <th>Modificar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tfoot> 
                                    </tfoot>
                                    <?php 
                                                  include( '../../../Control/Conex.php'); 
                                                  $cons = $conexion -> query("SELECT animal.idAnimal, animal.Nombre, animal.Foto, animal.Descripcion, tipoanimal.Descripcion, raza.Descripcion, tamaños.descripcion, color.Descripcion, color.Descripcion, animal.EdadPromedio, ciudad.Descripcion, departamento.Descripcion
FROM animal
INNER JOIN tipoanimal
ON animal.idTipoAnimal = tipoanimal.idTipoAnimal
INNER JOIN raza
ON animal.idRaza = raza.idRaza
INNER JOIN tamaños
ON animal.idTamaño = tamaños.idTamaño
INNER JOIN color
ON animal.idColor AND animal.idColor2 = color.idColor
INNER JOIN ciudad
ON animal.idCiudad = ciudad.idCiudad
INNER JOIN departamento
ON animal.idDepartamento = departamento.idDepartamento;");
                                                  while ($row = $cons -> fetch_row()) {
                                                ?>
                                            <tr>
                                        <td><?php echo number_format(''.$row[0].''); ?></td>
                                        <td><?php echo ''.$row[1].''; ?></td>
                                        <td><?php echo ''.$row[2].''; ?></td>
                                        <td><?php echo ''.$row[3].''; ?></td>
                                        <td><?php echo ''.$row[4].''; ?></td>
                                        <td><?php echo ''.$row[5].''; ?></td>
                                        <td><?php echo ''.$row[6].''; ?></td>
                                        <td><?php echo ''.$row[7].''; ?></td>    
                                        <td><?php echo ''.$row[8].''; ?></td>       
                                        <td><?php echo ''.$row[9].''; ?></td>       
                                        <td><?php echo ''.$row[10].''; ?></td>       
                                        <td><?php echo ''.$row[11].''; ?></td>       
            
                   
                                        <!-- Si el usuario presiona el botòn Modificar ira a el archivo Modificarusua, si presiona eliminar irà a Borrarusua en la Carpeta Control--> 
                                        <!-- Onclick nos dice a donde se va a dirigir cuando presione el botón-->    
                                        <td> <center> <button type="submit" class="btn btn-sm btn-primary"><img src="img/Modificar.png" width="25px"></button> 
                                        <td> <center><button type="submit" class="btn btn-sm btn-danger" name="EliminaMascota" onclick="location='../../../Control/borrarMascotas.php?id=<?php echo ''.$row[0].'' ?>'"><img src="img/Eliminar.png" width="25px"></button></center></td>
                                          
                                                    
                                    </tr>
                                    <?php }   ?>
                                                                  
                                                          </div>
                                                      </div>
                                                  </div>

                                              </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main , Content -->

            

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- MODAL DE USUARIO -->
    <!-- Button trigger modal -->
 
   
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="color:black;">Nueva Mascota</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="../../../controlador/crearUsuario.php">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label style="color:black;" for="input_nombre">Nombre</label>
                    <input type="text" class="form-control" name="Nombre" placeholder="Nombre mascota" required>
                </div>
                <div class="form-group col-md-6">
                  <label style="color:black;" for="input_apellido">Foto</label>
                    <input type="file" class="form-control" name="Foto" required>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label style="color:black;" for="input_documento">Descripción</label>
                    <textarea class="form-control" name="Descripcion"  required>Descripción</textarea>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label style="color:black;" for="input_tipoDocumento">Raza de animal </label>
                    <select id="inputState" class="form-control" name="Tipo animal" require>
                    <?php  
                        include( '../../../Control/conex.php');
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM raza";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row1 = $eje->fetch_row()){
                            echo '<option value="'.$row1[0].'">'.$row1[1].'</option>';
                          }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label style="color:black;" for="input_tipoDocumento">Tamaño</label>
                    <select id="inputState" class="form-control" name="Carateristicas" require>
                    <?php  
                        include( '../../../Control/conex.php');
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM tamaños";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row1 = $eje->fetch_row()){
                            echo '<option value="'.$row1[0].'">'.$row1[1].'</option>';
                          }
                        ?>
                    </select>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label style="color:black;" for="input_tipoDocumento">Color 1</label>
                    <select id="inputState" class="form-control" name="Tipo animal" require>
                    <?php  
                        include( '../../../Control/conex.php');
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM color";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row1 = $eje->fetch_row()){
                            echo '<option value="'.$row1[0].'">'.$row1[1].'</option>';
                          }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label style="color:black;" for="input_tipoDocumento">Color 2</label>
                    <select id="inputState" class="form-control" name="Carateristicas" require>
                    <?php  
                        include( '../../../Control/conex.php');
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM color";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row1 = $eje->fetch_row()){
                            echo '<option value="'.$row1[0].'">'.$row1[1].'</option>';
                          }
                        ?>
                    </select>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label style="color:black;" for="input_tipoUsuario">Edad promedio</label>
                  <input type="number" class="form-control" name="Edad" required>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label style="color:black;" for="input_tipoDocumento">Ciudad</label>
                    <select id="inputState" class="form-control" name="Carateristicas" require>
                    <?php  
                        include( '../../../Control/conex.php');
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM ciudad";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row1 = $eje->fetch_row()){
                            echo '<option value="'.$row1[0].'">'.$row1[1].'</option>';
                          }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label style="color:black;" for="input_fechaNacimiento">Departamento</label>
                    <select id="inputState" class="form-control" name="Carateristicas" require>
                    <?php  
                        include( '../../../Control/conex.php');
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM departamento";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row1 = $eje->fetch_row()){
                            echo '<option value="'.$row1[0].'">'.$row1[1].'</option>';
                          }
                        ?>
                    </select>
                </div>
              </div>

            <center> <button type="submit" class="btn btn-primary">Guardar</button> </center>

            </form>
        </div>
        
      </div>
    </div>
  </div>
  </div>

  </div>          
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>