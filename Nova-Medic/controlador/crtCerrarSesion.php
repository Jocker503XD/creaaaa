<?php
session_start();
?>
<?php
require_once("../modelo/class.sesion.php");
$sesion = new Sesion();

$sesion->cerrarSesion();
header("location: ../index.html");
?>