<?php

  include_once './conexion.php'; 
           
       $result = $conexionFinal->query("select * from person");
       
       
       foreach ($result as $value) {
           echo $value['name'];
        }
  



       

?>