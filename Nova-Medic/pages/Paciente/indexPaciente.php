<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/paciente.css">
    <link rel="stylesheet" type="text/css" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <script src="https://kit.fontawesome.com/7bd74f70b2.js" crossorigin="anonymous"></script>
    <title>Nova Medic</title>
    <?php
        require_once("../../modelo/class.conexion.php");
        require_once("../../modelo/class.cliente.php");
        require_once("../../modelo/class.sesion.php");
        $sesion = new Sesion();

        if(isset($_SESSION['cliente'])){
            header("location: ../Sesion/login.html");
        }
    ?>
</head>
<body>
    <header class="header-box">
        <i class="fa-solid fa-bars" id="icono-menu"></i>
         <!--Logo y nombre-->
        <div class="logo-box">
            <img src="../../img/My project.png" class="logo-header">
            <span class="title-header">NOVA MEDIC</span>
        </div>
         <!--Apartado de menu de sesiones-->
        <nav class="menu" id="menu">
            <ul class="opciones" >
                <a href="#" class="linkAct"><li class="optionA">Pagina Principal</li></a>
                <a href="#" class="link"><li class="options">Perfil</li></a>
                <a href="../../controlador/crtCerrarSesion.php" class="link"><li class="options">Cerrar sesión</li></a>
            </ul>
        </nav>
    </header>
    
    <script src="../../js/menu.js"></script>
    
    <div class="container">
        <div class="bntsPrinc">
            <a href="EmpezarConsulta.html"><button>Iniciar Consulta</button></a>
            <a href="#"><button>Chats</button></a>
        </div>
    </div>

    <footer class="footer-box">
        <div class="pages-footer">
            <div class="sociales">
                <img class="sociales-img" src="../../img/facebook.png">
                <img class="sociales-img" src="../../img/instragram.png">
                <img class="sociales-img" src="../../img/twitter.png">
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