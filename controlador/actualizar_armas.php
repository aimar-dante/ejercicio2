<?php
require(__DIR__ . '/../modelo/MArmas.php');

$id=$_POST["id"];
$daño=$_POST["daño"];
$tipo=$_POST["tipo"];

$arma["id"]=$id;
$arma["daño"]=$daño;
$arma["tipo"]=$tipo;

$vista= new MArmas();
$vista->update_arma($arma);
header("location: ver_armas.php")
?>