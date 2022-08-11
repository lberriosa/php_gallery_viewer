<!DOCTYPE html>
<html lang="zxxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Title -->
    <title>PhotoPlace - Photography Blog</title>

    <!-- Favicon -->
    <link rel="icon" href="../Design/Web-Design/img/core-img/favicon.ico">

    <!-- Font Icon -->
    <link rel="stylesheet" href="../Design/Login-Design/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../Design/Login-Design/css/style.css">
</head>
<body>

    <div class="main">


        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../Design/Login-Design/images/login_1.jpg" alt="sing up image"></figure>
                        <a href="?c=Usuario&a=Nuevo" class="signup-image-link">Crear una cuenta</a>
                        <a href="../index.php" class="signup-image-link">Volver a Inicio</a>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Ingresar</h2>
                        <form method="POST" class="register-form" id="login-form" action="?c=Usuario&a=Ingresar">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Usuario"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Contraseña"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Ingresar"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">O ingresa con</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="../Design/Login-Design/vendor/jquery/jquery.min.js"></script>
    <script src="../Design/Login-Design/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
