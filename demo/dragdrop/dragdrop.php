<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>DRAG AND DROP</title>
 <link type="text/css" href="css/dragdrop.css" rel="stylesheet" />
 <link type="text/css" href="css/jquery_ui.css" rel="stylesheet" />
 <script type="text/javascript" src="js/jquery_min.js"></script>  
 <script type="text/javascript" src="js/jquery_ui.js"></script>
 <script type="text/javascript" src="js/dragdrop.js"></script>
</head>

<body>
<?
/*database info
 $databaseserver = "localhost"; //normalmente localhost
 $databasename = "demo"; //nombre de la bd
 $databaseuser = "root"; //nombre de usuario de la bd
 $databasepass = "Brolin11"; // password de la bd*/
 
 //database info online
 $databaseserver = "db449031449.db.1and1.com"; //normalmente localhost
 $databasename = "db449031449"; //nombre de la bd
 $databaseuser = "dbo449031449"; //nombre de usuario de la bd
 $databasepass = "Sent7nel"; // password de la bd

//conexion
$db = mysql_connect($databaseserver, $databaseuser, $databasepass);
mysql_query("SET NAMES 'utf8'");
mysql_select_db($databasename,$db);

function getname($id,$equipo){
	$rs = mysql_query("SELECT Jugador FROM $equipo where Dorsal='$id'");
	$row = mysql_fetch_array($rs);	
	return $row['Jugador'];
}//#getname
?>

<div id="alineacion">
<div id="tactica">
<div id="players">

<?
if(isset($_GET['carga'])){
	$rs = mysql_query("SELECT equipo FROM salvar where id='$_GET[carga]'");
	$row = mysql_fetch_array($rs);
	$equipo = $row['equipo'];
	$tactica = $row['tactica'];
}else{
	$equipo = $_GET['edit'];
	$tactica = "442dp";
}//es carga o no

 //PORTEROS
$rs = mysql_query("SELECT * FROM $equipo where Posicion='POR'");
while ($row = mysql_fetch_array($rs)){
?>
	<div class="player POR" id="<? echo $row['Dorsal'] ?>"><span><? echo $row['Jugador'] ?></span></div>    
<? }//fin while?>
<? //DEFENSAS
$rs = mysql_query("SELECT * FROM $equipo where Posicion='DEF'");
while ($row = mysql_fetch_array($rs)){
?>
	<div class="player DEF" id="<? echo $row['Dorsal'] ?>"><span><? echo $row['Jugador'] ?></span></div>    
<? }//fin while?>
<? //MEDIOS
$rs = mysql_query("SELECT * FROM $equipo where Posicion='MED'");
while ($row = mysql_fetch_array($rs)){
?>
	<div class="player MED" id="<? echo $row['Dorsal'] ?>"><span><? echo $row['Jugador'] ?></span></div>    
<? }//fin while?>
<? //DELANTEROS
$rs = mysql_query("SELECT * FROM $equipo where Posicion='DEL'");
while ($row = mysql_fetch_array($rs)){
?>
	<div class="player DEL" id="<? echo $row['Dorsal'] ?>"><span><? echo $row['Jugador'] ?></span></div>    
<? }//fin while?>

</div><!-- FIN DIV-PLAYERS -->  
<div id="formacion">
<ul>
<li><input type="button" value="4-4-2 (d.p.)" id="442dp"></li>
<li><input type="button" value="4-4-2 (rombo)" id="442r"></li>
<li><input type="button" value="4-3-3" id="433"></li>
<li><input type="button" value="4-2-3-1" id="4231"></li>
<li><input type="button" value="5-3-2" id="532"></li>
<li><input type="button" value="3-4-3" id="343"></li>
</ul>
</div><!-- FIN DIV-FORMACION -->  
</div><!-- FIN DIV-TACTICA -->  
       
<div id="field">

<?
if(isset($_GET['carga'])){
	$rs = mysql_query("SELECT * FROM salvar where id='$_GET[carga]'");
	$row = mysql_fetch_array($rs);
?>
	<div class="position" id="num01"><span>1</span><p><?= getname($row['num01'],$equipo); ?></p></div>
	<div class="position" id="num02"><span>2</span><p><?= getname($row['num02'],$equipo); ?></p></div>
   	<div class="position" id="num03"><span>3</span><p><?= getname($row['num03'],$equipo); ?></p></div>
	<div class="position" id="num04"><span>4</span><p><?= getname($row['num04'],$equipo); ?></p></div>
    <div class="position" id="num05"><span>5</span><p><?= getname($row['num05'],$equipo); ?></p></div>
	<div class="position" id="num06"><span>6</span><p><?= getname($row['num06'],$equipo); ?></p></div>
   	<div class="position" id="num07"><span>7</span><p><?= getname($row['num07'],$equipo); ?></p></div>
	<div class="position" id="num08"><span>8</span><p><?= getname($row['num08'],$equipo); ?></p></div>
    <div class="position" id="num09"><span>9</span><p><?= getname($row['num09'],$equipo); ?></p></div>
	<div class="position" id="num10"><span>10</span><p><?= getname($row['num10'],$equipo); ?></p></div>
   	<div class="position" id="num11"><span>11</span><p><?= getname($row['num11'],$equipo); ?></p></div>

<? }else{ ?>
	<div class="position" id="num01"><span>1</span><p>Arrastra aqui</p></div>
	<div class="position" id="num02"><span>2</span><p>Arrastra aqui</p></div>
   	<div class="position" id="num03"><span>3</span><p>Arrastra aqui</p></div>
	<div class="position" id="num04"><span>4</span><p>Arrastra aqui</p></div>
    <div class="position" id="num05"><span>5</span><p>Arrastra aqui</p></div>
	<div class="position" id="num06"><span>6</span><p>Arrastra aqui</p></div>
   	<div class="position" id="num07"><span>7</span><p>Arrastra aqui</p></div>
	<div class="position" id="num08"><span>8</span><p>Arrastra aqui</p></div>
    <div class="position" id="num09"><span>9</span><p>Arrastra aqui</p></div>
	<div class="position" id="num10"><span>10</span><p>Arrastra aqui</p></div>
   	<div class="position" id="num11"><span>11</span><p>Arrastra aqui</p></div>
<? }//fin carga o no?>

</div><!-- FIN DIV-FIELD -->
 
<div id="salvar">
<form name="salvar" method="post">
<label for="nombre">Nombre:</label>
&nbsp;
<input type="text" name="nombre" id="nombre" />
&nbsp;
<input type="button" value="Guardar" id="guardar"/>
&nbsp;
<input type="button" value="Resetear" id="resetear"/>
&nbsp;
<!-- <input type="button" value="Cargar" id="cargar" /> -->
    <input type="button" id="dialog_link" value="Open">
   	<!-- ui-dialog -->
	<div id="dialog" title="Equipos guardados">
    <?
	$rs = mysql_query("SELECT * FROM salvar");
	while ($row = mysql_fetch_array($rs)){
	?>
		<p style="font-size:14px;"><a href="#" id="<?= $row['id']; ?>" name="<?= $row['tactica']; ?>"><?= $row['nombre']; ?> - <?= $row['equipo']; ?></a></p>
    <? }//fin cargar ?>
	</div>

<input type="hidden" value="<? echo $equipo; ?>" id="equipo" />
<input type="hidden" value="<? echo $tactica; ?>" id="tactica" />
</form>
</div><!-- FIN DIV-SALVAR -->


</div>

<div id="destino"></div>

<input type="button" value="Volver" id="volver" style="margin-top:100px;"/>

</body>
</html>