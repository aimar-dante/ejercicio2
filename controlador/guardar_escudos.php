<?php
require(__DIR__ . '/../modelo/MEscudos.php');


$daño=$_POST["defensa"];
$tipo=$_POST["tipo"];


$escudo["defensa"]=$daño;
$escudo["tipo"]=$tipo;

$vista= new MEscudos();
$vista->insert_escudo($escudo);
header("location: ver_escudos.php");
?>