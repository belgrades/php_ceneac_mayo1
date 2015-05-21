<?php 
	include("header.inc");
	
	function triangulo($base, $altura){
		return $base*$altura/2;	
	}
	
	$base = 3;
	$altura =5;
	
	echo triangulo($base, $altura);
	
	include("footer.inc");
?>
