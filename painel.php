<?php
//session_start();
require ('./_app/Config.inc.php');

//$login = new Login(3);
//$logoff = filter_input(INPUT_GET, 'logoff', FILTER_VALIDATE_BOOLEAN);
//
//if (!$login->CheckLogin()):
//    unset($_SESSION['userlogin']);
//    header('Location: index.php?exe=restrito');
//else:
//    $userlogin = $_SESSION['userlogin'];
//endif;
//
//if ($logoff):
//    unset($_SESSION['userlogin']);
//    header('Location: index.php?exe=logoff');
//endif;

$Read = new Read;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <title>All CONDO - Painel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="system/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="system/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="system/dist/css/skins/skin-green.min.css">
        <link href="css/jquery-ui.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body class="hold-transition skin-green sidebar-mini">
        <div class="wrapper">

            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="bko_painel.php" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><i class="fa fa-area-chart"></i></span></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><i class="fa fa-area-chart"></i><b> All</b> Condo</span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">

                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Btn Menu</span>
                    </a>

                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">

                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">100</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">Você Tem $qtd mensagens</li>
                                    <li>

                                        <!-- inner menu: contains the messages -->
                                        <ul class="menu">
                                            <li><!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <!-- User Image -->
                                                        <img src="system/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                    </div>

                                                    <!-- Message title and timestamp -->
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <!-- The message -->
                                                    <p>Olá, venda devolvida!</p>
                                                </a>
                                            </li><!-- end message -->
                                        </ul><!-- /.menu -->
                                    </li>
                                    <li class="footer"><a href="#">Ver todas</a></li>
                                </ul>
                            </li><!-- /.messages-menu -->

                            <!-- Notifications Menu -->
                            <li class="dropdown notifications-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">100</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <!-- Inner Menu: contains the notifications -->
                                        <ul class="menu">
                                            <li><!-- start notification -->
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li><!-- end notification -->
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>

                            <!-- Tasks Menu -->
                            <li class="dropdown tasks-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">100</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 9 tasks</li>
                                    <li>
                                        <!-- Inner menu: contains the tasks -->
                                        <ul class="menu">
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <!-- Task title and progress text -->
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">20%</small>
                                                    </h3>
                                                    <!-- The progress bar -->
                                                    <div class="progress xs">
                                                        <!-- Change the css width attribute to simulate progress -->
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="system/dist/img/mayco-vilefort-160x160.jpg" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">Mayco Vilefort</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="system/dist/img/mayco-vilefort-160x160.jpg" class="img-circle" alt="User Image">
                                        <p>
                                            Mayco Vilefort - Vendedor Senior
                                            <small>Membro desde Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Seguidores</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Vendas</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Amigos</a>
                                        </div>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="painel.php?logoff=true" class="btn btn-default btn-flat">Sair</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="system/dist/img/mayco-vilefort-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Mayco Vilefort</p>
                            <!-- Status -->
                            <small><i class="fa fa-circle text-success"></i> Online</small>
                        </div>
                    </div>

                    <!-- INICIO - Menu Lateral -->
                    <ul class="sidebar-menu">
                        <li class="header">MENU</li>
                        
                        <li class="active treeview">
                            <a href="painel.php"><i class="fa fa-dashboard"></i> <span>PAINEL</span></i></a>
                        </li>
                        
                        <li class="active treeview">
                            <a href="#"><i class="fa fa-plus"></i> <span>CADASTRO</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="j_cadastro" name="Condominio" href="#"><i class="fa fa-building"></i> Condomínio</a></li>
                                <li><a class="j_cadastro" name="Apartamentos" href="#"><i class="fa fa-bed"></i> Apartamentos</a></li>
                                <li><a class="j_cadastro" name="Moradores" href="#"><i class="fa fa-user"></i> Moradores</a></li>
                                <li><a class="j_cadastro" name="Dependentes" href="#"><i class="fa fa-child"></i> Dependentes</a></li>
                                <li><a class="j_cadastro" name="Vagas" href="#"><i class="fa fa-automobile "></i> Vagas</a></li>
                                <li><a class="j_cadastro" name="Funcionarios" href="#"><i class="fa fa-suitcase"></i> Funcionários</a></li>
                            </ul>
                        </li>
                        <!--<li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>--> 
                    </ul>
                </section>
                <!-- FIM - Menu Lateral -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <!-- Content Header (Page header) -->
                <section class="content-header" id="">
                    <h1>Tela Principal </h1>
                </section>

                <!-- Main content -->
                <section class="content"></section>
                <!-- /.content -->

                <!-- INICIO - Modal Cadastratro-->
                <div class="modal fade cadModal" tabindex="98" role="dialog" aria-labelledby="modalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content bg_white">
                            <div class="modal-header" name="">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><div aria-hidden="true">&times;</div></button>
                                <h4 class="modal-title"></h4>
                            </div>
                            <!--INICIO - Carrega o Formulario-->
                            <div class="modal-body"></div>
                            <!--INICIO - Carrega o Formulario-->
                        </div>
                    </div>
                </div>
                <!--FIM - Modal Cadastratro-->
                
                <!-- INICIO - Modal Webcam-->
                <div class="modal fade webCamModal" tabindex="99" role="dialog" aria-labelledby="modalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content bg_white">
                            <div class="modal-header" name="">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><div aria-hidden="true">&times;</div></button>
                                <h4 class="modal-title"></h4>
                            </div>
                            <!--INICIO - Carrega o Webcam-->
                            <div class="modal-body"></div>
                            <!--INICIO - Carrega o Webcam-->
                        </div>
                    </div>
                </div>
                <!--FIM - Modal Webcam-->
            </div><!-- /.content-wrapper -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                    Desenvolvimento <a href="http://www.rv6web.com.br"><b>RV6 Web</b></a>
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2015 <a href="#">All Condo</a>.</strong> Todos os direitos reservados.
            </footer>
        </div><!-- ./wrapper -->

        <script src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
        <script src="system/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <script src="system/bootstrap/js/bootstrap.min.js"></script>
        <script src="system/dist/js/app.min.js"></script>        
        <script src="js/jquery-ui.min.js"></script>        
        <script src="js/scriptcam.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>