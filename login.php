<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<h2> Bienvenidos al módulo de Biblioteca UCV </h2>
</head>

<body>
   
    <form action = "lobby.php" 
          method = "post">
          
          Cédula:  
          <input placeholder = "Ingrese su cédula" 		                 type = "text" 
                 name = "cedula"
                 size = "21"
                 maxlength="20"
          > 
     <p>  Clave: 	
     	  <input placeholder = "Ingrese su clave"                 type = "password" 
                 name = "clave"
                 size = "23"> </p> 
                 
     <p>  <input 
                 type = "submit" 
        		 name = "enviar" 
                 value = "Enviar"> </p>   
    </form>

</body>
</html>
