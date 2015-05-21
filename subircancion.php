<? include_once("inc/header.php"); ?>    
<link rel="stylesheet" href="css/formalize.css" />

                
<!--===============================================================  Contact form ==============================================================================-->

        
	<div class="wrapper">
          
         	<div class="grid-12 grid">
            
<?

if(isset($_POST['submit'])){ 
//$conexion = new mysqli("localhost", "root", "Brolin11", "antoniolf");
$conexion = new mysqli("db449030986.db.1and1.com", "dbo449030986", "Sent7nel", "db449030986");
$conexion->set_charset("utf8"); 

$rev_tituloeng = $conexion->real_escape_string($_POST["titulo_eng"]);
$rev_tituloesp = $conexion->real_escape_string($_POST["titulo_esp"]);
$rev_letraeng = $conexion->real_escape_string($_POST["letra_eng"]);
$rev_letraesp = $conexion->real_escape_string($_POST["letra_esp"]);

$sql = "INSERT INTO letras (grupo,enlace,cancion_eng,cancion_esp,letra_eng,letra_esp) 
		VALUES ('$_POST[grupo]','$_POST[enlace]','$rev_tituloeng','$rev_tituloesp','$rev_letraeng','$rev_letraesp')";

$guardar = $conexion->query($sql);

if (!$guardar) {
	echo"<div class='error'>Ha ocurrido un error</div>";
}else{
	echo"<div class='success'>Cancion guardada correctamente</div>";
}

}//fin submit

?>         
            	<h2>Nueva Cancion</h2>
                                  
                <form method="post" id="form">
                	<table class="form">
                      <tr>
                        <th>
                        <label for="grupo">Grupo</label>
                        </th>
                        <td>
                        <input class="input_full" type="text" id="grupo" name="grupo" required autofocus />
                        </td>
                      </tr>
                      <tr>
                        <th>
                        <label for="enlace">Enlace Youtube</label>
                        </th>
                        <td>
                        <input class="input_full" type="text" id="enlace" name="enlace" required />
                        </td>
                      </tr>
                      <tr>
                        <th>
                        <label for="titulo_eng">Titulo eng.</label>
                        </th>
                        <td>
						<input class="input_full" type="text" id="titulo_eng" name="titulo_eng" required />
                        </td>
                      </tr>
                      <tr>
                        <th>
                        <label for="titulo_esp">Titulo esp.</label>
                        </th>
                        <td>
						<input class="input_full" type="text" id="titulo_esp" name="titulo_esp" required />
                        </td>
                      </tr>
					  <tr>
                      	<th>
                        <label for="letra_eng">Letra eng.</label>
                        </th>
                        <td>
                        <textarea id="letra_eng" name="letra_eng" rows="8" required></textarea>
                        </td>
                      </tr>
					  <tr>
                      	<th>
                        <label for="letra_esp">Letra esp.</label>
                        </th>
                        <td>
                        <textarea id="letra_esp" name="letra_esp" rows="8" required></textarea>
                        </td>
                      </tr>
					</table>
                        
                    <p>
                    <input type="submit" name="submit" class="button" value="Enviar" />
                    </p>
                </form>   
                           
        	</div><!--end of grid-10--> 
			
    <!--===============================================================  NOTA =========================================================-->    
                  
	</div><!--end of wrapper-->	
    
    <br/><br/><br/>
    
<!--===============================================================  Footer =====================================================================================-->     

<? include_once("inc/footer.php"); ?>