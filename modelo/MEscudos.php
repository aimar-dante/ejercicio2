<?php
require_once 'conexion.php';

class MEscudos extends conexion{
    public function select_escudos(){
        $query=$this->getcon()->query('SELECT * FROM `escudo`');

        $armas = [];

        while($fila = $query->fetch_assoc()){
            $armas[]=$fila;
        }

        return $armas;
    }
    public function select_escudo($idescudo){
        $query=$this->getcon()->query("SELECT * FROM `escudo` where id=$idescudo;");

        $arma = [];

        while($fila = $query->fetch_assoc()){
            $arma[]=$fila;
        }

        return $arma;
    }

    public function insert_escudo($escudo){
        $query=$this->getcon()->prepare("INSERT INTO `escudo`(`defensa`, `tipo`) VALUES (?, ?)");
        $query->bind_param("is",$escudo["defensa"], $escudo["tipo"]);
        $query->execute();
        $query->close();
    }

    public function update_escudo($escudo){
        $query=$this->getcon()->prepare("UPDATE `escudo` SET `defensa`= ?, `tipo`= ? WHERE id= ?");
        $query->bind_param("isi", $escudo["defensa"], $escudo["tipo"], $escudo["id"]);
        $query->execute();
        $query->close();
    }

    public function delete_escudo($idescudo){
        $query=$this->getcon()->query("DELETE FROM `escudo` WHERE id=$idescudo;");
    }
}
?>