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
		
		$italia = array("Florencia", "Roma", "Pisa", "Modena" );
		
		echo "Ciudades de Italia <br>";
		echo $italia[0]." ".$italia[1]." ".$italia[2]." ".$italia[3]."<br>";
		
	?>
</body>
</html>
