<?php

/*2 = cuidades
3 = hoteles
4 = restaurantes*/
    require_once("database/usuarios.php");
 
    session_start();   

	if(empty($_SESSION["id"])){
		header("index.php?seccion=miPerfil");
		die();
	}
	
	$id =  $_SESSION['id'];

    if (empty($_POST['pass']) || empty($_POST['name']) || empty($_POST['email'])  || empty($_POST['surname'])  ){

        header("location:index.php?seccion=miPerfil&result=vacio");

    }


    if (!empty($_POST['pass']) || !empty($_POST['name']) || !empty($_POST['email'])  || !empty($_POST['surname'])  ){
{    
	foreach($usuarios as $indice => $usuario){
		
		if($usuario["id"] == $id){
			$ind = $indice;
            $usuarioEditar = $usuario;	
           
		}
    }
    
    if (!empty($_POST['pass'])){
        $pass = $_POST['pass'];
        password_hash($pass,PASSWORD_DEFAULT);
        
        $usuarios[$ind]["password"] = password_hash($pass,PASSWORD_DEFAULT);

    } else {

        $usuarios[$ind]["password"] = $usuarios[$ind]["password"] ;

    }


    if (!empty($_POST['name'])){
        $nombre = $_POST['name'];
        $usuarios[$ind]["nombre"] = $nombre;


    } else {

        $usuarios[$ind]["nombre"] = $usuarios[$ind]["nombre"] ;

    }
        

    if (!empty($_POST['surname'])) {


        $apellido = $_POST['surname'];
        $usuarios[$ind]["apellido"] = $apellido;

    } else {

        $usuarios[$ind]["apellido"] = $usuarios[$ind]["apellido"] ;

    }
    
    
    if (!empty($_POST['email'])){

        $email = $_POST['email'];
        $usuarios[$ind]["email"] = $email;

    } else {

        $usuarios[$ind]["email"] = $usuarios[$ind]["email"] ;
    }
	$json = json_encode($usuarios);
	
    file_put_contents("database/usuarios.json",$json);
    
    header("location:index.php?seccion=miPerfil&result=cambios");

}}

    
?>