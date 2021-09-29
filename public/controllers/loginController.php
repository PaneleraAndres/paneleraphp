<?php

include __DIR__ . '/../dataBase/conexion.php';

function logear($user, $pass) {
    $rol=0;
    $conexion = new conexion();
    $consulta = $conexion->conexionDB();
    $resultado = $consulta->query("SELECT user_name, pass, role FROM users where user_name = '$user' and pass = '$pass'")or di("error");
    foreach ($resultado as $value) {
        
        $rol = $value['role'];
    }
    if ($rol==1) {
        echo 'admin';
    } else {
        if ($rol==2) {
            echo 'User';
        }
    }
}

?>