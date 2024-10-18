<?php
require_once(__DIR__ . '/../vista/VEscudos.php');

$vista = new VEscudos;
$vista->inithtml();
$vista->formcrear();
$vista->endhtml();
?>