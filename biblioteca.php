<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usando MySql+PHP</title>
</head>

<body>

<?php
	#Nos conectamos al servidor
	$link = mysql_connect('localhost', 'php', 'php');
	if(!$link){
		die('No se pudo seleccionar la BD'.mysql_error());	
	}else{
		echo 'Conexión exitosa';	
	}
	
?>
</body>
</html>
