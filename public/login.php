<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>actividad 11</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    </head>
    <body>
        <div class="vh-100 w-100 border border-primary">
        <div class="float-start" style="position:absolute;"><img src="img/logo.png" alt=""></div>
            <div class="h-100 w-25 mx-auto " style="display: flex; align-items: center; " >
                <form class=" shadow-lg p-3 mb-5 bg-body rounded w-75 mx-auto" style="" action="" method="POST">
                    <div class="mb-3">
                        <label for="InputUser" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="InputUser" >
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <?Php
                    include_once './dataBase/conexion.php';
                    $conexion = new conexion();
                ?>
            </div>
        </div>
    </body>
</html>
