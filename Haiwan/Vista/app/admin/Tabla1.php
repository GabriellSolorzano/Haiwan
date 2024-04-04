<?php
include('Menu.php');
?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Usuarios</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="col-md-12 align-self-end card-header py-3 justify-content-end">
                            <button class="btn btn-sm btn-primary offset-md-10 col-md-2 ">Nuevo Usuario</button>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Identificación</th>
                                            <th>Tipo Usuario</th>
                                            <th>Tipo Doc.</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Teléfono</th>
                                            <th>Eliminar</th>
                                            <th>Modificar</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Identificación</th>
                                            <th>Tipo Usuario</th>
                                            <th>Tipo Doc.</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Teléfono</th>
                                            <th>Eliminar</th>
                                            <th>Modificar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       
                                        <tr>
                                            <th>33816156</th>
                                            <th>Administrador</th>
                                            <th>Tipo Doc.</th>
                                            <th>Dianeth Yamile</th>
                                            <th>León Valencia</th>
                                            <th>3135417303</th>
                                            <th><center><button class="btn btn-sm btn-danger">Eliminar</center></button></th>
                                            <th><center><button class="btn btn-sm btn-primary">Modificar</center></button></th>
                                        </tr>
                                        <tr>
                                            <th>33816156</th>
                                            <th>Administrador</th>
                                            <th>Tipo Doc.</th>
                                            <th>Dianeth Yamile</th>
                                            <th>León Valencia</th>
                                            <th>3135417303</th>
                                            <th><center><button class="btn btn-sm btn-danger">Eliminar</center></button></th>
                                            <th><center><button class="btn btn-sm btn-primary">Modificar</center></button></th>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- MODAL DE USUARIO -->
    
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