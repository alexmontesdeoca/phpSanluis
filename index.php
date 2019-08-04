<!doctype html>
<?php
    session_start();
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="icon" type="image/png"  href="favicon.png">
        <?php 
              include_once("configuraciones/botonera_array.php");
              include_once("validacion.php");
              require("configuraciones/config.php");
              

        ?>

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
        <body>
        <div class="row">
        <header>
          
        </header>
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container container_nav">
        <div class="navbar-header">
      <a  href="#"><img src="images/logo.png" class="logo" alt=""></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href=<?php print_r($botonera["url"]["incio"]);?>>Inicio</a></li>
      <li><a href=<?php print_r($botonera["url"]["lugares"]);?>>Lugares</a></li>
      <li><a href=<?php print_r($botonera["url"]["contacto"]);?>>Contacto</a></li>
    </ul>
    
    <?php


    if (!empty($_SESSION["email"])):
       
      if (isset($_SESSION["rol"])){        
       
    ?>   
      
      <ul class="nav navbar-nav navbar-right">
      <li><span class="glyphicon glyphicon-user liUsuario"></span> <?php echo "Bienvenido " . $_SESSION["nombre"];?></li>
      <form action="cerrarSesion.php" method="post" class="pull-left">
      <li><span class="liUsuario"></span><button type="submit" style name="cerrarSesion" class="btn btn-success btn-sm glyphicon glyphicon-log-out">Salir</button></li>
      </form>
    </ul>

    <?php
     } else {
    ?>
          <ul class="nav navbar-nav navbar-right">
      <li><a href=<?php print_r($botonera["url"]["incioSesion"]);?>><span class="glyphicon glyphicon-user"></span> Entrar</a></li>
      <li><a href=<?php print_r($botonera["url"]["registro"]);?>><span class="glyphicon glyphicon-log-in"></span> Registrarse</a></li>
    </ul>

    <?php
     } else :
    ?>         

      <ul class="nav navbar-nav navbar-right">
      <li><a href=<?php print_r($botonera["url"]["incioSesion"]);?>><span class="glyphicon glyphicon-user"></span> Entrar</a></li>
      <li><a href=<?php print_r($botonera["url"]["registro"]);?>><span class="glyphicon glyphicon-log-in"></span> Registrarse</a></li>
    </ul>
       
    <?php
                        endif;
                        ?>
                       
                            
      </div>
 

    </nav>
    </div>
     <?php


    
        if(!empty($_GET)){

            if(!empty($_GET['seccion'])){
                
                if($_GET['seccion'] == "lugares"){
                
                    if(empty($_SESSION["rol"])){
   
                    require('requerirIngreso.php');
                    } else {

                        require('secciones/galeria.php');
                    }

                }elseif ($_GET['seccion'] == "contacto") {

                    require('secciones/contacto.php');  
                }elseif ($_GET['seccion'] == "index") {

                    require('secciones/index.php');  
                }elseif ($_GET['seccion'] == "inicio") {

                    require('secciones/login.php');  
                }
               elseif ($_GET['seccion'] == "index") {

                    require('secciones/index.php');  
                }elseif ($_GET['seccion'] == "registro") {

                    require('registrarse.php');  
               
               }else{
                    
                    require('secciones/index.php');        
                }

            }else{
                require('secciones/index.php');    
            }

        }else{
            require('secciones/index.php');
        }
    
    ?>


   
      <footer>
      <div class="row">
        <div class="col-md-3">      
        <img src="images/logo.png" width="50%" alt="">
        </div>
        <div class="col-md-3">
        <p class="text-center">VíaSan Luis
Terminos y Condiciones | Políticas de Privacidad | Contacto | Acerca de | Staff | Bases y condiciones de sorteos y concursos en viapais.com.ar</p>
</p>
        </div>
        <div class="col-md-3">
        <p class="text-center">CLARÍN.COM | GRUPO CLARÍN | TN | EL TRECE TV | MITRE | LA 100 | CIUDAD | CIENRADIOS | TYCSPORTS | LA VOZ DEL INTERIOR | LOS ANDES | RUMBOS</p>
        </div>
        <div class="col-md-3">
        <p class="text-center">Comercializadora de Medios del Interior S.A. | 30-70746725-4 | Av. Colonia 170, C1437JND CABA | +54 9 11 4943-8700 | contacto@viapais.com.ar Edición N° 3847 . Todos los derechos reservados © 2016-2018 Comercializadora de Medios del Interior S.A.</p>
        </div>
      <div class="row">
        <div class="col-md-12">
        <p class="text-center">©2017 Información turística sobre San Luis, Argentina: Paseos y excursiones.</p>
        </div>
      </footer>
    </div>         

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>

