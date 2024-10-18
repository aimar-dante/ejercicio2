<?php
require(__DIR__ . '/../modelo/MArmas.php');


require_once(__DIR__ . '/../vista/VArmas.php');

session_start();
if (!isset($_SESSION['usuario_logueado'])) {
    header("Location: loginForm.php");
}

$con= new Marmas();
$armas = $con->select_armas();

$vista = new VArmas;
Vista::inithtml();
Vista::menu();
$vista->cabecera();
$vista->tabla_armas($armas);
Vista::endhtml();
?>