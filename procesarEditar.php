<?php

2 = cuidades
3 = hoteles
4 = restaurantes
    require_once("database/cuidades.php");
    require_once("database/hoteles.php");
    require_once("database/restaurantes.php");
   
	$categoria = $_POST["categoria"];
	
    

    if( $categoria == 1){

        $categoria = "Cuidades";
	if(empty($_POST["id"])){
		header("Location:panel.php");
		die();
	}
	
	$id = $_POST["id"];

	foreach($cuidades as $indice => $cuidad){
		
		if($cuidad["id"] == $id){
			$ind = $indice;
			$cuidadEditar = $cuidad;	
		}
	}
	
	if(!isset($cuidadEditar)){
		header("Location:panel.php");
		die();
	}
	
	//recien acá puedo usar esa película.
	
	$nombre = $_POST["nombre"];

	if($_FILES["imagen"]["size"] > 0){
		$imagen = "imagenes/Cuidades/".time().".jpg";
		
		move_uploaded_file($_FILES["imagen"]["tmp_name"],$imagen);
		
		//con esto borramos la imagen vieja.
		unlink($cuidadEditar["imagen"]);
		
		//echo $cuidadEditar["imagen"];
		
		
	}else{
		$imagen = $cuidadEditar["imagen"];
	}
	
	

	$cuidades[$ind]["nombre"] = $nombre;
	$cuidades[$ind]["categoria"] = $categoria;
	$cuidades[$ind]["imagen"] = $imagen;
	
	$json = json_encode($cuidades);
	
	file_put_contents("database/cuidades.json",$json);
	
	

	header("Location:panel.php");
	
    } elseif( $categoria == 3){
        
        $categoria = "Restaurantes";

    if(empty($_POST["id"])){
		header("Location:panel.php");
		die();
	}
	
	$id = $_POST["id"];

	foreach($restaurantes as $indice => $restaurante){
		
		if($restaurante["id"] == $id){
			$ind = $indice;
			$restauranteEditar = $restaurante;	
		}
	}
	
	if(!isset($restauranteEditar)){
		header("Location:panel.php");
		die();
	}
	
	//recien acá puedo usar esa película.
	
	$nombre = $_POST["nombre"];

	
	if($_FILES["imagen"]["size"] > 0){
		$imagen = "imagenes/Restaurantes/".time().".jpg";
		
		move_uploaded_file($_FILES["imagen"]["tmp_name"],$imagen);
		
		//con esto borramos la imagen vieja.
		unlink($restauranteEditar["imagen"]);
		
		//echo $cuidadEditar["imagen"];
		
		
	}else{
		$imagen = $restauranteEditar["imagen"];
	}
	
	

	$restaurantes[$ind]["nombre"] = $nombre;
	$restaurantes[$ind]["categoria"] = $categoria;
	$restaurantes[$ind]["imagen"] = $imagen;
	
	$json = json_encode($restaurantes);
	
	file_put_contents("database/restaurantes.json",$json);
	
	

	header("Location:panel.php");

}   else {

    if($categoria == 2){
        $categoria = "Hoteles";
        if(empty($_POST["id"])){
            header("Location:panel.php");
            die();
        }
        
        $id = $_POST["id"];
    
        foreach($hoteles as $indice => $hotel){
            
            if($hotel["id"] == $id){
                $ind = $indice;
                $hotelEditar = $hotel;	
            }
        }
        
        if(!isset($hotelEditar)){
            header("Location:panel.php");
            die();
        }
        
        //recien acá puedo usar esa película.
        
        $nombre = $_POST["nombre"];

        
        if($_FILES["imagen"]["size"] > 0){
            $imagen = "imagenes/Hoteles/".time().".jpg";
            
            move_uploaded_file($_FILES["imagen"]["tmp_name"],$imagen);
            
            //con esto borramos la imagen vieja.
            unlink( $hotelEditar["imagen"]);
            
            //echo $cuidadEditar["imagen"];
            
            
        }else{
            $imagen = $hotelEditar["imagen"];
        }
        
        
    
        $hoteles[$ind]["nombre"] = $nombre;
        $hoteles[$ind]["categoria"] = $categoria;
        $hoteles[$ind]["imagen"] = $imagen;
        
        $json = json_encode($hoteles);
        
        file_put_contents("database/hoteles.json",$json);
        
        
    
        header("Location:panel.php");
    }
}