<?php
require_once(__DIR__ . '/../vista/VArmas.php');

session_start();
if (!isset($_SESSION['usuario_logueado'])) {
    header("Location: loginForm.php");
}

$vista = new VArmas;
Vista::inithtml();
$vista->formcrear();
Vista::endhtml();
?>