<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		// Manera clásica de declarar vectores
		$ciudad[2] = "Caracas";
		$ciudad[0] = "Maracaibo";
		$ciudad[1] = "San Juan de los Morros";
		
		echo "Yo vivo en ".$ciudad[0]."<br>";
		
		echo "Paso mis vacaciones en  ".$ciudad[1]." y ".$ciudad[2]."<br>";
		
		// usando array
		
		$italia = array("Florencia","Pisa", "Modena",  "Roma" );
		
		echo "Ciudades de Italia <br>";
		echo $italia[0]." ".$italia[1]." ".$italia[2]." ".$italia[3]."<br>";
		
		$espana = array(6=>"Valladolid", "Madrid", "Barcelona", "Sevilla");
		
		echo $espana[6]."<br>";
		
		
		//ejemplo con tablas asociativas
		
		//almacenamiento de visitas por día
		
		//Usamos tablas asociativas / tablas hash
		
		$visitas["lunes"] = 1990;
		$visitas["martes"] = 326;
		$visitas["miercoles"] = 1233;
		
		echo $visitas["miercoles"]; 
		
		?>
        
        <h3> Código de ejemplo </h3>
        <?php
		
		/*	
		
			Agreguen en un arreglo de 10 posiciones 
			con numeros e impriman su contenido
			
			
		
		*/
		$a[0] = 1;
		$a[1] = 2;
		$a[2] = 3;
		$a[3] = 4;
		$a[4] = 5;
		$a[5] = 6;
		$a[6] = 7;
		$a[7] = 8;
		$a[8] = 9;
		$a[9] = 10;
		
		for($i = 0; $i< count($a); $i++ ){
			echo $a[$i]." ";
			
		}
		
		echo "<br>";
		
		//Si quisieramos imprimir los valores de una lista 			asociativa
		
		$italia = array("Florencia","Pisa", "Modena",  "Roma", "Napoli", "Milano", "Bari", "Carpi" );
		
		reset($italia);
		echo current($italia);
		echo "<br>";
		
		//Florencia
		
		
		
		next($italia);
		echo current($italia);
		echo "<br>";
		
		//Pisa
		
		next($italia);
		next($italia);
		
		echo current($italia);
		//Roma
		echo "<br>";
		
		end($italia);
		echo current($italia);
		echo "<br>";
		//Carpi
		
		
		prev($italia);
		echo current($italia);
		echo "<br>";
		//Bari
	?>
    <h3> Usando each para imprimir los valores </h3>
    
    <?php
		
		$visitas["lunes"] = 1990;
		$visitas["martes"] = 326;
		$visitas["miercoles"] = 1233;
		$visitas["jueves"] = 19;
		$visitas["viernes"] = 23326;
		$visitas["sabado"] = 12323;
		$visitas["domingo"] = 19120;
		
		reset($visitas);
		while(list($clave, $valor) = each($visitas)){
			echo "El día ".$clave." ingresaron ".$valor." 		personas <br>";	
		}
	
	?>
    <h3> Imprimiendo todos los valores sin claves con current y reset </h3>
    
	<?php
		//imprimiendo los primeros 5
		reset($visitas);
		for($i=0; $i<5; $i++){
			echo current($visitas)." ";
			next($visitas);
		}
	?>
    
    <h3> Manejo de arreglos multidimensionales </h3>
    
    <?php
		$calendario[] = array(1, "enero", 31);
		$calendario[] = array(2, "febrero", 28);
		$calendario[] = array(3, "marzo", 31);
		$calendario[] = array(4, "abril", 30);
		$calendario[] = array(5, "mayo", 31);
		
		while(list($clave, $valor) = each($calendario)){
			echo ($clave+1)." ";
			$cadena = $valor[1];
			$cadena .= " es el número ".$valor[0];
			$cadena .= " y tiene ".$valor[2]." días<br>";
			echo $cadena;
			
			
		}
		
	?>
    
    <h3> Usando funciones en PHP </h3>
    
    <?php 
		//usando return
		function mayor($x, $y){
			if($x > $y)
				return $x." es mayor que ".$y;
			else
				return $y." es mayor que ".$x;	
		}
		
		echo mayor(19, 10);
		
		function mayor_f($x, $y){
			if($x > $y)
				return $x." es mayor que ".$y;
				
		    return $y." es mayor que ".$x;
		}
		
		//pase de parametros
		function suma($x, $y){
			$x = $x + $y;
			return $x;	
		}
		
		$a = 3;
		$b = 6;
		
		//pase de parámetros por valor
		echo suma($a, $b)." ";
		echo $a."<br>";
		
		//pase de parámetros por referencia
		echo suma(&$a, $b)." ";
		echo $a."<br>";
	?> 
</body>
</html>
