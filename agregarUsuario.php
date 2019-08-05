    <form class="col-md-12" id="contact-form" method="post" action="procesarCrear.php" role="form">
                        <?php 
                            if(isset($resultado)){
                            $resultado = $_GET['result'];

                            if ($resultado=="exist") {
                                $errores .= "El email se encuentra registrado en nuestra base de datos <br />";
                            } else {
                                if($resultado == "registrado"){
                                $enviado .= "Se ha registrado con exito";
    
                            }
                            }}


                        ?>
                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Nombre*</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Nombre*">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Apellido *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Apellido *" >
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Mail *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" >
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_passwd">Contraseña *</label>
                                        <input id="form_passwd" type="passwd" name="pass" class="form-control" placeholder="Contraseña *" >
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                    <label>Nivel de usuario</label>
                    <select name="nivel"  class="form-control">
                    <option value="restaurantes" name="restaurantes">Restaurantes</option>
                    <option value="lugares" name="lugares" >Lugares</option>
                    <option value="hoteles" name="hoteles" >Hoteles</option>
                    <option value="superUsuario" name="superUsuario" >Super Usuario</option>
                    </select>                    
                </div>
                </div>
                
                             
                                </div>
                                 <?php if (!empty($errores)) : ?>
                                    <hr>
                                    <div class="row">   
                                    <div class=" col-md-12 alert alert-danger">
                                        
                                       <p class="text-center"> <?php echo $errores;?></p>

                                    </div></div> 

                                <?php elseif(isset($enviado)) : ?>
                                    <hr>
                                    <div class="row"> 
                                    <div class="col-md-12 alert alert-success">
                                        
                                        <p class="text-center"><?php echo $enviado?>
                                                                </p>

                                    </div>
                                    </div>
                                <?php endif ?>
                                <hr>
                                <div class="col-md-12 text-center">
                                    <input type="submit" name="submit" class="btn btn-success btn-send" value="Agregar Usuario">
                                </div>
                            </div>
                            
                        </div>

                    </form>
