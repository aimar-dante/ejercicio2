<?php
require(__DIR__ . '/../modelo/MArmas.php');

$id=$_POST["id"];
$daño=$_POST["daño"];
$tipo=$_POST["tipo"];
$existe=false;

$vista= new MArmas();
$armas=$vista->select_armas();
foreach($armas as $iden){
    if($iden["id"]=="id"){
        $existe=true;
    }
}
if($existe==false){
    $arma["id"]=$id;
    $arma["daño"]=$daño;
    $arma["tipo"]=$tipo;

    $vista->insert_arma($arma);
}
?>