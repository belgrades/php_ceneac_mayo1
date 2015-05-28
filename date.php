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
	
	echo "La diferencia es ".restarHoras($hora_ini, $hora_fin)."<br>";
	
	$hora_ini = "10:05:20:am";
	$hora_fin = "04:05:20:am";
	
	function restarNoMilitar($ini, $fin){
		#asumimos formato h:i:s:a
		
		list($horai, $mini, $segi, $tipoi) = preg_split("/[: -]/", $ini);
		
		list($horaf, $minf, $segf, $tipof) = preg_split("/[: -]/", $fin);
		
		#Comparando sin militar
		
		if(strcmp($tipoi, "pm")==0)
			$horai+=12;
		
		if(strcmp($tipof, "pm")==0){
			$horaf+=12;
		}else{
			$horaf+=24;	
		}
			echo $horaf;	
		$segundos = 3600*($horaf-$horai)+60*($minf-$mini)+($segf-$segi);
		
		echo " ".$segundos;
		
		return(date("H:i:s",mktime(0,0,$segundos))); 
	
	}
	
	echo "La diferencia es ".restarNoMilitar($hora_ini, $hora_fin)."<br>" ;
?>

<h2> Zonas Horarias </h2>
	<?php
		date_default_timezone_set("America/Caracas");
		
		#creamos un timestamp a partir de los datos 12 45 10 01 20 1981 
		$cumple = mktime(12, 45, 10, 01, 20, 1981);
		
		#cambia el idioma predeterminado
		setLocale(LC_TIME, "esp");
		
		#Podemos imprimir usando los formatos de la tabla de la página 36
		
		$fecha = strftime("Naciste el dia %A, %d de %B de %Y a las %I:%M:%S <br>", $cumple);
		
		echo $fecha;
		
		if(checkdate(2, 29, 2100)){
			echo "Fecha correcta";	
		}else{
			echo "Fecha incorrecta";	
		}
			
	?>
    
 <h2> Ejercicio Año Bisiesto </h2>
 <p>Un año es bisiesto si es divisible entre 4, a menos que sea divisible entre 100. Sin embargo, si un año es divisible entre 100 y además es divisible entre 400, también resulta bisiesto. Obviamente, esto elimina los años finiseculares (últimos de cada siglo, que ha de terminar en 00) cuyo siglo no es múltiplo de 4. </p>
 
 <h2> Ejercicio #1 </h2>
 
 <?php
 	function validar($email){
		
		//Validación #1
		$pos_arroba = strpos($email, "@");
		
		//verificamos si existe @
		if(!$pos_arroba)
			return FALSE;
		
		if($pos_arroba<3 || $pos_arroba >6){
			return FALSE;
		
	}else{
		//numero valido para login
		$pos_punto = strpos($email, ".");
		
		//verificamos si existe el punto
		if(!$pos_punto)
			return FALSE;
		
		$diferencia = $pos_punto - $pos_arroba-1;
		
		//Aqui esta mal
		if($diferencia<1 || $diferencia>10)
		return FALSE;
		
	
	 $final = strrchr($email, ".com");
	 if(strcmp($final, ".com")==0)
	 	return TRUE;
		
	 return FALSE;
	
		 	
	}
	
	}		
		$email_1 = "fca@hotmaila.comm";
		
		if(validar($email_1)==TRUE){
			echo "Email válido";
		}else{
			echo "Email inválido";
		}
	
 ?>   
</body>
</html>
