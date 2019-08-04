<?php
require_once("database/usuarios.php");
require_once("secciones/funciones.php");

$nombre = $_POST["name"];
$apellido = $_POST["surname"];
$email = $_POST["email"];
$password = $_POST["pass"];

$id = ultimoId($usuarios) + 1;
$pass = password_hash($password,PASSWORD_DEFAULT);

$usuarios = ["id" => $id, "nombre" => $nombre, "apellido" => $apellido, "email" => $email, "password" => $pass, "rol" => 0];


$json = json_encode($usuarios);

file_put_contents("database/usuarios.json",$json);

if(file_put_contents("database/usuarios.json",$json)){
    header("Location:index.php?seccion=index");
    
}else{
    header("Location:index.php?seccion=registro");
}

?>
