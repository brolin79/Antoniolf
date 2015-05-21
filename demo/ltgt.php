<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<?
function pasar($textohtml) {            
        $textohtml=str_replace("<","&lt;",$textohtml); 
        $textohtml=str_replace(">","&gt;",$textohtml); 
         
        return $textohtml;              
} 

function volver($textohtml) {            
        $textohtml=str_replace("&lt;","<",$textohtml); 
        $textohtml=str_replace("&gt;",">",$textohtml); 
         
        return $textohtml;              
}

if(isset($_POST['pasar'])){
	$cambiar = pasar($_POST['texto']);
	$resultado = htmlspecialchars($cambiar, ENT_QUOTES);
?>
	<h2>El resultado:</h2>
	<textarea name="resultado" cols="50" rows="25"><? echo"$resultado";?></textarea>

<?
}elseif(isset($_POST['volver'])){
	$resultado = volver($_POST['texto']);
?>

	<h2>El resultado:</h2>
	<textarea name="resultado" cols="50" rows="25"><? echo"$resultado";?></textarea>

<? }else{ ?>
<p>Pasar a lt;/gt;</p>
<form method="post">
<textarea name="texto" cols="50" rows="25"></textarea>
<br />
<input type="submit" name="pasar" value="Pasar"/>
</form>

<p>Volver a <></p>
<form method="post">
<textarea name="texto" cols="50" rows="25"></textarea>
<br />
<input type="submit" name="volver" value="Volver"/>
</form>

<? }//fin submit ?>
<body>
</body>
</html>