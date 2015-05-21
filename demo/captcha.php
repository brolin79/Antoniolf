<!DOCTYPE>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Captcha</title>
</head>
<body>

<?
if(isset($_POST['submit'])) {
	
	if($_POST['introducido']!=$_POST['numero']){
		echo"<h3>Error en el captcha introducido</h3>";
	}else{
		echo"<h3>Todo OK</h3>";
	}//fin captcha

}else{
?>
    <p>Deja tu comentario</p>
    <form method="post">
        <label>Tu Nombre: </label>
        <br/>
        <input type="text" name="nombre" size="30"/>
        <br/>
        <label>Tu E-mail: </label>
        <br/>
        <input type="email" name="email" size="30" />
        <br/>
        <label>Comentario: </label>
        <br/>
        <textarea cols="30" rows="5" name="txt" ></textarea>   
        <br/>
        <label>Anti-spam:</label>
        <br/>
        <? 
        $Num1 = rand(0,9);
        $Num2 = rand(0,9);
        $Num3 = rand(0,9);
        $Num4 = rand(0,9);
        $Total = "$Num1"."$Num2"."$Num3"."$Num4";
        ?>
        <input type="text" size="4" value="<?= $Num1 ?> <?= $Num2 ?> <?= $Num3 ?> <?= $Num4 ?>" disabled="disabled" /> Introduce el codigo:
        <input type="text" name="introducido" size="5" maxlength="4"/> 
        <br/>
        <input type="hidden" name="numero" value="<?= $Total ?>" />
        <input type="submit" name="submit" value="Enviar" /></div>
    </form>
<? }//fin post?>

</body>
</html>