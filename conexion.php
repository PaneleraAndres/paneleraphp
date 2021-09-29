<?php

class conexion {


    private static function conexionDB() {
        $conexion = new mysqli("127.0.0.1", "root", "", "panelera", "33061") or die("error en la conexion");
        return $conexion;
    }
    
    public function getConexion() {
        $getConexion = self::conexionDB();
        return $getConexion;
    }
}


?>

