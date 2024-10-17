<?php

require_once 'Vista.php';

class VArmas extends Vista {
    public function tabla_armas($armas){ ?>
         <table class="table">  
            <thead>  
                <tr>  
                    <th>Nombre de usuario</th>  
                    <th>Nombre</th>  
                    <th>Contraseña</th>  
                </tr>  
            </thead>  
            <tbody>  
                <?php foreach ($armas as $arma) {
                    echo "<tr>";  
                          echo "<td>".$arma["id"]."</td>";
                          echo "<td>".$arma["daño"]."</td>";
                          echo "<td>".$arma["tipo"]."</td>";
                          echo "<td><a href='ver_arma.php?id=".$arma["id"]."'>Ver</a> | <a href='.php?id='".$arma["id"]."'>Editar</a> | <a href='.php?id='".$arma["id"]."'>Eliminar</a></td>";
                    echo "</tr>";  
                }?>
            </tbody>  
         </table>    
    <?php }
    public function tabla_arma($armas){?>
            <table class="table">  
            <thead>  
                <tr>  
                    <th>Nombre de usuario</th>  
                    <th>Nombre</th>  
                    <th>Contraseña</th>  
                </tr>  
            </thead>  
            <tbody>  
                <tr> 
                <?php foreach ($armas as $arma) {
                   echo "<td>".$arma["id"]."</td>";
                   echo "<td>".$arma["daño"]."</td>";
                   echo "<td>".$arma["tipo"]."</td>";
                   echo "<td><a href='.php?id='".$arma["id"]."'>Editar</a> | <a href='.php?id='".$arma["id"]."'>Eliminar</a></td>";
                }?> 
                </tr> 
            </tbody>  
         </table>
         <a href="ver_armas.php">volver</a>    
    <?php }
}
?>