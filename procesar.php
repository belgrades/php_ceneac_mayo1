<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
    
	function validar($email){
		
		//Validación #1
		$pos_arroba = strpos($email, "@");
		
		//verificamos si existe @
		if(!$pos_arroba)
			return FALSE;
		
		//Verificamos la posición de la @
		if($pos_arroba<3 || $pos_arroba >6)
			return FALSE;
		
		//numero válido para login
		$pos_punto = strpos($email, ".");
		
		//verificamos si existe el punto
		if(!$pos_punto)
			return FALSE;
		
		$diferencia = $pos_punto - $pos_arroba-1;
		
		//Verificamos número de caracteres de dominio
		if($diferencia<1 || $diferencia>10)
			return FALSE;
				
		$final = strrchr($email, ".com");
		
		if(strcmp($final, ".com")==0)
			return TRUE;
			
		return FALSE;
	}		

		if(validar($_GET['email'])==TRUE)
			echo "Formato de e-mail correcto <br>";
		else
			echo "Formato de email incorrecto <b>";
			
		echo "Nombre: ".$_GET['nombre']."<br>";
		echo "Email: ".$_GET['email']."<br>"; 
	?>
</body>
</html>
