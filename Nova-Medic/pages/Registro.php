<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/regis.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="https://kit.fontawesome.com/7bd74f70b2.js" crossorigin="anonymous"></script>
    <title>Nova Medic</title>
</head>
<body>
    <header class="header-box">
        <i class="fa-solid fa-bars" id="icono-menu"></i>
         <!--Logo y nombre-->
        <div class="logo-box">
            <a href="../index.html"><img src="../img/My project.png" class="logo-header"></a>
            <span class="title-header">NOVA MEDIC</span>
        </div>
         <!--Apartado de menu de sesiones-->
        <nav class="menu" id="menu">
            <ul class="opciones" >
                <a href="#" class="link"><li class="options">Registrarse</li></a>
                <a href="../pages/login.php" class="link"><li class="options">Iniciar sesión</li></a>
            </ul>
        </nav>
    </header>
    <script src="../js/menu.js"></script>
    <div class="filters"></div>


    <div class="div-form">
        <article class="form">
            <h1 class="title">Registro</h1>
            <?php
                if(isset($error)){
                    echo "<p>".$error."<p>";
                } 
            ?>
            <form method="post" action="../controlador/crtRegistro.php">
                <div class="nomsss">
                    <div class="div-noms">
                        <label for="">Nombre</label>
                        <input type="text" class="noms" name="nombre" required>
                        </div>
                        <div class="div-noms">
                            <label for="">Apellido</label>
                            <input type="text" class="noms" name="ape" required>
                        </div>
                </div>
                <fieldset class="fieldset-sex">
                    <legend>Sexo</legend>
                    <div>
                        <input type="radio" name="sex" value="hombre" required>
                        <label for="">Hombre</label>
                    </div>
                    <div>
                        <input type="radio" name="sex" value="mujer" required>
                        <label for="">Mujer</label>
                    </div>
                </fieldset>
                <div class="fech-div">
                    <label for="">Fecha de Nacimiento</label>
                    <input type="date" class="date" required min="1900-01-01" max="2022-12-31" name="fecha">
                </div>
                <fieldset class="fieldset-div">
                    <legend>Cuenta de inicio</legend>
                    <div class="div-count">
                        <div class="count-options">
                            <label for="">Correo</label>
                             <input type="email" class="count" name="mail" required>
                        </div>
            
                        <div class="count-options">
                            <label for="">Contraseña</label>
                            <input type="password" class="count" name="pass" required>
                        </div>
                    </div>
                </fieldset>
                <div class="botonsito">
                   <input type="submit" value="Siguiente" class="siguiente">
                </div>
            </form>
        </article>  
    </div>
    <footer class="footer-box">
        <div class="pages-footer">
            <div class="sociales">
                <img class="sociales-img" src="../img/facebook.png">
                <img class="sociales-img" src="../img/instragram.png">
                <img class="sociales-img" src="../img/twitter.png">
            </div>
            <div class="contacto">
                <h3>Correo</h3>
                <label for="">example@gmail.com</label>
                <h3>Telefono</h3>
                <label for="">0000-0000</label>
            </div>
            <span><b>NOVA MEDIC DERECHOS RESERVADOR &#169</b></span>
        </div>
        <!--
        <div class="empre" >
            <img src="../../img/logo2.png" class="sociales-img">
            <p class="parra">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>-->
    </footer>

</body>
</html>