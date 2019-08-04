<div class="container">


        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Restaurantes</h1>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12">
                <a href="crearRestaurantes.php" class="btn btn-primary btn-sm pull-right">
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



                    
                        foreach($restaurantes as $restaurantes ):

                
                    ?>
                   
                        <tr>
                            <td><?= $restaurantes["id"]; ?></td>
                            <td><?= $restaurantes["nombre"]; ?></td>
                            <td><?= $restaurantes["categoria"]; ?></td>
                            <td>
                            <form action="editarLugares.php" method="post" class="pull-left">
                    <input type="hidden" value=<?php echo $restaurantes["id"]; ?> name="id">
                    <input type="hidden" value=<?php echo $restaurantes["categoria"]; ?> name="categoria">
                    <button type="submit" name="editar" class="btn btn-success btn-sm">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </form>
                                <form action="borrar.php" method="post" class="pull-left">
                                    <input type="hidden" value=<?php echo $restaurantes["id"]; ?> name="id">
                                    <input type="hidden" value=<?php echo $restaurantes["categoria"]; ?> name="categoria">
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
