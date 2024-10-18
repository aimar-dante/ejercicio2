<?php

require_once 'Vista.php';

class VArmas extends Vista {
    public function tabla_armas($armas){ ?>
         <table class="table">  
            <thead>  
                <tr>  
                    <th>id</th>  
                    <th>dño</th>  
                    <th>tipo</th>  
                </tr>  
            </thead>  
            <tbody>  
                <?php foreach ($armas as $arma) {
                    echo "<tr>";  
                          echo "<td>".$arma["id"]."</td>";
                          echo "<td>".$arma["daño"]."</td>";
                          echo "<td>".$arma["tipo"]."</td>";
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

    function formcrear(){?>
        <form action="guardar_armas.php" method="post"> 
            <label>daño</label>
            <input type="number" name="daño"><br>
            <label>tipo</label>
            <input type="text" name="tipo"><br>
            <input type="submit" value=enviar>
        </form>
        <a href="ver_armas.php">volver</a>    
    <?php }

    function formmodificar($armas){?>
        <form action="actualizar_armas.php" method="post">
            <?php foreach ($armas as $arma) {
                echo "<input  type='number' name='id' value=$arma[id] style='display: none;'>";
                echo "<label>daño</label>";
                echo "<input type='number' name='daño' value=$arma[daño]><br>";
                echo "<label>tipo</label>";
                echo "<input type='text' name='tipo' value=$arma[tipo]><br>";   
            }?>
            <input type="submit" value=enviar>
        </form>
        <a href="ver_armas.php">volver</a>    
    <?php }

    function cabecera(){?>
        <a href="crear_armas.php">crear</a>
    <?php }
}
?>