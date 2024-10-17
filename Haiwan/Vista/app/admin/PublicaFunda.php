<?php
include('Menu.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Publicaciones de Fundaciones</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="col-md-12 align-self-end card-header py-3 justify-content-end">
                            <button class="btn btn-sm btn-primary offset-md-10 col-md-2" data-toggle="modal" data-target="#exampleModal">Nueva Publicacion</button>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Cód. de Publicación</th>
                                            <th>Fundación</th>
                                            <th>Animal</th>
                                            
                                            <th>Fecha de la Publicación</th>
                                            <th>Estado de la Publicación</th>
                                            <th>Modificar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tfoot> 
                                    </tfoot>
                                    <?php 
                                                  include( '../../../Control/Conex.php'); 
                                                  $cons = $conexion -> query("SELECT publicacionfund.idPublicaFund, fundacion.RazonSocial, animal.Nombre, publicacionfund.FechaPub, estadopub.Descripcion
FROM publicacionfund
INNER JOIN fundacion
ON publicacionfund.idFundacion = fundacion.idFundacion
INNER JOIN animal
ON publicacionfund.idAnimal = animal.idAnimal
INNER JOIN estadopub
ON publicacionfund.idEstadoPub = estadopub.idEstadoPub");
                                                  while ($row = $cons -> fetch_row()) {
                                                ?>
                                            <tr>
                                        <td><?php echo number_format(''.$row[0].''); ?></td>
                                        <td><?php echo ''.$row[1].''; ?></td>
                                        <td><?php echo ''.$row[2].''; ?></td>
                                        <td><?php echo ''.$row[3].''; ?></td>
                                        <td><?php echo ''.$row[4].''; ?></td>            
                   
                                        <!-- Si el usuario presiona el botòn Modificar ira a el archivo Modificarusua, si presiona eliminar irà a Borrarusua en la Carpeta Control--> 
                                        <!-- Onclick nos dice a donde se va a dirigir cuando presione el botón-->    
                                        <td> <center> <button type="submit" class="btn btn-sm btn-primary"><img src="img/Modificar.png" width="25px"></button> 
                                        <td> <center><button type="submit" class="btn btn-sm btn-danger" name="EliminaUsua" onclick="location='../../../Control/borrarPublicaFunda.php?id=<?php echo ''.$row[0].'' ?>'"><img src="img/Eliminar.png" width="25px"></button></center></td>
                                          
                                                    
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
          <h5 class="modal-title" id="exampleModalLabel" style="color:black;">Nueva Publicación de Fundación</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="../../../controlador/crearUsuario.php">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label style="color:black;" for="input_tipoDocumento">Fundación</label>
                  <select id="inputState" class="form-control" name="idFundacion">
                    <?php  
                        include( '../../../Control/conex.php');
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM fundacion";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row1 = $eje->fetch_row()){
                            echo '<option value="'.$row1[0].'">'.$row1[4].'</option>';
                          }
                        ?>
                  </select>
                </div>

                <div class="form-group col-md-6">
                  <label style="color:black;" for="input_tipoDocumento">Animal</label>
                  <select id="inputState" class="form-control" name="idAnimal">
                    <?php  
                        include( '../../../Control/conex.php');
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM animal";
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
                  <label style="color:black;" for="input_fechaNacimiento">Fecha de Publicación</label>
                  <input type="date" class="form-control" name="FechaPub" required>
                </div>
                <div class="form-group col-md-6">
                  <label style="color:black;" for="input_tipoDocumento">Estado de Publicación</label>
                  <select id="inputState" class="form-control" name="idEstadoPub">
                    <?php  
                        include( '../../../Control/conex.php');
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM estadopub";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row1 = $eje->fetch_row()){
                            echo '<option value="'.$row1[0].'">'.$row1[1].'</option>';
                          }
                        ?>
                  </select>
                  </div>

              </div>
              <center> <button type="submit" class="btn btn-primary" name="BTnGuardar">Guardar</button></center> 
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