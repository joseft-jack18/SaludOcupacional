<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Clínica La Luz Tacna">
    <meta name="autor" content="CLLTacna">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">

    <title>Clínica La Luz Tacna</title>

     <!--CSS -->

    <link href="assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/node_modules/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="assets/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="assets/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />

    <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">

    <!-- Estilo propio CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">

    <!-- Gráficos CSS -->
    <link href="assets/node_modules/morrisjs/morris.css" rel="stylesheet">

    <!-- Modals CSS -->
    <link href="assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">

    <!-- Dashboard 01 CSS -->
    <link href="dist/css/pages/dashboard1.css" rel="stylesheet">

    <!-- SweetAlert -->

    <link rel="stylesheet" href="assets/plugins/sweetalert/dist/sweetalert2.min.css">
    
</head>

<body class="skin-red fixed-layout"> 


    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Clínica La Luz Tacna</p>
        </div>
    </div>

 
    <!-- Main wrapper -->

    <div id="main-wrapper">
        
        <!-- Topbar header -->
       
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <b>
                            <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>               
                        <span class="hidden-xs"><span class="font-bold">Clínica</span> La Luz</span>
                    </a>
                </div>

                
                <div class="navbar-collapse">
                   
                    <ul class="navbar-nav mr-auto">              
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                    </ul>

                   
                    <ul class="navbar-nav my-lg-0">
                        
                        <li class="nav-item dropdown u-pro">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/user2.jpg" alt="user" class=""> <span class="hidden-md-down"><?php echo utf8_encode($_SESSION['nom_usuario']);?> &nbsp;<i class="mdi mdi-chevron-down"></i></span> </a>

                            <div class="dropdown-menu dropdown-menu-right animated flipInY">                       
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> Mi Perfil</a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Configuración</a>
                                <div class="dropdown-divider"></div>
                                <a href="login.php?logout" class="dropdown-item"><i class="fa fa-power-off"></i> Cerrar Sesión</a>
                            </div>

                        </li>
                       
                       
                    </ul>
                </div>

            </nav>
        </header>



        <!-- AQUI EMPIEZA EL MENÚ LATERAL -->


        <aside class="left-sidebar">
           <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

               
                       <!--  <li> 
                        <a class="waves-effect waves-dark" href="dashboard.php"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li> -->

                        <li> 
                        <a class="waves-effect waves-dark" href="listarcita.php"><i class="mdi mdi-format-list-bulleted "></i><span class="hide-menu">Lista de Citas</span></a>
                        </li>
                        <li> 
                        <a class="waves-effect waves-dark" href="registrar_triaje.php"><i class="mdi mdi-pencil"></i><span class="hide-menu">Registrar Triaje</span></a>
                        </li>
                        <li> 
                        <a class="waves-effect waves-dark" href="registrar_refraccion.php"><i class="mdi mdi-pencil"></i><span class="hide-menu">Registrar Refracción</span></a>
                        </li>
                        

                        <!-- <li> 
                        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Categoría 2</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Opción 1</a></li>
                                <li><a href="#">Opción 2</a></li>
                                <li><a href="#">Opción 3</a></li>
                            </ul>
                        </li> -->


                       <!--  <li> 
                        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Categoría 3 <span class="badge badge-pill badge-primary text-white ml-auto">25</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Opción 1</a></li>
                                <li><a href="#">Opción 2</a></li>
                                <li><a href="#">Opción 3</a></li>
                            </ul>
                        </li> -->


                    </ul>
                </nav>           
           </div>    
        </aside>

        <!-- AQUI TERMINA EL MENÚ LATERAL -->
        
       
     
        <!-- Page wrapper  -->

        <div class="page-wrapper">
         
            <!-- Container fluid  -->

            <div class="container-fluid">   
            <br>