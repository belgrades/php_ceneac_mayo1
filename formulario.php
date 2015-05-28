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
        	 Nombre:   <input 
            				placeholder = "Ingrese su nombre" 		                            type = "text" 
                            name = "nombre"
                            size = "21"
                            maxlength="20"
                            > 
             Apellido: <input 
            				placeholder = "Ingrese su nombre"
                            type = "text" 
                            name = "apellido"> 
            <p> Email:    <input
            				placeholder = "xxx@yyyy.com" 
            				type = "text" 
                            name = "email"
                            size = "23"> 
                            
            	ID:       <select name = "id" size = "1">
                			<option value = "V"> V </option>
                            <option value = "E"> E </option>
                            <option value = "J"> J </option>
                          </select>
                          <input 
            				type = "text" 
                            name = "id_number"
                            size = "8"
                            maxlength="8">
                            -
                            <input 
                            	type = "text"
                                name = "id_tipo"
                                size = "1"
                                maxlength= "1">
                            
            </p> 
Hombre
<input type = "radio" value = "M" name = "genero">
Mujer
<input type = "radio" value = "F" checked = "checked" name = "genero" >
<p> Fecha de nacimiento 
	<select name = "dia"> 
    	<?php
			for($i=1;$i<=31;$i++){
				echo "<option value ='$i'>$i</option>";	
			}
		?>
    </select>
	
    <select name = "mes"> 
    	<?php
				$mes = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
				
				for($i=0;$i<count($mes);$i++){
					$variable = strtolower($mes[$i]);
				echo "<option value ='$variable'>$mes[$i]</option>";	
			}
		?>
    
    </select>

	<select name = "anio"> 
        <?php
			for($i=2015;$i>=1900;$i--){
				echo "<option value ='$i'>$i</option>";	
			}
		?>
    </select>
</p>
<p> Estado 
<?php
	$ciudades = array("Zulia","Miranda","Distrito Capital","Carabobo","Lara","Aragua","Bolívar","Anzoátegui","Táchira","Sucre","Falcón","Portuguesa","Monagas","Mérida","Barinas","Guárico","Trujillo","Yaracuy","Apure","Nueva Esparta","Vargas","Cojedes","Delta Amacuro","Amazonas");
	sort($ciudades);
?>
	<select name="estados">
    	<?php
		
			for($i=0;$i<count($ciudades);$i++){
				echo "<option value ='$ciudades[$i]'>$ciudades[$i]</option>";	
			}
		?>
    </select>
</p>	

            <p> Dirección:</p> 
           	<p>			  <textarea 
            				name = "direccion"
                           	cols = "31"
                            rows = "5"> 
                          </textarea>              
            </p>         
                      
            <p> Clave: 	<input 
            				placeholder = "Ingrese su clave"
                            type = "password" 
                            name = "clave_1"
                            size = "23"> </p>
            <p> Clave: 	<input 
            				placeholder = "Ingrese su clave nuevamente"
                            type = "password" 
                            name = "clave_2"
                            size = "23"> </p>
                            
                      <textarea name = "condiciones"
                           	cols = "31"
                            rows = "5"> Términos y condiciones de uso de las marcas de Google
Si Google aprueba una solicitud para usar una marca comercial, logotipo, página web, captura de pantalla u otra característica distintiva de Google ("Las marcas de Google"), el solicitante acepta cumplir los términos y condiciones siguientes (el "Acuerdo").

El solicitante acepta respetar las Directrices sobre el uso por parte de terceros de las marcas de Google. Siempre que respete estas directrices y que Google apruebe expresamente su solicitud de autorización, Google le otorgará una licencia limitada intransferible, no exclusiva y gratuita para usar las marcas de Google establecidas en el Formulario de solicitud de autorización correspondiente solamente para los fines y los materiales establecidos en dicho formulario. Todo uso de las marcas de Google debe ir acompañado de un aviso que indique claramente que las marcas de Google son marcas comerciales o distintivas de Google Inc.

