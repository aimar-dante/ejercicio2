<?php

require_once 'Vista.php';

class VEscudos extends Vista {
    public function tabla_escudos($escudos){ ?>
         <table class="table">  
            <thead>  
                <tr>  
                    <th>id</th>  
                    <th>defensa</th>  
                    <th>tipo</th>  
                </tr>  
            </thead>  
            <tbody>  
                <?php foreach ($escudos as $escudo) {
                    echo "<tr>";  
                          echo "<td>$escudo[id]</td>";
                          echo "<td>$escudo[defensa]</td>";
                          echo "<td>$escudo[tipo]</td>";
                          echo "<td><a href='ver_escudo.php?id=$escudo[id]'>Ver</a> | <a href='modificar_escudo.php?id=$escudo[id]'>Editar</a> | <a href='eliminar_escudo.php?id=$escudo[id]'>Eliminar</a></td>";
                    echo "</tr>";  
                }?>
            </tbody>  
         </table>    
    <?php }
    
    public function tabla_escudo($escudos){?>
            <table class="table">  
            <thead>  
                <tr>  
                    <th>id</th>  
                    <th>defensa</th>  
                    <th>tipo</th>  
                </tr>  
            </thead>  
            <tbody>  
                <tr> 
                <?php foreach ($escudos as $escudo) {
                   echo "<td>$escudo[id]</td>";
                   echo "<td>$escudo[defensa]</td>";
                   echo "<td>$escudo[tipo]</td>";
                   echo "<td><a href='modificar_escudo.php?id=$escudo[id]'>Editar</a> | <a href='eliminar_escudo.php?id=$escudo[id]'>Eliminar</a></td>";
                    echo "</tr>";  
                }?> 
                </tr> 
            </tbody>  
         </table>
         <a href="ver_escudos.php">volver</a>    
    <?php }

    function formcrear(){?>
        <form action="guardar_escudos.php" method="post"> 
            <label>defensa</label>
            <input type="number" name="defensa"><br>
            <label>tipo</label>
            <input type="text" name="tipo"><br>
            <input type="submit" value=enviar>
        </form>
        <a href="ver_escudos.php">volver</a>   
    <?php }

    function formmodificar($escudos){?>
        <form action="actualizar_escudos.php" method="post">
            <?php foreach ($escudos as $escudo) {
                echo "<input  type='number' name='id' value=$escudo[id] style='display: none;'>";
                echo "<label>defensa</label>";
                echo "<input type='number' name='defensa' value=$escudo[defensa]><br>";
                echo "<label>tipo</label>";
                echo "<input type='text' name='tipo' value=$escudo[tipo]><br>";   
            }?>
            <input type="submit" value=enviar>
        </form>
        <a href="ver_escudos.php">volver</a>   
    <?php }

    function cabecera(){?>
        <a href="crear_escudos.php">crear</a>
    <?php }
}
?>