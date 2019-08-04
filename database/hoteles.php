<?php

    

    if(file_exists("database/hoteles.json")){
        $hotelesJson = file_get_contents("database/hoteles.json");

        $hoteles = json_decode($hotelesJson,true);
      
        
    }else{
        $hoteles = [
        
            ["id" => 1, "nombre" => "hotel","imagen" => "articulo/hotel.jpg", "categoria" => "Hoteles" ],
            

        ];
    }

    


    ?>