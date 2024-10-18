<?php
require(__DIR__ . '/../modelo/MArmas.php');


require_once(__DIR__ . '/../vista/VArmas.php');

$con= new Marmas();
$armas = $con->select_arma($_GET["id"]);

session_start();
if (!isset($_SESSION['usuario_logueado'])) {
    header("Location: loginForm.php");
}

$vista = new VArmas;
Vista::inithtml();
$vista->formmodificar($armas);
Vista::endhtml();
?>