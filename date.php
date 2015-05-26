<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fechas</title>
</head>

<body>

<?php
	$tiempo = time();
	echo $tiempo."<br>";
	
	$fecha = date("H:i:s/d:m:y",mktime(13, 34, 12, 3, 23, 1990));
	
	echo $fecha;
?>

</body>
</html>
