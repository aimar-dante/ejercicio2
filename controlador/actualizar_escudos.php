<?php
require(__DIR__ . '/../modelo/MEscudos.php');

session_start();
if (!isset($_SESSION['usuario_logueado'])) {
    header("Location: loginForm.php");
}

$id=$_POST["id"];
$daño=$_POST["defensa"];
$tipo=$_POST["tipo"];

$escudo["id"]=$id;
$escudo["defensa"]=$daño;
$escudo["tipo"]=$tipo;

$vista= new MEscudos();
$vista->update_escudo($escudo);
header("location: ver_escudos.php");
?>