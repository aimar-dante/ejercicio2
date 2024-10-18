<?php
require(__DIR__ . '/../modelo/MEscudos.php');

$con= new MEscudos();
$con->delete_escudo($_GET["id"]);
header("location: ver_escudos.php");
?>