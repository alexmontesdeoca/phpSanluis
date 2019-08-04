<?php

    

    if(file_exists("database/restaurantes.json")){
        $restaurantesJson = file_get_contents("database/restaurantes.json");

        $restaurantes= json_decode($restaurantesJson,true);
      
        
    }else{
        $restaurantes = [
        
            ["id" => 0, "nombre" => "restaurante","imagen" => "articulos/sanluis.jpg", "categoria" => "Restaurantes" ],
            

        ];
    }

    


    ?>