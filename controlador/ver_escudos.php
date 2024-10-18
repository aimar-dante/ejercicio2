<?php
require(__DIR__ . '/../modelo/MEscudos.php');


require_once(__DIR__ . '/../vista/VEscudos.php');

$con= new MEscudos();
$escudos = $con->select_escudos();

$vista = new VEscudos;
$vista->inithtml();
$vista->cabecera();
$vista->tabla_escudos($escudos);
$vista->endhtml();
?>