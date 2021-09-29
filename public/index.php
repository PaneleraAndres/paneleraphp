<?php

  include_once './conexion.php'; 
          
       $conexionFinal = conexion::conexionDB();
       $result = $conexionFinal->query("select * from person");
       
       
       foreach ($result as $value) {
           echo $value['name'];
        }
  



       

?>