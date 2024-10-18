<?php

class Vista {

    public static function inithtml() {?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi Aplicación MVC</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </head>
        <body>
        <div class="container">
    <?php }

    public static function menu() {?>
        <nav>
            <a href="ver_armas.php"><button>armas</button></a>
            <a href="ver_escudos.php"><button>escudos</button></a>
            <a href="logout.php" class="btn btn-danger">Cerrar sesión</a>
        </nav>
    <?php }

    public static function endhtml() {?>
        </div> <!-- cierre de div container -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>
    <?php }

    public static function formLogin() {?>
        <form action="login.php" method="post" class="mt-4">
        <div class="mb-3">
        <label for="username" class="form-label">Nombre de usuario</label>
        <input type="text" id="username" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
    <?php }

    public static function desktop(){?>
        <div>
        <h1>Bienvenido al sistema, <?=$_SESSION['usuario_logueado']?></h1>
        </div>
    <?php } 
}
?>