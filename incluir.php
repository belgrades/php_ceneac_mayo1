<?php 
	include("header.inc");
	
	function triangulo($base, $altura){
		return $base*$altura/2;	
	}
	
	$base = 3;
	$altura =5;
	
	echo triangulo($base, $altura)." ";
	
	$pi = 2*acos(0);
	$pi2 = asin(0);
	
	$x = 2;
	
	echo pow(2, $x)." ";
	
	echo $pi2." ".$pi." ";
	
	
	echo cos($pi*90/180). "<br>";
	
	//calculando el "verdadero" valor de pi
	$pi_val = 2*acos(0);
	
	
	//usando el {area de un circulo
	function circulo($radio){
		$pi = 2*acos(0);
		return $pi*$radio*$radio."<br>";
	}
	
	$radio = 10;
	
	function trapecio($b1, $b2, $altura){
		return ($b1 + $b2)*$altura/2;	
	}
	
	echo circulo($radio)."<br>";
	
	$b1 = 4;
	$b2 = 3;
	$altura = 7;
	
	echo "El área del trapecio es ".trapecio($b1, $b2, $altura);
	
	include("footer.inc");
?>
