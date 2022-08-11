<!DOCTYPE html>
<html lang="zxxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>PhotoPlace - Photography Blog</title>

    <!-- Favicon -->
    <link rel="icon" href="../Design/Web-Design/img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="../Design/Web-Design/style.css">

    <?php
     $_SESSION['username'] = $this->usuario_model->username;
    ?>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Breaking News Area -->
                    <div class="col-12 col-sm-8">
                        <div class="breaking-news-area">
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                <li><a href="#">Hola    ! <?php echo $_SESSION['username'] ?></a></li>
                                <li><a href="#">Hello   ! <?php echo $_SESSION['username'] ?></a></li>
                                <li><a href="#">Bonjour ! <?php echo $_SESSION['username'] ?></a></li>
                                <li><a href="#">Hallo   ! <?php echo $_SESSION['username'] ?></a></li>
                                <li><a href="#">Ciao    ! <?php echo $_SESSION['username'] ?></a></li>
                                <li><a href="#">Olá    ! <?php echo $_SESSION['username'] ?></a></li>
                                <li><a href="#">привет    ! <?php echo $_SESSION['username'] ?></a></li>
                                <li><a href="#">Cześć    ! <?php echo $_SESSION['username'] ?></a></li>
                                <li><a href="#">Namaste    ! <?php echo $_SESSION['username'] ?></a></li>
                                <li><a href="#">Aloha    ! <?php echo $_SESSION['username'] ?></a></li>
                                <li><a href="#">Ni Hao    ! <?php echo $_SESSION['username'] ?></a></li>
                                <li><a href="#">Konnichi wa    ! <?php echo $_SESSION['username'] ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top Social Area -->
                    <div class="col-12 col-sm-4">
                        <div class="top-social-area">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo Area -->
        <div class="logo-area text-center">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <a href="?c=Usuario&a=Menu&username=<?php echo $_SESSION['username'] ?>" class="original-logo"><img src="../Design/Web-Design/img/core-img/logo.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nav Area -->
        <div class="original-nav-area" id="stickyNav">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between">

                        <!-- Subscribe btn -->
                        <div class="subscribe-btn">
                            <a href="?c=Usuario&a=Subir&username=<?php echo $_SESSION['username'] ?>" class="btn subscribe-btn" >Sube Tu Post</a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu" id="originalNav">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul> 
                                    <li><a href="#">Perfil</a>
                                        <ul class="dropdown">
                                        <li><a href="?c=Usuario&a=Editar&username=<?php echo $_SESSION['username'] ?>">Editar Perfil</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="?c=Usuario&a=Salir">Salir de PhotoPlace</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->