<?php

require_once 'Vista.php';

class VCaballeros extends Vista {
    public function tabla_cabelleros($caballeros){ ?>
         <table class="table">  
            <thead>  
                <tr>  
                    <th>id</th>  
                    <th>nombre</th>  
                    <th>fuerza</th>  
                    <th>nivel</th>  
                    <th>id arma</th>
                    <th>id escudo</th>
                </tr>  
            </thead>  
            <tbody>  
                <?php foreach ($caballeros as $caballero) {
                    echo "<tr>";  
                          echo "<td>$caballero[id]</td>";
                          echo "<td>$arma[daño]</td>";
                          echo "<td>$arma[tipo]</td>";
                          echo "<td><a href='ver_arma.php?id=$arma[id]'>Ver</a> | <a href='modificar_arma.php?id=$arma[id]'>Editar</a> | <a href='eliminar_arma.php?id=$arma[id]'>Eliminar</a></td>";
                    echo "</tr>";  
                }?>
            </tbody>  
         </table>    
    <?php }
    
    public function tabla_arma($armas){?>
            <table class="table">  
            <thead>  
                <tr>  
                    <th>id</th>  
                    <th>dño</th>  
                    <th>tipo</th>  
                </tr>  
            </thead>  
            <tbody>  
                <tr> 
                <?php foreach ($armas as $arma) {
                   echo "<td>$arma[id]</td>";
                   echo "<td>$arma[daño]</td>";
                   echo "<td>$arma[tipo]</td>";
                   echo "<td><a href='ver_arma.php?id=$arma[id]'>Ver</a> | <a href='modificar_arma.php?id=$arma[id]'>Editar</a> | <a href='eliminar_arma.php?id=$arma[id]'>Eliminar</a></td>";
                }?> 
                </tr> 
            </tbody>  
         </table>
         <a href="ver_armas.php">volver</a>    
    <?php }

?>
