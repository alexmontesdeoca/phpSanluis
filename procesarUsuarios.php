<?php
require_once("database/usuarios.php");
session_start();
$usuario = $_POST["email"];
$password = $_POST["pass"];
$us="";

$errores = "";
$enviado = "";




if(empty($password) || empty($usuario) ){

    header("Location:index.php?seccion=inicio&result=true");

}


if (!empty($password) && !empty($usuario)) {

foreach($usuarios as $ind => $usr){
    
    if($usr["email"] == $usuario){

        if(password_verify($password,$usr["password"])){
  
       
            $us = $usr;
            
            $_SESSION["email"] = $us["email"];
            $_SESSION["rol"]  = $us["rol"];
            $_SESSION["nombre"]  = $us["nombre"];
            $_SESSION["id"]  = $us["id"];
            
            if($us["rol"]==0){

                header("Location:index.php");

            } else {

                if($us["rol"]!=0){


                    header("Location:panel.php");
            }
           


        } 
        
    } else {

        header("Location:index.php?seccion=inicio&result=exist");

    }
    
}
}}



?>
 
 
