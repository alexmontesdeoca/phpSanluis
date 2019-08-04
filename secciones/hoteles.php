
  
<?php include 'database/hoteles.php';
      
    
 ?>



    <hr>
    <h2 class="text-center">Conoce san luis</h2>
    <hr>



    


 <?php

   

                    
                        foreach($hoteles as $hoteles):


                    ?>


      <div class='row'>
      <div class='col-md-8 contenedorCuidad col-md-offset-2'>
       <div class="thumbnail">
           <a href="">
               <?php echo "<img class='imagenGaleria' width=300 src=articulos/0".$hoteles['id']."/".$hoteles['nombre'].".jpg>" ; ?>
           </a>
           <div class="caption">
               <h3 class="text-center"><a href=""><?php echo $hoteles["nombre"] ?></a></h3>
               <p class="text-center"><?php texto("articulo/0".$hoteles['id'],$hoteles['nombre']);?></p>
               
           </div>
       </div>
   </div>
   </div>
   
    <?php
                        endforeach;
                    
                    ?>
    
    };

