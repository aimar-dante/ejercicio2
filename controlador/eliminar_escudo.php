<?php
require(__DIR__ . '/../modelo/MEscudos.php');

session_start();
if (!isset($_SESSION['usuario_logueado'])) {
    header("Location: loginForm.php");
}

$con= new MEscudos();
$con->delete_escudo($_GET["id"]);
header("location: ver_escudos.php");
?>