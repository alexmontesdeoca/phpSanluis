<!doctype html>
<?php
    
      require("database/categorias.php");
      require("database/restaurantes.php");
      include "secciones/array.php";

?>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet">
        <style>

html, body {
        height: 100%;
        width: 100%;
        padding: 0;
        margin: 0;
    }
            html {
              font-size: 16px;
              line-height: 22px;
              font-family:Tahoma, Geneva, sans-serif;
              color: #000;
              }

                          body {
     background: url("images/backgroundSanluis.jpg") no-repeat no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;

}

            body {
                padding-top: 70px;
               
            }

            .imagen {


                  margin: 2px;
            }




            .carousel, .carousel-inner > .item > img {
                height: 400px;
                width: 100%;
              }


              .presentacion{


                  margin-top: 2px;
                  margin-bottom:2px;
              }


              .articulo{

                  margin-top: 37px;
                  margin-bottom:2px;
                  background: rgba(4, 16, 6, 0.81);
                  border:solid 1px black;
                  border-radius: 4px;
                  height: 517px;
                  cursor: pointer;

              }

              .imagenParrafo{

                float: left;
                margin-right: 8px; 
              }

             

              h2{

                border-bottom: 1px solid #b3b3b3;
              }

              .contenedorCuidad{

                    height: 565px;
                    text-align: center;
              }


              .caption{

                  height: 288px;
                  position: relative;
                     
              }



              .masInfo{


                    position: absolute;
                    margin-left: -62px;
                    bottom: 0;
              }


              form{

                background: rgba(4, 16, 6, 0.81);
                color: black;
              }

              h1 {
                text-decoration: none;
                font-family: 'Titillium Web', Arial, sans-serif;
                font-size: 35px;
                color: #202e34;
                text-shadow: 0px 1px 2px #efefef;
                text-align: center;
                margin: 0px;
                padding: 4px 0px 0px 0px;
                line-height: 30px;
                letter-spacing: 1px;
                font-weight: bold;
}   


        h2 {
    text-decoration: none;
    font-family: 'Alike', sans-serif;
    text-transform: uppercase;
    font-size: 15px;
    letter-spacing: 1px;
    color: black;
    padding: 4px 0px 4px 4px;
    margin: 0px;
    text-align: center;
    background: -moz-linear-gradient(top, rgba(255,255,255,0.2) 0%, rgba(205,211,211,1) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0.2)), color-stop(100%,rgba(205,211,211,1)));
    background: -webkit-linear-gradient(top, rgba(255,255,255,0.2) 0%,rgba(205,211,211,1) 100%);
    background: -o-linear-gradient(top, rgba(255,255,255,0.2) 0%,rgba(205,211,211,1) 100%);
    background: -ms-linear-gradient(top, rgba(255,255,255,0.2) 0%,rgba(205,211,211,1) 100%);
    background: linear-gradient(to bottom, rgba(255,255,255,0.2) 0%,rgba(205,211,211,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#33ffffff', endColorstr='#cdd3d3',GradientType=0 );
}

.navbar-inverse {
    background-color: #021b04;
    border-color: #080808;
}

img{

    border: 1px solid black;
}

.text-info{

  color:white;
}


     </style>
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/main.css">




    <!-- CONTENIDO -->
    <div class="container">


        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Agregar Nuevo Restaurante</h1>
            </div>
        </div>

        <div class="row">

         
            <form  class="col-md-12" action="procesarCrear.php" method="post" enctype="multipart/form-data" role="form">
             <div class="col-xs-12">
          <a href="panel.php" class="btn btn-primary btn-sm pull-right">
                    <span class="glyphicon glyphicon-menu-left"></span>
                </a>
                     <?php


                    error_reporting(E_ALL ^ E_NOTICE);
                            $resultado = $_GET['result'];

                        if ($resultado=="error") {
                            $errores .= "Por favor completa todos los campos <br />";
                        } 
                          else {

                              if ($resultado=="enviado") {
                                  
                                  $enviado .= "Cuidad Agregada";

                              }

                                                          }


                        ?>

                
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" placeholder="Ingrese nombre del restaurante" name="nombre" <?php if (empty($_GET["nombre"])){echo "value=''"; }elseif(isset($_GET["nombre"])){echo "value=".$_GET["nombre"];} ?> 
               class="form-control">
                </div>
           <?php 

              echo $_GET["categoria"];
           ?>
                <div class="form-group">
                    <label>Categoría</label>
                    <select name="categoria"  class="form-control">
                    <option value="Restaurantes" >Restaurantes</option>
                    </select>                    
                </div>
                
                <div class="form-group">
                    <label>Imágen</label>
                    <input type="file" name="imagen" class="form-control" >
                </div>
                
                        <?php if (!empty($errores)) : ?>
                                    <hr>
                                    <div class="row"> 
                                    <div class="col-md-8 col-md-offset-2 alert alert-danger">
                                        
                                       <p class="text-center"> <?php echo $errores;?></p>

                                    </div></div> 

                                <?php elseif($enviado) : ?>
                                    <hr>
                                    <div class="row"> 
                                    <div class="col-md-8 col-md-offset-2 alert alert-success">
                                        
                                        <p class="text-center"><?php echo $enviado;?></p>
                                                                

                                    </div>
                                    </div>
                                <?php endif ?>
                <div class="col-md-12 text-center">
                    <input type="submit" name="submit" class="btn btn-success btn-send" value="Enviar">
                 </div>
                            </div>
                            
                        </div>

                    </form>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->
        <hr>


</body>
</html>
