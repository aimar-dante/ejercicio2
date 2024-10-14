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
        
    }
    public function insert_arma(){
        
    }
    public function update_arma($idarma){
        
    }
    public function delete_armas($idarma){
        
    }
}
?>