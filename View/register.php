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
    <!-- Sign up form -->
    <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registrate</h2>
                        <form method="POST" class="register-form" id="register-form" action="?c=Usuario&a=Agregar">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Usuario"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Correo Electronico"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Contraseña"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repita su contraseña"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Registrar"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../Design/Login-Design/images/logo_3.jpg" alt="sing up image"></figure>
                        <a href="?c=Usuario&a=Inicio" class="signup-image-link">Ya Estoy Registrado/a</a>
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
