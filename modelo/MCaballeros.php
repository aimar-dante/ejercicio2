<?php
require_once 'conexion.php';

class MCaballeros extends conexion{
    public function select_caballeros(){
        $query=$this->getcon()->query('SELECT * FROM `caballero`');

        $caballeros = [];

        while($fila = $query->fetch_assoc()){
            $caballeros[]=$fila;
        }

        return $caballeros;
    }
    public function select_caballero($idcaballero){
        $query=$this->getcon()->query("SELECT * FROM `caballero`where id=$idcaballero;");

        $caballero = [];

        while($fila = $query->fetch_assoc()){
            $caballero[]=$fila;
        }

        return $caballero;
        public function delete_arma($idcaballero){
            $query=$this->getcon()->query("DELETE FROM `caballero` WHERE id=$idcaballero;");
        }
    }
}
?>