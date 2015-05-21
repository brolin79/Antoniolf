<? include_once("inc/header.php"); ?>    
<link rel="stylesheet" href="css/formalize.css" />

                
<!--===============================================================  Contact form ==============================================================================-->

        
	<div class="wrapper">
   		<div class="grids top">
          
         	<div class="grid-10 grid">
            
<?

if(isset($_POST['submit'])){ 

	//Estoy recibiendo el formulario, compongo el cuerpo 
	$cuerpo = "Mensaje enviado\n"; 
	$cuerpo .= "-------------------------------\n";
	$cuerpo .= "Asunto: " . $_POST["subject"] . "\n"; 
	$cuerpo .= "Nombre: " . $_POST["name"] . "\n"; 
	$cuerpo .= "Email: " . $_POST["email"] . "\n"; 
	$cuerpo .= "Url: " . $_POST["url"] . "\n"; 
	$cuerpo .= "Mensaje:\n" . $_POST["description"] . "\n";
	//mando el correo... 
	mail("brolin79@gmail.com","Mensaje desde antoniolf.es",$cuerpo); 		
	//doy las gracias por el envío
	echo"<p class='message success'>Tu mensaje se ha enviado correctamente</p>";
}//fin submit

?>         
            	<h2>Contacto</h2>
                                  
                <form method="post" id="form">
                	<table class="form">
                      <tr>
                        <th>
                        <label for="name">Nombre *</label>
                        </th>
                        <td>
                        <input class="input_full" type="text" id="name" name="name" required autofocus />
                        </td>
                      </tr>
                      <tr>
                        <th>
                        <label for="email">Email *</label>
                        </th>
                        <td>
						<input class="input_full" type="email" id="email" name="email" required />
                        </td>
                      </tr>
					  <tr>
                      	<th>
                        <label for="url">URL</label>
                        </th>
                        <td>
                        <input class="input_full" type="text" id="url" name="url" placeholder="http://" />
                        </td>
                      </tr>
					  <tr>
                      <tr>
                      	<th>
                        <label for="subject">Asunto</label>
                        </th>
                        <td>
                        <input class="input_full" type="text" id="subject" name="subject" />
                        </td>
                      </tr>
					  <tr>
                      	<th>
                        <label for="description">Mensaje *</label>
                        </th>
                        <td>
                        <textarea id="description" name="description" rows="8" required placeholder="Deja tu mensaje aqui..."></textarea>
                        </td>
                      </tr>
					</table>
                        
                    <p>
                    <input type="submit" name="submit" class="button" value="Enviar" />
                    </p>
                </form>   
                           
        	</div><!--end of grid-10--> 
			
    <!--===============================================================  NOTA =========================================================-->    

		<div class="grid-5 grid">                    
			<div>
            	<p class="message warning bottom" style="margin-top:53px;">
                Todos los campos con asterisco deben ser rellenados
                </p>
                </div>   
			</div> 	
                        
    	</div><!--end of grids-->                   
	</div><!--end of wrapper-->	
    
    <br/><br/><br/>
    
<!--===============================================================  Footer =====================================================================================-->     

<? include_once("inc/footer.php"); ?>