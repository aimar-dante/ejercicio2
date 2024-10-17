<?php
require(__DIR__ . '/../modelo/MArmas.php');


require_once(__DIR__ . '/../vista/VArmas.php');

$con= new Marmas();
$armas = $con->select_arma($_GET["id"]);

$vista = new VArmas;
$vista->inithtml();
$vista->cabecera();
$vista->tabla_arma($armas);
$vista->endhtml();
?>