Google se reserva el derecho de modificar o dar por terminada, a su discreción, la autorización para mostrar las marcas de Google y el derecho de tomar las acciones que considere oportunas contra los usos no conformes a estos términos y condiciones, que infrinjan derechos de propiedad intelectual o de otro tipo de Google o que violen la ley aplicable.

Salvo lo estipulado anteriormente, ninguna parte de este documento otorga, ni puede considerarse que otorgue, derechos, títulos ni intereses de ningún tipo sobre las marcas de Google o en relación con ellas. El uso que se realice de las marcas de Google deberá ir en beneficio de los intereses de Google. El solicitante acepta no cuestionar ni instigar a otras personas a cuestionar las marcas de Google (salvo en la medida en que la ley aplicable prohíba esta restricción) y no registrar ni intentar registrar ningún nombre de dominio, marca comercial, nombre de marca u otra marca distintiva que pueda ser similar y confundirse con las de Google.

Las marcas de Google se proporcionan "tal cual", sin garantías de ningún tipo, ni expresas ni implícitas por ley, en relación con las marcas de Google, incluidas las garantías de no incumplimiento. Asimismo, puesto que la utilización de las marcas de Google es gratuita, Google no será en ningún caso responsable frente al cesionario de la licencia por cualquier cuestión que surja de este Acuerdo, independientemente de la teoría de la responsabilidad aplicada, incluyendo los daños directos, indirectos, accesorios, especiales, emergentes, punitivos, ejemplares o de otro tipo derivados de este Acuerdo o del uso de las marcas de Google. Esta limitación se aplicará aunque Google tuviera o debiera haber tenido conocimiento, o hubiera o debiera haber sido advertido de la posibilidad de dichos daños, sin perjuicio de la imposibilidad de lograr una finalidad esencial de cualquier acción resarcitoria estipulada en este documento. Algunos estados no permiten la exclusión de las garantías implícitas o la limitación de la responsabilidad por daños accesorios o emergentes. Por consiguiente, es posible que las limitaciones anteriores no le sean aplicables.

Queda prohibida la cesión de los derechos o la delegación de las obligaciones de este Acuerdo sin el previo consentimiento por escrito de Google. Este Acuerdo no tiene intención alguna de beneficiar a terceros ni de implicar la cesión de derechos a terceros. Este Acuerdo se regirá e interpretará de acuerdo con las leyes del Estado de California, exceptuando los principios de conflicto de leyes. La jurisdicción para cualquier disputa o reclamación que surja o esté relacionada con este Acuerdo será la del Condado de Santa Clara de California. Las partes contratantes son independientes. Ninguna parte se considerará empleado, agente, socio o representante legal de la otra para ningún fin, ni tendrá derecho, facultad ni autoridad para obligarse o responsabilizarse en nombre de la otra. La renuncia de Google a reclamar por el incumplimiento de cualquier disposición del presente Acuerdo no se considerará como una renuncia a la propia disposición. Si un tribunal con competencia jurisdiccional declarase alguna disposición de este Acuerdo contraria a la ley, dicha disposición se modificará e interpretará del mejor modo para que cumpla los objetivos de la disposición original hasta el máximo permitido por la ley. El resto de disposiciones del Acuerdo se mantendrán plenamente efectivas y vigentes. Este Acuerdo, las Directrices de uso de las marcas de Google por parte de terceros y el Formulario de solicitud de autorización constituyen todo el acuerdo entre las partes en relación con el objeto de este documento.
</textarea>
<br>
si
<input type = "radio" value = "si" name = "radio_condicion">
no
<input type = "radio" value = "no" checked = "checked" name = "radio_condicion" >
            
            <p> <input 
            		type = "submit" 
                    name = "enviar" 
                    value = "Enviar"> </p>
        </form>
<h2> Ejercicios </h2>
<h4> Nombre y apellido solo pueden contener caracteres A-Z </h4>
<h4> La cédula solo puede tener de 5 a 8 números </h4>
<h4> Las dos contraseñas deben ser iguales </h4>
<h4> Imprimimos todos los datos si y solo si el cliente aceptó las condiciones </h4>
	</body>
</html>
