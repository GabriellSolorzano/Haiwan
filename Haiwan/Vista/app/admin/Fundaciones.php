<?php
include('Menu.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Fundaciones</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="col-md-12 align-self-end card-header py-3 justify-content-end">
                            <button class="btn btn-sm btn-primary offset-md-10 col-md-2 " data-toggle="modal" data-target="#exampleModal">Nueva Fundacion</button>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Cód. de Fundación</th>
                                            <th>Tipo de Documento</th>
                                            <th>Tipo de Fundacion</th>
                                            <th>Documento</th>
                                            <th>Razon Social</th>
                                            <th>Foto</th>
                                            <th>Dirección</th>
                                            <th>Teléfono</th>
                                            <th>Correo</th>
                                            <th>Clave</th>
                                            <th>Ciudad</th>
                                            <th>Departamento</th>
                                            <th>Modificar</th>
                                            <th>Eliminar</th>

                                        </tr>
                                    </thead>
                                    <tbody>
    
                                    <?php 
                                                  include( '../../../Control/conex.php'); 
                                                  $cons = $conexion -> query(
                                                "SELECT fundacion.idFundacion, tipodocumento.Descripcion, tipofundacion.Descripcion, fundacion.Documento, fundacion.RazonSocial, fundacion.Foto, fundacion.Direccion, fundacion.Telefono, fundacion.Correo, fundacion.Clave, ciudad.Descripcion, departamento.Descripcion

                                                FROM fundacion 
                                                INNER JOIN tipofundacion 
                                                ON fundacion.idTipoFundacion = tipofundacion.idTipoFundacion
                                                INNER JOIN tipodocumento
                                                ON fundacion.idTipoDoc = tipodocumento.IdTipoDocumento
                                                INNER JOIN ciudad
                                                ON fundacion.idCiudad = ciudad.idCiudad
                                                INNER JOIN departamento
                                                ON fundacion.idDeparta = departamento.idDepartamento;");
                                                  while ($row = $cons -> fetch_row()) {
                                                ?>
                                            <tr>
                                        <td><?php echo number_format(''.$row[0].''); ?></td>
                                        <td><?php echo ''.$row[1].''; ?></td>
                                        <td><?php echo ''.$row[2].''; ?></td>
                                        <td><?php echo ''.$row[3].''; ?></td>
                                        <td><?php echo ''.$row[4].''; ?></td>
                                        <td><img src="data:image/jpeg;base64,<?php echo base64_encode($row[5]); ?>" width="100"></td>
                                        <td><?php echo ''.$row[6].''; ?></td>
                                        <td><?php echo ''.$row[7].''; ?></td>
                                        <td><?php echo ''.$row[8].''; ?></td>
                                        <td><?php echo ''.$row[9].''; ?></td>
                                        <td><?php echo ''.$row[10].''; ?></td>
                                        <td><?php echo ''.$row[11].''; ?></td>
                                    <!-- Si el usuario presiona el botòn Modificar ira a el archivo Modificarusua, si presiona eliminar irà a Borrarusua en la Carpeta Control--> 
                                        <!-- Onclick nos dice a donde se va a dirigir cuando presione el botón-->    
                                        <td> <center> <button type="submit" class="btn btn-sm btn-primary"><img src="img/Modificar.png" width="25px"></button> 
                                        <td> <center><button type="submit" class="btn btn-sm btn-danger" name="EliminaUsua" onclick="location='../../../Control/borrarFundaciones.php?id=<?php echo ''.$row[0].'' ?>'"><img src="img/Eliminar.png" width="25px"></button></center></td>
                                          
                                                    
                                    </tr>
                                    <?php }   ?>
</body>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          
        </div>
        <!-- End of Content Wrapper -->

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
          <h5 class="modal-title" id="exampleModalLabel" style="color:black;">Nueva Fundación</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label style="color:black;" for="inputAddress2">Razón Social:</label>
                      <textarea type="text" class="form-control" name="RazonSocial" placeholder="Fundacion..."></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <label style="color:black;" for="input_tipoDocumento">Tipo de Fundación</label>
                      <select id="inputState" class="form-control" name="idTipoFundacion">
                      <?php  
                        include( '../../../Control/conex.php');
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM tipofundacion";
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
                    <label style="color:black;" for="input_tipoDocumento">Tipo de Documento</label>
                      <select id="inputState" class="form-control" name="idTipoDoc">
                      <?php  
                        include( '../../../Control/conex.php');
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM tipodocumento";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row1 = $eje->fetch_row()){
                            echo '<option value="'.$row1[0].'">'.$row1[1].'</option>';
                          }
                        ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label style="color:black;" for="inputAddress">Documento:</label>
                      <input type="number" class="form-control" name="Documento" placeholder="Cedula del responsable">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label style="color:black;" for="inputCity">Direccion:</label>
                      <input type="text" class="form-control" name="Direccion" placeholder="Direccion de la sede principal">
                  </div>
                  <div class="form-group col-md-6">
                    <label style="color:black;" for="inputState">Teléfono:</label>
                      <input type="number" class="form-control" name="Telefono" placeholder="Numero Telefonico">
                  </div>
                </div>

                <div class="form-row">
                <div class="form-group col-md-6">
                  <label style="color:black;" for="input_tipoDocumento">Ciudad</label>
                    <select id="inputState" class="form-control" name="idCiudad" require>
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
                    <select id="inputState" class="form-control" name="idDeparta" require>
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

              <div class="form-row">
                  <div class="form-group col-md-6">
                    <label style="color:black;" for="inputZip">Correo:</label>
                      <input type="text" class="form-control" name="Correo" placeholder="fundacion@...">
                  </div>
                  <div class="form-group col-md-6">
                    <label style="color:black;" for="inputAddress">Clave:</label>
                      <input type="passwor" class="form-control" name="Clave" placeholder="Contraseña de la cuenta">
                  </div>
                </div>

              <div class="form-row">
                <div class="form-group col-md-12">
                    <label style="color:black;" for="inputPassword4">Foto:</label>
                      <input type="file" class="form-control" name="Foto">
                </div>
              </div>


              <center> <button type="submit" class="btn btn-primary" name="BTnGuardar">Guardar</button></center> 
              </form>
        </div>
        
      </div>
    </div>
  </div>
  
    
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


</html>