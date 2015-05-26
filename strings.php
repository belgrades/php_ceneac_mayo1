<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
<title>Usando funciones sobre strings</title>
</head>
  <h1> Funciones importantes sobre strings  </h1>
  <h2> chr </h2>
  <?php
  	echo chr(64);
	#Caracteres con ISO-8859-1
	#http://www.w3schools.com/charsets/ref_html_ansi.asp
	
	for($i = 0;$i<20;$i++){
		echo $i." ".chr($i)."<br>";	
	}
  ?>
  
  <h2> strcmp </h2>
  <?php
  	$cad1 = "Fernando";
	$cad2 = "fernando";
	
	echo $cad1." ".$cad2." ".strcmp($cad1, $cad2)."<br>";
	
	$cad1 = "fErnando";
	$cad2 = "fernando";
	
	echo $cad1." ".$cad2." ".strcmp($cad1, $cad2)."<br>";
	
	$cad1 = "ferna";
	$cad2 = "fernao";
	
	echo $cad1." ".$cad2." ".strcmp($cad1, $cad2)."<br>";
	
	$cad1 = "fer";
	$cad2 = "FER";
	
	echo $cad1." ".$cad2." ".strcmp($cad1, $cad2)."<br>";
	
	$cad1 = "fernando";
	$cad2 = "fernando";
	
	echo $cad1." ".$cad2." ".strcmp($cad1, $cad2)."<br>";
	
	//ejercicio: Dada tres palabras, imprimir de "mayor" a "menor" usando strcmp 
	echo "<br> Ejercicio <br>";
	$pal_1 = "hola";
	$pal_2 = "mundo";
	
	if(strcmp($pal_1,$pal_2)<0){
		echo $pal_2." ".$pal_1;			
	}else{
		echo $pal_1." ".$pal_2;
	}	
  ?>
  <h2> strcspn </h2>
  
  <?php
  	$cad_1 = "Fernando Crema";
	$cad_2 = "ñ";
	
	echo strcspn($cad_1, $cad_2);
  ?>
  
  <h2> strtolower y strtoupper </h2>
  <?php
  	$cad_1 = "FeRnAnDo CreMA";
	
	echo strtolower($cad_1)." ".strtoupper($cad_1)."<br>";
	# Evitar mayúsculas en foros
	# Formalidad de entrada, ejemplo: correos
	# Consistencia de datos en formularios
	
	$nombre_1 = "Fernando";
	$nombre_2 = "FErNaNDO";
	
	if(strcmp(strtolower($nombre_1),strtolower($nombre_2))==0){
		echo "Si es el mismo nombre <br>";
		}   
  ?>
  
  <h2> strlen </h2>
  <?php
  	$twitt = "SAFAFASDAsdaqdmahdflaSAFAFASDAsdaqdmahdflaSAFAFASDAsdaqdmahdflaSAFAFASDAsdaqdmahdflaSAFAFASDAsdaqdmahdflaSAFAFASDAsdaqdmahdflaSAFAFASDAsdaqdmahdflaSAFAFASDAsdaqdmahdflaSAFAFASDAsdaqdmahdflaSAFAFASDAsdaqdmahdflaSAFAFASDAsdaqdmahdflaSAFAFASDAsdaqdmahdflaSAFAFASDAsdaqdmahdflaSAFAFASDAsdaqdmahdflaSAFAFASDAsdaqdmahdflaSAFAFASDAsdaqdmahdflaSAFAFASDAsdaqdmahdflaSAFAFASDAsdaqdmahdfla";
	# 140 caracteres por twitt
	if(strlen($twitt)>140){
		echo "Su twitt sobrepasa 140 caracteres<br>";	
	}
  ?>
  
 <h2> strstr, stristr </h2>
 
 <?php
 	$cadena = "Bienvenidos a la UCV";
	$patron = "Bin Laden";
	
	echo strstr($cadena, $patron)."<br>";
	echo stristr($cadena, $patron)."<br>";
	
	# Encontrar patrones. 

 ?> 
 
 <h2> substr </h2>
 <?php
 	$cadena = "Universidad Central de Venezuela";
	
	echo substr($cadena, -3, 2)."<br>";
	echo substr($cadena, -12, 4)."<br>";
	echo substr($cadena, 5, 8)."<br>";
	echo substr($cadena, -2, 10)."<br>";
 ?>
 <h2> trim </h2>
 
 <?php
 	$cadena = "     Fernando UCV    ";
	echo $cadena."<br>";
	echo $cadena." ".trim($cadena)."<br>";
	
	echo strcmp($cadena, "Fernando UCV")."<br>";
	echo strcmp(trim($cadena), "Fernando UCV")." <br>";
 ?>
 
<body>
</body>
</html>
