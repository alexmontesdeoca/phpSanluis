<?php
session_start();

require_once("database/usuarios.php");

$usuario = $_POST["usuario"];
$password = $_POST["password"];

foreach($usuarios as $ind => $usr){
    
    if($usr["usuario"] == $usuario){

        if(password_verify($password,$usr["password"])){
  
            $us = $usr;
            
        }
        
    }
    
}

if(empty($us)){
    header("Location:index.php?cargar=registro");
    die();
}

$_SESSION["usuario"] = $us;

if($us["rol"] === 1){
   echo $us["rol"];
}else{
    echo $us["rol"];    
    
}


