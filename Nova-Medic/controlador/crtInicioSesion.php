<?php
require_once('../modelo/class.conexion.php');
require_once('../modelo/class.cliente.php');
require_once('../modelo/class.sesion.php');

session_start();
$clnt = new Cliente;
$sesion = new Sesion;

$mail = isset($_POST['mail'])?$_POST['mail']:"";
$pass = isset($_POST['pass'])?$_POST['pass']:"";

if(isset($_SESSION['cliente'])){
    //$clnt->setCliente($_SESSION['cliente']);
    header("location: ../pages/paciente/indexPaciente.php");

}else if(isset($_SESSION['doctor'])){
    header("location: ../pages/Doctor/indexDoctor.php");
    
}else if(isset($_SESSION['admin'])){
    header("location: ../pages/paciente/indexAdmin.php");

}else if($clnt->searchCliente($mail,md5($pass))){
    $clnt->setCliente($mail);
    $sesion->setClienteActual($clnt->getId());
    header("location: ../pages/paciente/indexPaciente.php");
}else{
    $errorLog = "Error. Correo o contraseña son incorrectos";
    include_once("../pages/login.php");
}

?>