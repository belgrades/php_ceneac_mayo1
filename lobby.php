<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listado de ofertas</title>
</head>

<body>
<h2> Listado de libros disponibles </h2>

<form action = "reservar.php" 
          method = "post">
          
	<?php
		#Nos conectamos al servidor
	$link = mysql_connect('localhost', 'php', 'php');
	#	$link = mysql_connect('127.0.0.1', 'php', 'php');
	if(!$link){
		die('No se pudo conectar al servidor '.mysql_error());	
	}else{
		#echo 'Conexión exitosa <br>';	
	}
	
	$db_sel = mysql_select_db('php_formulario', $link);
	
	if(!$db_sel){
		die('No se pudo seleccionar la BD<br>'.mysql_error());	
	}else{
		#echo 'Base de datos conectada<br> ';	
	}
	/**
	$query = "SELECT clave FROM usuario WHERE cedula=$_POST['".$_POST["cedula"]."']";
	
	*/
	
	$cedula = $_POST["cedula"];
	
	#Query en SQL para obtener datos
	$query = "SELECT clave FROM usuario WHERE cedula=$cedula";
	
	#Ejecutamos el query
	$res = mysql_query($query, $link);
	
	#obtenemos la clave
	if(strcmp(mysql_result($res, 0, "clave"),$_POST["clave"])==0){
		
		#Query en SQL para obtener datos
		$query = "SELECT * FROM libros";
		
		#Ejecutamos el query
		$res = mysql_query($query, $link);
		
		#Obtenemos los resultados
		for($i = 0;$i < mysql_num_rows($res);$i++){
		  $name = mysql_result($res, $i, "nombre");
		  $id =   mysql_result($res, $i, "codigo");	
			echo "<input type = 'radio' value = ".$id." name = 'listado'>".$name."<br>"; 	
		}
	}else{
		#Aqui redirigimos a login.php con mensaje de error
		echo "Claves no coinciden <br>";	
	}
	
	
	?>
    
    <input       placeholder = "<?php echo $_POST["cedula"] ?>"
    			 type = "text" 
                 name = "cedula"
                 size = "5"
                 maxlength="10"
                 value="<?php echo $_POST["cedula"] ?>"
                 readonly
          >
    
    <p>  <input 
                 type = "submit" 
        		 name = "enviar" 
                 value = "Reservar"> </p> 
    </form>
</body>
</html>
