<?php
require_once("database/usuarios.php");
session_start();
$usuario = $_POST["email"];
$password = $_POST["pass"];
$us="";



foreach($usuarios as $ind => $usr){
    
    if($usr["email"] == $usuario){

        if(password_verify($password,$usr["password"])){
  
       
            $us = $usr;
            
            
        }
        
    }
    
}




if(empty($us)){
    $_SESSION["login"] = "error";
   /// header("Location:../index.php?seccion=registro");
   // die();
}

$_SESSION["email"] = $us["email"];
$_SESSION["rol"]  = $us["rol"];
$_SESSION["nombre"]  = $us["nombre"];




if($us["rol"] == 1){
    header("Location:panel.php");
}else{
    header("Location:index.php");
    
}


?>
 
 
