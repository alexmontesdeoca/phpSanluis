<?php
    if(file_exists("database/usuarios.json")){
        $usuariosJson = file_get_contents("database/usuarios.json");
        
        $usuarios = json_decode($usuariosJson,true);
        
    }else{
        $usuarios = [
        
            ["id" => 1, "nombre" => "Alexander","apellido" => "Montes de oca", "email" => "alexandermontesdeoca@gmail.com", "password" => password_hash("1234",PASSWORD_DEFAULT), "rol" => 1],

        ];
    }

    



    ?>