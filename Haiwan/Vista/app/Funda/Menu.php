<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Haiwan</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center bg-primary" href="http://localhost/Haiwan/Vista/index.php">
                <div class="sidebar-brand-icon">
                    <img src="img/logo_notext1.png" 
                    width="60px"
                    height="60px"
                    alt="">
                </div>
                <div class="sidebar-brand-text mx-3 bordetxt" style="color: #ed7855; -webkit-text-stroke: 2px;">Haiwan</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Bienvenidos</span></a>
            </li>

           

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
            </div>

              <!-- Nav Item - Tables -->
              <li class="nav-item">
                <a class="nav-link" href="Mascotas.php">
                    <i class="fas fa-fw fa-dog"></i>
                    <span>Mascotas</span></a>
            </li>
             
            <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
                <a class="nav-link" href="MascotasFav.php">
                    <i class="fas fa-fw fa-star"></i>
                    <span>Mascotas Favoritas</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="SolicitudA.php">
                    <i class="fas fa-fw fa-receipt"></i>
                    <span>Solicitud de Adopción</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="PublicaFunda.php">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Publicaciones</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="Opiniones.php">
                    <i class="fas fa-fw fa-comment"></i>
                    <span>Opiniones</span></a>
            </li>

            

            <li class="nav-item">
                <a class="nav-link" href="Reportes.php">
                    <i class="fas fa-fw fa-dog"></i>
                    <span>Reportes</span></a>
            </li>   
 <!-- Divider -->
 <hr class="sidebar-divider">

 

 <!-- Nav Item - Pages Collapse Menu -->
 <li class="nav-item">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
         aria-expanded="true" aria-controls="collapseTwo">
         <i class="fas fa-fw fa-cog"></i>
         <span> Configuración</span>
     </a>
     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" >
         <div class="py-2 collapse-inner rounded" style="background-color: #ed7855">
             
             <a class="collapse-item" href="ciudad.php">Ciudades</a>
             <a class="collapse-item" href="Departamento.php">Departamentos</a>
             <a class="collapse-item" href="TipoDocumento.php">Tipos de Documentos</a>
             <a class="collapse-item" href="TipoUsuario.php">Tipos de Usuarios</a>
             <a class="collapse-item" href="TipoAnimal.php">Tipos de Animales</a>
             <a class="collapse-item" href="Raza.php">Razas Animales</a>
             <a class="collapse-item" href="Tamaño.php">Tamaños de Animales</a>
             <a class="collapse-item" href="Colores.php">Colores de Animales</a>
             <a class="collapse-item" href="TipoFundacion.php">Tipos de Fundacion</a>
             <a class="collapse-item" href="EstadoPubli.php">Estados de Publicación</a>
             <a class="collapse-item" href="EstadoSoli.php">Estados de Solicitud</a>
         </div>
     </div>
 </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

          

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-danger" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        
                       
                                  
                 

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?php
                                    if(isset( $_SESSION['user']))
                                        {
                                            {   echo ' <h4 style="color:#fff" ><b>';
                                                echo $_SESSION['Nombre'];
                                                echo ' </h4></b>';
                                            }
                                        }

                                       
                                ?>
                                </span>
                              
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuración
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

 <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body" style= "color:black">Presiona "cerrar sesión" en el caso de salir.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="../../../Control/Logout.php">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>
