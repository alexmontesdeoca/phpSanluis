   
<hr>
   <div class="container">

            <div class="row">

                <div class="col-md-12 ">

                    <h2>Contacta con nosotros para recibir la ultima informacion de nuestra provincia</h2>
                    <hr>

                        

                    <form class="col-md-12" id="contact-form" method="post" action="validacion.php" role="form">
                        <?php 

                       error_reporting(E_ALL ^ E_NOTICE);
                            $resultado = $_GET['result'];

                        if ($resultado=="a") {
                            $errores .= "Por favor ingresa un nombre <br />";
                        } elseif ($resultado=="b") {
                           $errores .= "Por favor ingresa un apellido <br />";
                        }elseif ($resultado=="c") {
                           $errores .= "Por favor ingresa un email<br />";
                        } 
                        elseif ($resultado=="e") {
                           $errores.= "Por favor ingresa un correo valido <br />";
                        }
                        elseif ($resultado=="f") {
                               
                                
                                $enviado = "Mensaje Enviado";
                        }
                        else{
                            if ($resultado=="d"){
                              $errores .=  "Por favor ingresa un Mensaje <br />";                             }
                        }


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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_email">Mail *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" >
                                        
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Mensaje *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Mensaje*" rows="4" ></textarea>
                                        
                                    </div>
                                </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-12">
                                  <label for="form_name">Quiero recibir información de:</label>
                                <label class="checkbox-inline"><input type="checkbox" name="intereses[]" value="Alojamientos">Alojamientos</label>
                                <label class="checkbox-inline"><input type="checkbox" name="intereses[]" value="Hoteles">Hoteles</label>
                                <label class="checkbox-inline"><input type="checkbox" name="intereses[]" value="Campings">Campings</label>
                                <label class="checkbox-inline"><input type="checkbox" name="intereses[]" value="Turismo rural">Turismo rural</label>
                                <label class="checkbox-inline"><input type="checkbox" name="intereses[]" value="Turismo Alternativo">Turismo Alternativo</label>
                                <label class="checkbox-inline"><input type="checkbox" name="intereses[]" value="Información general">Información general</label>
                                <label class="checkbox-inline"><input type="checkbox" name="intereses[]" value="Servicios">Servicios</label>

                                </div>
                                </div>
                                 <?php if (!empty($errores)) : ?>
                                    <hr>
                                    <div class="row">   
                                    <div class=" col-md-12 alert alert-danger">
                                        
                                       <p class="text-center"> <?php echo $errores;?></p>

                                    </div></div> 

                                <?php elseif($enviado) : ?>
                                    <hr>
                                    <div class="row"> 
                                    <div class="col-md-12 alert alert-success">
                                        
                                        <p class="text-center"><?php echo $_GET['name'] ."<br />";
                                                                echo $_GET['surname']."<br />";
                                                                echo $_GET['email']."<br />";
                                                                echo $_GET['message']."<br />";?>
                                                                </p>

                                    </div>
                                    </div>
                                <?php endif ?>
                                <hr>
                                <div class="col-md-12 text-center">
                                    <input type="submit" name="submit" class="btn btn-success btn-send" value="Enviar Mensaje">
                                </div>
                            </div>
                            
                        </div>

                    </form>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->
        <hr>
