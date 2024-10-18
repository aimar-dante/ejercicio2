<?php
require(__DIR__ . '/../modelo/MEscudos.php');


session_start();
if (!isset($_SESSION['usuario_logueado'])) {
    header("Location: loginForm.php");
}

$daño=$_POST["defensa"];
$tipo=$_POST["tipo"];


$escudo["defensa"]=$daño;
$escudo["tipo"]=$tipo;

$vista= new MEscudos();
$vista->insert_escudo($escudo);
header("location: ver_escudos.php");
?>