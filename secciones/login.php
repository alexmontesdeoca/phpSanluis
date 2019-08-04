
<hr>
   <div class="container">

                        

                    <form class="col-md-12" id="contact-form" method="post" action="procesarUsuarios.php" role="form">
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
                                    <input type="submit" name="submit" class="btn btn-success btn-send" value="Ingresar">
                                </div>
                            </div>
                            
                        </div>

                    </form>

        </div> <!-- /.container-->
        <hr>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="js/validacion.js"></script>
        <script src="contact.js"></script>
