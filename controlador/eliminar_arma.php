<?php
require(__DIR__ . '/../modelo/MArmas.php');

session_start();
if (!isset($_SESSION['usuario_logueado'])) {
    header("Location: loginForm.php");
}

$con= new Marmas();
$con->delete_arma($_GET["id"]);
header("location: ver_armas.php");
?>