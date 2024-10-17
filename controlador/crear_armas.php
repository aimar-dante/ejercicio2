<?php
require_once(__DIR__ . '/../vista/VArmas.php');
$vista = new VArmas;
$vista->inithtml();
$vista->formcrear();
$vista->endhtml();
?>