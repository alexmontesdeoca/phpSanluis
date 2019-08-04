<div class="container">


        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Hoteles</h1>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12">
                <a href="crearHoteles.php" class="btn btn-primary btn-sm pull-right">
                    <span class="glyphicon glyphicon-plus"></span>
                </a>

                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Acciones</th>
                    </tr>


                   <?php



                    
                        foreach($hoteles as $hoteles ):

                
                    ?>
                   
                        <tr>
                            <td><?= $hoteles["id"]; ?></td>
                            <td><?= $hoteles["nombre"]; ?></td>
                            <td><?= $hoteles["categoria"]; ?></td>
                            <td>    
                            <form action="editarLugares.php" method="post" class="pull-left">
                    <input type="hidden" value=<?php echo $hoteles["id"]; ?> name="id">
                    <input type="hidden" value=<?php echo $hoteles["categoria"]; ?> name="categoria">
                    <button type="submit" name="editar" class="btn btn-success btn-sm">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </form>

                                <form action="borrar.php" method="post" class="pull-left">
                                    <input type="hidden" value=<?php echo $hoteles["id"]; ?> name="id">
                                    <input type="hidden" value=<?php echo $hoteles["categoria"]; ?> name="categoria">
                                    <button type="submit" name="borrar" class="btn btn-danger btn-sm">
                                        <span class="glyphicon glyphicon-minus"></span>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    
                    <?php
                    
                        endforeach;
                    
                    ?>

                </table>

            </div>

        </div>

    </div>
