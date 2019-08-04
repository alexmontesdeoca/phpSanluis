
<?php require 'secciones/array.php';?>

<div class="contenedor">
    <h2>Panel de control</h2>
    <?php 

                    
                        foreach($lugares as $lugares):
                    
                    ?>
                   
                        <tr>
                            <td><?= $pelicula["id"]; ?></td>
                            <td><?= $pelicula["nombre"]; ?></td>
                            <td><?= $pelicula["categoria"]; ?></td>
                            
                            <td>
                                <a href="#" class="btn btn-success btn-sm pull-left">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>

                                <form action="" method="post" class="pull-left">
                                    <input type="hidden" value="" name="id">
                                    <botton type="submit" class="btn btn-danger btn-sm">
                                        <span class="glyphicon glyphicon-minus"></span>
                                    </botton>
                                </form>

                            </td>
                        </tr>
                    
                    <?php
                        endforeach;
                    
                    ?>


</div>