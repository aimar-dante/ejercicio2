<?php
require(__DIR__ . '/../modelo/MEscudos.php');


require_once(__DIR__ . '/../vista/VEscudos.php');

session_start();
if (!isset($_SESSION['usuario_logueado'])) {
    header("Location: loginForm.php");
}

$con= new MEscudos();
$escudos = $con->select_escudos();

$vista = new VEscudos;
Vista::inithtml();
Vista::menu();
$vista->cabecera();
$vista->tabla_escudos($escudos);
Vista::endhtml();
?>