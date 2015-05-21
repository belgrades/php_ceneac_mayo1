<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejercicios - 24</title>
<h1> Ejercicios de la página 24 </h1>
</head>

<body>
	<h2> Ejercicio 3 - Tabla de Multiplicar</h2>
    	<?php
			// Escogemos el n
			$n = 9;
			
			//Escogemos hasta donde queremos la tabla
			$m = 10;
		?>
        <h3> Tabla de Multiplicar del <?php echo $n; ?> </h3>
        
        <?php
			for($i = 0; $i <= $m; $i++){
				echo $i."*".$n."=".($i*$n)."<br>";		
			}
		?>
        
     
    <h2> Ejercicio 4 - Factorial </h2>
    	<?php
			//Escogemos el n para el factorial
			$n = 5;
		?>
    	<h3> El factorial de <?php echo $n; ?> es  
        
        <?php
			$factorial = 1;
			$prueba = 1;
			for($i = $n ; $i >= 0; $i--){
				if($i==0){
					$factorial *= 1;	
				}else{
					$factorial *= $i;	
				}		
			}
			
			
			echo $factorial;
			
					
			for($i = $n ; $i >= 1; $prueba*=$i--){}
			
			echo "<br>".$prueba;
		?>
    	
        </h3>
    
    <h2> Ejercicio 5 - Primos </h2>
    	<?php
			$inicio = 20;
			$fin = 120;
		?>
    	<h3> Entre <?php echo $inicio; ?> y <?php echo $fin ?> 		</h3>
        
        <?php
			// desde el numero inicio hasta el fin
			for($i = $inicio; $i <= $fin; $i++){
				// asumimos que el numero es primo
				$es_primo = TRUE;
				
				//verificamos divisores desde 2 hasta numero-1
				for($j = 2; $j < $i; $j++){
					
					//si el resto es 0 entonces NO es primo
					if($i%$j==0)
						$es_primo = FALSE;	
				}	
				
				//imprimimos el primo (en caso de serlo)
				if($es_primo){
					echo $i." ";	
				}
			} 
		?>
		
		
     
</body>
</html>
