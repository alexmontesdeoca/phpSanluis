<?php 
	require_once("database/cuidades.php");
	require_once("database/restaurantes.php");
	require_once("database/hoteles.php");
	
	$categoria = $_POST["categoria"];

if ($categoria == "Cuidades") {
	if(empty($_POST["id"])){
		header("Location:panel.php");
		die();
	}
	
	$id = $_POST["id"];

	foreach($cuidades as $indice => $cuidad){
		
		if($cuidad["id"] == $id){
			$ind = $indice;	
		}
	}
	
	if(!isset($ind)){
		header("Location:panel.php?seccion=panelLugares");
		die();
	}
	
	unlink($cuidades[$ind]["imagen"]);
	unset($cuidades[$ind]);
	
	$json = json_encode($cuidades);
	
	file_put_contents("database/cuidades.json",$json);
	
	
	header("Location:panel.php?seccion=panelLugares");
	
	
} elseif ($categoria == "Restaurantes") {
	if(empty($_POST["id"])){
		header("panel.php?seccion=panelRestaurantes");
		die();
	}
	
	$id = $_POST["id"];

	foreach($restaurantes as $indice => $restaurant){
		
		if($restaurant["id"] == $id){
			$ind = $indice;	
		}
	}
	
	if(!isset($ind)){
		header("panel.php?seccion=panelRestaurantes");
		die();
	}
	
	unlink($restaurantes[$ind]["imagen"]);
	unset($restaurantes[$ind]);
	
	$json = json_encode($restaurantes);
	
	file_put_contents("database/restaurantes.json",$json);
	
	
	header("panel.php?seccion=panelRestaurantes");
	
	
} else {

	if ($categoria == "Hoteles") {


		if(empty($_POST["id"])){
			header("Location:panel.php");
			die();
		}
		
		$id = $_POST["id"];
	
		foreach($hoteles as $indice => $hotel){
			
			if($hotel["id"] == $id){
				$ind = $indice;	
			}
		}
		
		if(!isset($ind)){
			header("Location:panel.php");
			die();
		}
		
		unlink($hoteles[$ind]["imagen"]);
		unset($hoteles[$ind]);
		
		$json = json_encode($hoteles);
		
		file_put_contents("database/hoteles.json",$json);
		
		
		header("Location:panel.php?seccion=panelHoteles");
		

	}

}
	


?>
