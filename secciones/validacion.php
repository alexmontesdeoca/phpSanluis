<?php 

$errores = "";
$enviado = "";


if(isset($_POST['submit'])) {


	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$message = $_POST['message'];


	if(!empty($name)){

	  $name = trim($name);
	  $name = filter_var($name , FILTER_SANITIZE_STRING);

	} else{


	  $errores .= "Por favor ingresa un nombre <br />";
	}


	if(!empty($surname)){

	  $name = trim($surname);
	  $name = filter_var($surname , FILTER_SANITIZE_STRING);

	} else{


	  $errores .= "Por favor ingresa un apellido <br />";

	}

	if (!empty($email)) {

	   $email = filter_var($email ,FILTER_SANITIZE_EMAIL );
		

	   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){


		$errores.= "Por favor ingresa un correo valido <br />";

		} }else {


			$errores.= "Por favor ingresa un correo <br />";
		}

		if (!empty($message)) {
			$message = htmlspecialchars($message);
			$message = trim($message);
			$message = stripslashes($message);
		} else{


			$errores .= 'Por favor ingresa el mensaje <br />';
		}
}


?>