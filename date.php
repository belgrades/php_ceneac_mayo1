<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fechas</title>
</head>

<body>

<?php
	$tiempo = time();
	echo $tiempo."<br>";
	
	$fecha = date("h:i:s:a/d:m:Y",mktime(13, 34, 12, 3, 3, 1990));
	
	echo $fecha;
?>

<h2> ejemplo restar horas </h2>

<?php
	function restarHoras($horaini, $horafin){
		#para la hora inicio
		list($horai, $mini, $segi) = preg_split("/[: -]/", $horaini);
		
		#para la hora fin
		list($horaf, $minf, $segf) = preg_split("/[: -]/", $horafin);
		
		$ini = (($horai*3600) + ($mini*60) + $segi);
		$fin = (($horaf*3600) + ($minf*60) + $segf);
		
		$dif = $fin - $ini;
		
		return date("H:i:s", mktime(0,0,$dif));
			
	}
	
	$hora_ini = "10:05:20";
	$hora_fin = "04:05:20";
	
	echo "La diferencia es ".restarHoras($hora_ini, $hora_fin);
	
	function restarNoMilitar($ini, $fin){
		
	
	}
?>

</body>
</html>
