<?php
require_once(__DIR__ . '/../vista/VEscudos.php');

session_start();
if (!isset($_SESSION['usuario_logueado'])) {
    header("Location: loginForm.php");
}

$vista = new VEscudos;
Vista::inithtml();
$vista->formcrear();
Vista::endhtml();
?>