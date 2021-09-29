

<?php

  include_once './conexion.php'; 
       
        $conexion = new conexion();
        $getConexion = $conexion->getConexion();
  
       $result = $getConexion->query("select * from person");
       
       
       foreach ($result as $value) {
           echo $value['name'];
        }
  



       

?>