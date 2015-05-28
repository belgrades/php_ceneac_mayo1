<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usando Formularios</title>
</head>

	<body>
    <h2> Mi Formulario </h2>
    <h3> Por favor ingrese sus datos </h3>
	
    	<form action = "procesar.php" 
        	  method = "get">
        	<p> Nombre:   <input 
            				placeholder = "Ingrese su nombre" 		                            type = "text" 
                            name = "nombre"
                            size = "20"
                            maxlength="20"
                            > </p>
            <p> Apellido: <input 
            				placeholder = "Ingrese su nombre"
                            type = "text" 
                            name = "apellido"> </p>
            <p> Email:    <input
            				placeholder = "xxx@yyyy.com" 
            				type = "text" 
                            name = "email"> </p>
            <p> Dirección:</p> 
           	<p>			  <textarea 
            				name = "direccion"
                           	cols = "20"
                            rows = "5"> 
                          </textarea></p>         
                      
            <p> Clave: 	<input 
            				placeholder = "Ingrese su clave"
                            type = "password" 
                            name = "clave_1"> </p>
            <p> Clave: 	<input 
            				placeholder = "Ingrese su clave nuevamente"
                            type = "password" 
                            name = "clave_2"
                            size = "22"> </p>
            
            <p> <input 
            		type = "submit" 
                    name = "enviar" 
                    value = "Casa"> </p>
        </form>

	</body>
</html>
