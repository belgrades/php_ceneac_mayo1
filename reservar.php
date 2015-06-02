<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reserva Exitosa</title>
</head>
<?php
	echo $_POST["listado"]." ".$_POST["cedula"] ;
	
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
	$query = "INSERT INTO `prestamo`(`cedula`, `codigo`, `fecha_pedido`, `fecha_entrega`) VALUES (".$_POST["cedula"].",".$_POST["listado"].",'2015-06-02','2015-06-05')";
	
	$res = mysql_query($query, $link);
?>
<body>
</body>
</html>
