<?php 











function texto($ruta,$articulo){

$archivo = file_get_contents($ruta."/".$articulo.".txt");
$archivo = ucfirst($archivo);
$archivo = nl2br($archivo);
echo $archivo;


}


function ultimoId($array){
    usort($array, function ($a, $b) {
        return $b['id'] - $a['id'];
    });

    $primerRegistro = $array[0];

    $ultimoId = $primerRegistro["id"];

    return $ultimoId;
}




function agregarArticulo($nombre,$titulo,$imagen,$info){




	return $articulo[$nombre]["titulo"]=$titulo;
	return $articulo[$nombre]["imagen"]=$imagen;
	return $articulo[$nombre]["info"]=$info;
}
?>