<!doctype html>
<?php
if(empty($_SESSION)){

    session_start();


}



if($_SESSION["rol"] == "" ||$_SESSION["rol"] == 0){

    header("Location:denegado.php");
}
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <?php 
              include("configuraciones/botonera_array.php");
              include("configuraciones/funciones.php");
              require_once("configuraciones/config.php");
			  require_once("database/categorias.php");
              require_once("database/cuidades.php");
			  require_once("database/restaurantes.php");
			  require_once("database/hoteles.php");


        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   

   
    </head>
        <body>
        <div class="row">
        <header>
          
        </header>
        <nav class="navbar " role="navigation">
      <div class="container container_nav">
        <div class="navbar-header">
      <a  href="#"><img src="images/logo.png" class="logo" alt=""></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href=<?php print_r($botonera["url"]["incio"]);?>>Inicio</a></li>
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
<div class="container">
	<ul class="lista_opciones">

    <?php
     if ($_SESSION["rol"] == 1):
    ?>
	<li><a href=<?php print_r($botonera["url"]["panelLugares"]);?>>Agregar lugares</a></li>
	<li><a href=<?php print_r($botonera["url"]["panelRestaurantes"]);?>>Agregar Restaurantes</a></li>
	<li><a href=<?php print_r($botonera["url"]["panelHoteles"]);?>>Agregar Hoteles</a></li>
	<?php
    elseif($_SESSION["rol"] == 2):
    ?>
    	<li><a href=<?php print_r($botonera["url"]["panelLugares"]);?>>Agregar lugares</a></li>
<?php
    elseif($_SESSION["rol"] == 3):
        ?>

<li><a href=<?php print_r($botonera["url"]["panelHoteles"]);?>>Agregar Hoteles</a></li>
<?php
    else:   
            
        ?>
    <li><a href=<?php print_r($botonera["url"]["panelRestaurantes"]);?>>Agregar Restaurantes</a></li>
<?php
 endif;

?>
    </ul>
<?php
        if(!empty($_GET)){

            if(!empty($_GET['seccion'])){
                
                if($_GET['seccion'] == "panelLugares"){
                    if($_SESSION['rol'] == 2 || $_SESSION['rol'] == 1 ){

                        require('panelLugares.php');    

                    }

                }elseif ($_GET['seccion'] == "panelHoteles") {
                    if($_SESSION['rol'] == 3 || $_SESSION['rol'] == 1 ){
                    require('panelHoteles.php'); 
                }

                }elseif ($_GET['seccion'] == "panelRestaurantes") {
                    if($_SESSION['rol'] == 4 || $_SESSION['rol'] == 1 ){

                    require('panelRestaurantes.php');  

                }
                }else{
                    
                    require('panel.php');        
                }

            }else{
                require('panel.php');    
            }
        }
    
    ?>
      <footer>
      
      </footer>
    </div> <!-- /container -->        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    </body>
</html>
