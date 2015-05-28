<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usando Formularios</title>
</head>

	<body>
    <h2> Mi Formulario </h2>
    <h3> Por favor ingrese sus datos </h3>
		
           	 Nombre:   
             <strong><?php echo $_POST["nombre"] ?> </strong>
             
             Apellido: 
			 <strong><?php echo $_POST["apellido"] ?> </strong> 
            
            <p> Email: 
			<strong><?php echo $_POST["email"] ?></strong>
                            
            	ID:       <strong> <?php echo $_POST["id"] ?> - <?php echo $_POST["id_number"] ?> - <?php echo $_POST["id_tipo"] ?>
                      </strong>
                            
            </p> 
  <p><strong><?php 
  echo $_POST["nombre"]." ".$_POST["apellido"];
  echo (strcmp($_POST["genero"],"M")==0)? " es Hombre": " es Mujer" ?></strong>

	</p>
<p> Fecha de nacimiento 
<strong><?php echo $_POST["dia"]."/".$_POST["mes"]."/".$_POST["anio"]?> </strong>
</p>
<p> Estado 
<strong> <?php echo $_POST["estados"]?></strong>
    </select>
</p>	

            <p> Dirección:</p> 
           	<p><strong><?php echo $_POST["direccion"] ?></strong>
            </p>         
                      
            <p> <strong> 
			<?php 
			if(strcmp($_POST["clave_1"], $_POST["clave_2"])==0){
				echo "La claves son iguales";
				}else{
				echo "Las claves son diferentes";	
				}?>
              </strong>
		 </p>
         
         <p> <?php 
		 
		 	if(strcmp($_POST["radio_condicion"],"si")==0){
			 	echo "La persona aceptó las condiciones";
			}else{
				echo "La persona no aceptó las condiciones";	 
			}
			 
			 ?>
	</body>
</html>
