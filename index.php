<?php
//session_start();
require ('./_app/Config.inc.php');
//unset($_SESSION['userlogin']);
?>
<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <title>All Condo - Login</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="system/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="system/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="system/dist/css/skins/skin-blue.min.css">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body class="bg_login">
        <div class = "bg_login"></div>
        <div class="login-box">
            <div class="login-logo">
                <a href="index.php"><i class="fa fa-area-chart"></i><b> All</b> Condo</a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <?php
//                $login = new Login(3);
//
//                if ($login->CheckLogin()):
//                    header('Location: painel.php');
//                endif;
//
//                $dataLogin = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//                if (!empty($dataLogin['AdminLogin'])):
//
//                    $login->ExeLogin($dataLogin);
//                    if (!$login->getResult()):
//                        WSErro($login->getError()[0], $login->getError()[1]);
//                    else:
//                        header('Location: painel.php');
//                    endif;
//                endif;
//
//                $get = filter_input(INPUT_GET, 'exe', FILTER_DEFAULT);
//                if (!empty($get)):
//                    if ($get == 'restrito'):
//                        WSErro('<b>Oppsss:</b> Acesso negado. Efetue login para acessar o painel!', WS_ALERT);
//                    elseif ($get == 'logoff'):
//                        WSErro('<b>OK:</b> Sua sessão foi finalizada. Volte sempre!', WS_ACCEPT);
//                    endif;
//                endif;
                ?>

                <form name="AdminLoginForm" action="" method="post">
                    <div class="form-group has-feedback">
                        <input type="text" name="user" class="form-control" placeholder="Login" />
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <input type="password" name="pass" class="form-control" placeholder="Senha" />
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>

                    <input type="submit" name="AdminLogin" class="btn btn-primary btn-block btn-flat" value="Acessar" />

                </form>
                <p>
                    <br>
                    <a href="#">Esqueci minha senha!</a><br>
                </p>
            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->


        <script src="system/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <script src="system/bootstrap/js/bootstrap.min.js"></script>
        <script src="system/dist/js/app.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>