<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of seguridad
 *
 * @author Andres1
 */
class seguridad {
    
    private $user=null;
    
    function __construct() {
        session_start();
    if (isset($_SESSION['user'])) $this->$user=$_SESSION['user'];   
    
        
    }
    
    public function  getUser(){
         return $user;
    }
    
}
