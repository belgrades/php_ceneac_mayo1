<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<h1> Esta es mi página web </h1>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Mi primera página</title>
    
    </head>
    
    <body>
    	
			<?php
			$myvar = "hola. Este es mi primer script en PHP.";
			
			//Esto es un comentario de una linea
			/*
			Comentario
			...
			comentario		
			*/
					
			//
			echo $myvar;
		?>
        <br>
        <h2> Trabajando con números </h2>
        <?php
			//Este es el salto de linea
			echo "<br>";
			
			//Declaramos una cadena de caracteres con numeros
			$att = "2456b345" ;
			
			//Imprime completo
			echo $att;
			
			echo "<br>";
			
			//Impreme solo hasta la b
			settype($att, "integer" );
			echo $att;
			
			
			//declaramos un numero
			$caracter = 100;
			
			echo "<br>";
						
			echo $caracter+1;
			
			//Seccion 2.1.1 Booleanos
			echo "<br>";
			$booleana = true;
			echo $booleana;
			                                              
			echo "<br>";
			//Seccion 2.1.2 enteros
			$a = 1234;
			$b = -36;
			echo $a + $b;
			
			echo "<br>";
			//numeros octales
			$c = 0123;
			echo $c;
			
			echo "<br>";
			//numeros hexa
			$d = 0x321;
			echo $d;
			
			//Numeros double
			$f = 1.234;
			$e = 1.2e3;
			
			echo "<br>";
			echo $f;
			
			echo "<br>";
			echo $e;
		?>
        <h2> Trabajando con cadenas de caracteres </h2>
        
		<?php
				     	
			//Cadenas de caracteres
			$nombre = "Fernando";
			$apellido = "Crema";
			
			echo "<br>";
			
			echo $nombre." ".$apellido." Curso de Ceneac hola";
			
			echo "<br>";
			
			echo "Hola $a";
		?>
       
        
        <h3> Trabajando con variables </h3>
        <?php
			$myvar = "MARACAY";
			$Myvar = "CARACAS";
			
			echo $myvar;
			echo "<br>";
			echo $Myvar;
			
			//constantes
			
			define("SALUDO", "Hola Mundo!");
			
			//usando constantes para numeros
			
			define("PI", 3.1415);
			echo "<br>";
			echo PI+2;
			
			$nombre = "Fernando";
			$apellido = "Crema";
			$edad = 24;
			
			echo "<br>";
			echo "Mi nombre es ".$nombre." ".$apellido." y tengo ".$edad." años. Dentro de 10 años tendré ".($edad+10)." años";
			
			echo "<br>";
			
			echo "Mi nombre es ";
			echo $nombre;
			echo " ";
			echo $apellido;
			echo " y tengo ";
			echo $edad;
			echo " años. Dentro de 10 años tendré ";
			echo $edad+10;
			echo " años";
			
			
		?>
        
        <h3> Usando constantes de PHP </h3>
        
        <?php
			echo __FILE__;
			
			echo "<br>";
			
			echo __LINE__;
			
			echo "<br>";
			
			echo PHP_VERSION;
			
			echo "<br>";
			
			echo PHP_OS;
			
			echo "<br>";
			
			echo E_ERROR;
			
			echo "<br>";
			
			echo E_WARNING;
			
			echo "<br>";
			
			echo E_PARSE;
			
			echo "<br>";
			
			echo E_NOTICE;  
		?>
        
        <h3> Operadores Aritméticos </h3>
        
        <?php
			$a = 10;
			$b = 5;
			$c = -3;
			
			// suma = 15
			$suma = $a + $b;
			
			// resta = 13
			$resta = $a - $c;
			
			//multiplicacion = -30
			$multiplicacion = $a*$c;
			
			//division = 2.0 o 2
			$division = $a/$b;
			
			//asignacion = 11;
			$asignacion = $a++;
			
			
			// prioridad = 2
			echo $a." ".$b." ".$c;
			
			// a = 11, b = 5, c = -3
			$prioridad = $a*$c/$b+$a;
			
		
			echo "<br>";
			echo "suma : ".$suma;
			
			echo "<br>";
			echo $resta;
			
			echo "<br>";
			echo $multiplicacion;
			
			echo "<br>";
			echo $division;
			
			echo "<br>";
			echo $asignacion;
			
			echo "<br>";
			echo $prioridad;
			
			echo "<br>";
			
			//operadores de asignacion
			
			$d = 3;
			$e = 7;
			$f = -4;
			
			echo $d." ";
			$d += $e;
			
			echo $d." ";
			$d -= $f;
			
			echo $d." ";
			
			$d *= $f;
			echo $d." ";
			
			$d.=$e;
			echo $d+$e;
			
			$g = ($d>=0)?"positivo":"negativo";
			
			echo " ";
			echo $g;
			
			?>
            
         <h3> Ejemplo de uso de operadores </h3>
         
		 <?php
			$IVA = 12;
			$PRODUCTO_A = 23000; 
			$PRODUCTO_B = 1400;
			
			$SUB_TOTAL = $PRODUCTO_A+$PRODUCTO_B;
			
			$costo_por_impuesto = ($SUB_TOTAL)*($IVA/100);
					
			$costo_compra = $SUB_TOTAL + $costo_por_impuesto;
			
			echo "El subtotal fue ".$SUB_TOTAL.", impuestos ".$costo_por_impuesto." y la compra salió en ".$costo_compra;
			 
			
			
		?>
        
        <h3> Estructuras de control </h3>
        
        <?php
			$edad = -50;
			
			//Uso de ifelse sencillo
						
			if($edad < 18 && $edad >=0)
			{
				echo "La persona es menor de edad";	
			}
			else
			{
				echo "La persona es mayor de edad";
			}
			
			//uso de un if elseif elseif ...
			echo "<br>";
						
			if($edad <= 12 && $edad >=0){
				echo "Es un niño";
			}elseif($edad <=19 ){
				echo "Es un adolescente";	
			}elseif($edad<60){
				echo "Es un adulto";	
			}else{
				echo "Es tercera edad";	
			}
			
			echo "<br>";
			
		?>
        
        <h3> Ejemplo de switch </h3>
        
        <?php	
		
			$dia = "martes";
			
			switch($dia){
				case "lunes":
					echo "Mineria de Datos";
				break;
				
				case "martes":
					echo "Seguridad en la web";
				break;
				
				case "miércoles":
					"Bases de datos NoSql";
				break;
				
				case "jueves":
					"Calidad de Servicios";
				break;
				
				case "viernes":
					"administracion de bases de datos";
				break;
				
				default:
					echo "fin se semana!!";
			}
		?>
        
        <h3> Ejemplos con While, Do-While y for </h3>
        
        <?php
			$numero = 0;
			while($numero <=15){
				echo $numero." ";
				$numero++;	
			}
			
			echo "<br>";
			
			for($i = 0; $i<=100; $i++){
				if($i%3==0 AND $i%5==0){
					echo "El numero ".$i." es multiplo de 3 y 5"; 
					echo "<br>";
				}
			}
			
				for($i = 0; $i<=100; $i+=15){
					echo "El numero ".$i." es multiplo de 3 y 5"; 
					echo "<br>";
				}
			
		?>
        
    </body>
</html>
