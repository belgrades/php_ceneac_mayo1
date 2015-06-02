<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usando MySql+PHP</title>
</head>

<body>

<?php
	#Nos conectamos al servidor
	$link = mysql_connect('localhost', 'php', 'php');
	#	$link = mysql_connect('127.0.0.1', 'php', 'php');
	if(!$link){
		die('No se pudo conectar al servidor '.mysql_error());	
	}else{
		echo 'Conexión exitosa <br>';	
	}
	
	$db_sel = mysql_select_db('php_formulario', $link);
	
	if(!$db_sel){
		die('No se pudo seleccionar la BD<br>'.mysql_error());	
	}else{
		echo 'Base de datos conectada<br> ';	
	}
	
	#Query en SQL para obtener datos
	$query = "SELECT * FROM libros";
	
	#Ejecutamos el query
	$res = mysql_query($query, $link);
	
	#Obtenemos los resultados
	$nombre = mysql_result($res, 0, "nombre");
	
	echo $nombre;
	
	
?>
</body>
</html>
