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

        $armas = [];

        while($fila = $query->fetch_assoc()){
            $armas[]=$fila;
        }

        return $armas;
    }
    public function insert_arma($armas){
        $query=$this->getcon()->query("INSERT INTO `arma`(`id`, `daño`, `tipo`) VALUES (?,?,?);");
        $query->bind_param("iis",$armas["id"],$armas["daño"],$armas["tipo"]);
    }
    public function update_arma($armas){
        $query=$this->getcon()->query("UPDATE `arma` SET `daño`=?,`tipo`=? WHERE id=?;");
        $query->bind_param("isi",$armas["id"],$armas["daño"],$armas["tipo"],$armas["id"]);
    }
    public function delete_arma($idarma){
        $query=$this->getcon()->query("DELETE FROM `arma` WHERE id=$idarma;");
    }
}
?>