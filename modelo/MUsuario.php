<?php

class MUsuario
{
    public static function tienePermiso($username, $password)
    {
        if ($username == "aimar" && $password == "aimar") {
            return true;
        }
        return false;
    }
}
