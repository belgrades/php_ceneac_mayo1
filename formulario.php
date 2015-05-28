<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usando Formularios</title>
</head>

	<body>
    <h2> Mi Formulario </h2>
    <h3> Por favor ingrese sus datos </h3>
	
    	<form action = "procesar.php" 
        	  method = "get"
              >
        	<p> Nombre: <input type = "text" name = "nombre"> </p>
            <p> Email: <input type = "text" name = "email"> </p>
            <p> <input type = "submit" name = "enviar" value = "Enviar"> </p>
        </form>

	</body>
</html>
