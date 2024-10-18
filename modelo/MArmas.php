<?php
require_once 'conexion.php';

class MArmas extends conexion{
    public function select_armas(){
        $query=$this->getcon()->query('SELECT * FROM `arma`');

        $armas = [];

        while($fila = $query->fetch_assoc()){
            $armas[]=$fila;
        }

        return $armas;
    }
    public function select_arma($idarma){
        $query=$this->getcon()->query("SELECT * FROM `arma` where id=$idarma;");

        $arma = [];

        while($fila = $query->fetch_assoc()){
            $arma[]=$fila;
        }

        return $arma;
    }

    public function insert_arma($arma){
        $query=$this->getcon()->prepare("INSERT INTO `arma`( `daño`, `tipo`) VALUES (?, ?)");
        $query->bind_param("is",$arma["daño"], $arma["tipo"]);
        $query->execute();
        $query->close();
    }

    public function update_arma($arma){
        $query=$this->getcon()->prepare("UPDATE `arma` SET `daño`= ?, `tipo`= ? WHERE id= ?");
        $query->bind_param("isi", $arma["daño"], $arma["tipo"], $arma["id"]);
        $query->execute();
        $query->close();
    }

    public function delete_arma($idarma){
        $query=$this->getcon()->query("DELETE FROM `arma` WHERE id=$idarma;");
    }
}
?>