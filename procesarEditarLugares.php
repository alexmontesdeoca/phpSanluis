<?php
	require_once("database/cuidades.php");
	
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
	
	
	$nombre = $_POST["nombre"];
	$categoria = $_POST["categoria"];
	
	if($_FILES["imagen"]["size"] > 0){
		$imagen = "Cuidades/".time().".jpg";
		
		move_uploaded_file($_FILES["imagen"]["tmp_name"],$imagen);
		
		unlink($cuidadEditar["imagen"]);
		
		
		
	}else{
		$imagen = $cuidadEditar["imagen"];
	}
	
	

	$cuidades[$ind]["nombre"] = $nombre;
	$cuidades[$ind]["categoria"] = $categoria;
	$cuidades[$ind]["imagen"] = $imagen;
	
	$json = json_encode($cuidades);
	
	file_put_contents("database/cuidades.json",$json);
	
	

	header("Location:panel.php");
	
	
