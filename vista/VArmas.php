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
                    echo "</tr>";  
                }?>
            </tbody>  
         </table>    
    <?php }
}
?>