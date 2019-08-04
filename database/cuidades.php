<?php

    

    if(file_exists("database/cuidades.json")){
        $cuidadesJson = file_get_contents("database/cuidades.json");

        $cuidades= json_decode($cuidadesJson,true);
      
        
    }else{
        $cuidades = [
        
            ["id" => 1, "nombre" => "sanluis","imagen" => "images/sanluis.jpg", "categoria" => "cuidades" ],
            

        ];
    }

    


    ?>