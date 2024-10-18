<?php
require(__DIR__ . '/../modelo/MEscudos.php');


require_once(__DIR__ . '/../vista/VEscudos.php');

$con= new MEscudos();
$escudos = $con->select_escudo($_GET["id"]);

$vista = new VEscudos;
$vista->inithtml();
$vista->formmodificar($escudos);
$vista->endhtml();
?>