<?php
require(__DIR__ . '/../modelo/MArmas.php');

$con= new Marmas();
$con->delete_arma($_GET["id"]);
header("location: ver_armas.php");
?>