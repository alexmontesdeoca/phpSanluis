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


		if (empty($name)) {
			header("Location:index.php?seccion=contacto&result=a");
		}
			
	  		
	}


	if(!empty($surname)){

	  $surname = trim($surname);
	  $surname = filter_var($surname , FILTER_SANITIZE_STRING);

	} else{

			header("Location:index.php?seccion=contacto&result=b");
	  

	}

	if (!empty($email)) {

	   $email = filter_var($email ,FILTER_SANITIZE_EMAIL );
		

	   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

	   	header("Location:index.php?seccion=contacto&result=e");
		

		} }else {

			header("Location:index.php?seccion=contacto&result=c");
			
		}

		if (!empty($message)) {
			$message = htmlspecialchars($message);
			$message = trim($message);
			$message = stripslashes($message);
		
		} else{

			header("Location:index.php?seccion=contacto&result=d");
			
		}

		


if (!empty($message)&&!empty($email)&&!empty($name)&&!empty($surname)){

			
			header("Location:index.php?seccion=contacto&result=f&name=$name&surname=$surname&email=$email&message=$message");
			
		}





	
	


}



?>