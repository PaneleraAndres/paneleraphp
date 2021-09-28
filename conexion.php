<?php

class conexion {


    public static function conexionDB() {
        $conexion = new mysqli("127.0.0.1", "root", "", "panelera", "33061") or die("error en la conexion");
        return $conexion;
    }

}

$conexionFinal = conexion::conexionDB();
?>

