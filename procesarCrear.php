<?php

require_once("database/cuidades.php");
require_once("database/restaurantes.php");
require_once("database/hoteles.php");
require_once("database/usuarios.php");
require_once("secciones/funciones.php");

/*
2 = cuidades
3 = hoteles
4 = restaurantes
*/


$nombreR = $_POST["name"];
$apellido = $_POST["surname"];
$email = $_POST["email"];
$password = $_POST["pass"];

if(empty($_POST["name"]) || empty($_POST["email"])  || empty($_POST["surname"]) || empty($_POST["pass"])){

      header("Location:index.php?seccion=registro&result=vacio");

}

foreach($usuarios as $usuario){
		
       if($usuario["email"] == $email){
   
           header("Location:index.php?seccion=registro&result=exist");
         
       } else {

            if(isset($_POST["nivel"]) && $usuario["email"] == $email ){

                  header("Location:panel.php?result=exist");

            }
       }
   
   }

if(!empty($nombreR) && !empty($apellido) && !empty($email) && !empty($password) && empty($nivel)){
      if(isset($_POST["nivel"])){
            $nivel = $_POST["nivel"];
            if ($nivel == "lugares"){

                  $id = ultimoId($usuarios) + 1;
            
                  $usuarios[] = ["id" => $id , "nombre" => $nombreR,"apellido" => $apellido, "email" => $email, "password" => password_hash($password,PASSWORD_DEFAULT), "rol" => 2];
            
                  $arrayJson = json_encode($usuarios);
            
                  file_put_contents("database/usuarios.json",$arrayJson);
                  header("Location:panel.php?result=registrado");
            } elseif ($nivel == "hoteles"){
                              $id = ultimoId($usuarios) + 1;

            $usuarios[] = ["id" => $id , "nombre" => $nombreR,"apellido" => $apellido, "email" => $email, "password" => password_hash($password,PASSWORD_DEFAULT), "rol" => 3];
      
            $arrayJson = json_encode($usuarios);
      
            file_put_contents("database/usuarios.json",$arrayJson);
            header("Location:index.php?seccion=registro&result=registrado");
      } elseif ($nivel == "restaurantes"){

                              $id = ultimoId($usuarios) + 1;

            $usuarios[] = ["id" => $id , "nombre" => $nombreR,"apellido" => $apellido, "email" => $email, "password" => password_hash($password,PASSWORD_DEFAULT), "rol" => 4];
      
            $arrayJson = json_encode($usuarios);
      
            file_put_contents("database/usuarios.json",$arrayJson);
            header("Location:index.php?seccion=registro&result=registrado");


                        }else{

                              if($nivel == "superUsuario") {

                                    $id = ultimoId($usuarios) + 1;

                                    $usuarios[] = ["id" => $id , "nombre" => $nombreR,"apellido" => $apellido, "email" => $email, "password" => password_hash($password,PASSWORD_DEFAULT), "rol" => 1];
                              
                                    $arrayJson = json_encode($usuarios);
                              
                                    file_put_contents("database/usuarios.json",$arrayJson);
                                    header("Location:index.php?seccion=registro&result=registrado");

                              }
                        }
      } else {

      $id = ultimoId($usuarios) + 1;

      $usuarios[] = ["id" => $id , "nombre" => $nombreR,"apellido" => $apellido, "email" => $email, "password" => password_hash($password,PASSWORD_DEFAULT), "rol" => 0];

      $arrayJson = json_encode($usuarios);

      file_put_contents("database/usuarios.json",$arrayJson);


      header("Location:index.php?seccion=registro&result=registrado");
      }
      
}

if (isset($_POST["nombre"]) && isset($_FILES["imagen"]) &&  isset($_POST["categoria"])) {
      $nombre = $_POST["nombre"];
      $imagen = $_FILES["imagen"];
      $categoria = $_POST["categoria"];
   
if($categoria == "Cuidades"){


$id = ultimoId($cuidades) + 1;



mkdir("imagenes/$categoria");


move_uploaded_file($imagen["tmp_name"],"imagenes/".$categoria."/".time().".jpg");




$cuidades[] = ["id" => $id, "nombre" => $nombre, "categoria" => $categoria, "imagen" => "imagenes/$categoria/".time().".jpg"];

$arrayJson = json_encode($cuidades);

file_put_contents("database/cuidades.json",$arrayJson);


header("Location:panel.php");
} elseif ($categoria == "Restaurantes") {


    $id = ultimoId($restaurantes) + 1;



    mkdir("imagenes/$categoria");
    
    
    move_uploaded_file($imagen["tmp_name"],"imagenes/".$categoria."/".time().".jpg");
    
    
    
    
    $restaurantes[] = ["id" => $id, "nombre" => $nombre, "categoria" => $categoria, "imagen" => "imagenes/$categoria/".time().".jpg"];
    
    $arrayJson = json_encode($restaurantes);
    
    file_put_contents("database/restaurantes.json",$arrayJson);
    
    
    header("Location:panel.php");

} else {


      if ($categoria == "Hoteles") {

        
$id = ultimoId($hoteles) + 1;



mkdir("imagenes/$categoria");


move_uploaded_file($imagen["tmp_name"],"imagenes/".$categoria."/".time().".jpg");




$hoteles[] = ["id" => $id, "nombre" => $nombre, "categoria" => $categoria, "imagen" => "imagenes/$categoria/".time().".jpg"];

$arrayJson = json_encode($hoteles);

file_put_contents("database/hoteles.json",$arrayJson);


header("Location:panel.php");
	
      }
}
}
      

?>
