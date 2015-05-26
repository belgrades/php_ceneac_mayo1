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
	
	
  ?>
<body>
</body>
</html>
