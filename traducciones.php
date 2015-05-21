<? include_once("inc/header.php"); ?>

<!--===============================================================  Cancion concreta =====================================================================================-->     
      
<?
$conexion = new mysqli("localhost", "root", "Brolin11", "antoniolf");
//$conexion = new mysqli("db449030986.db.1and1.com", "dbo449030986", "Sent7nel", "db449030986");
$conexion->set_charset("utf8"); 

?>
	<div class="wrapper">
  		<div class="grids">
		
	<div class="grid-16 grid">
	<div class="grid-5 grid"><img src="img/jukebox.png"/></div>
	<div class="grid-5 grid"><h2 style="padding-top:8px;">Jukebox</h2></div>
	<div class="grid-5 grid"><div class="buscador">
	<form method="post" id="search">
  	<input name="textoint" type="text" size="40" placeholder="Buscar..." />
	</form>
    </div></div>
    </div>
		
		 <div class="grid-16 grid text-center" style="margin-bottom:25px;">
		 <div class="alfabeto">
		 <a href="traducciones.php?letra=a">A</a>
		 <a href="traducciones.php?letra=b">B</a>
		 <a href="traducciones.php?letra=c">C</a>
		 <a href="traducciones.php?letra=d">D</a>
		 <a href="traducciones.php?letra=e">E</a>
		 <a href="traducciones.php?letra=f">F</a>
		 <a href="traducciones.php?letra=g">G</a>
		 <a href="traducciones.php?letra=h">H</a>
		 <a href="traducciones.php?letra=i">I</a>
		 <a href="traducciones.php?letra=j">J</a>
		 <a href="traducciones.php?letra=k">K</a>
		 <a href="traducciones.php?letra=l">L</a>
		 <a href="traducciones.php?letra=m">M</a>
		 <a href="traducciones.php?letra=n">N</a>
		 <a href="traducciones.php?letra=o">O</a>
		 <a href="traducciones.php?letra=p">P</a>
		 <a href="traducciones.php?letra=q">Q</a>
		 <a href="traducciones.php?letra=r">R</a>
		 <a href="traducciones.php?letra=s">S</a>
		 <a href="traducciones.php?letra=t">T</a>
		 <a href="traducciones.php?letra=u">U</a>
		 <a href="traducciones.php?letra=v">V</a>
		 <a href="traducciones.php?letra=w">W</a>
		 <a href="traducciones.php?letra=x">X</a>
		 <a href="traducciones.php?letra=y">Y</a>
		 <a href="traducciones.php?letra=z">Z</a>
		 </div>
		 </div>
		 
<!--=================================================  BUSQUEDA  =================================================================--> 
<?	 
if(isset($_POST['textoint'])) {
	
$busqueda = $_POST['textoint'];
$sql="SELECT * FROM letras where grupo like '%$busqueda%' or cancion_eng like '%$busqueda%'  order by grupo asc";
$rs = $conexion->query($sql);
?>

<div class="grid-16 grid">
<h3>Resultados busqueda</h3>
<ul class="arrow">
<?
while($row = $rs->fetch_assoc()){
?>
<li><a href="traducciones.php?edit=<?=$row['id']?>"><?=$row['grupo']?> - <?=$row['cancion_eng']?></a></li>
<? }// fin while ?>
</ul></div>
<?
}elseif(isset($_GET['edit'])) {

$sql="SELECT * FROM letras where id = '$_GET[edit]'";
$rs = $conexion->query($sql);
$row = $rs->fetch_assoc();
?> 

<!--=================================================  CANCION CONCRETA  =================================================================--> 
<div class="grid-16 grid text-center">
	<h2><?=$row['grupo']?></h2>
    <iframe width="550" height="350" src="<?=$row['enlace']?>" frameborder="0" allowfullscreen></iframe>
</div>

<div class="grid-2 grid grey text-center"></div><!-- Para que este centrado-->
<div class="grid-6 grid grey text-center">
<h3><?=$row['cancion_eng']?></h3>
<!-- ¡Etiqueta pre sin espacios a la izq.!-->
<pre class="quote">
<?=$row['letra_eng']?>
</pre>
</div>
        
<div class="grid-6 grid blue text-center">
<h3><?=$row['cancion_esp']?></h3>
<pre class="quote">
<?=$row['letra_esp']?>
</pre>
</div>
<div class="grid-2 grid grey text-center"></div><!-- Para que este centrado-->
    
<div class="grid-16 grid text-center">
	<br>
	<a href="traducciones.php" class="button">Volver</a>
</div>

   <!--=================================================  BUSQUEDA POR LETRA  =================================================================-->  
   <?	 
	}elseif(isset($_GET['letra'])) {
	$letra = $_GET['letra'];
    $sql="SELECT * FROM letras where grupo like '$letra%' order by grupo asc";
	$rs = $conexion->query($sql);
	?>
<div class="grid-16 grid">
<h1 class="text-centre"><?= $letra ?></h1>
<ul class="arrow">
<?
while($row = $rs->fetch_assoc()){
?>
<li><a href="traducciones.php?edit=<?=$row['id']?>"><?=$row['grupo']?> - <?=$row['cancion_eng']?></a></li>
<? }// fin while ?>
</ul></div>

<? }else{ 
    $sql="SELECT * FROM letras order by id desc limit 15";
	$rs = $conexion->query($sql);
?>
 <!--=================================================  CANCIONES RECIENTES  =================================================================-->  
<div class="grid-16 grid">
<h3>Ultimas traducciones</h3>
<ul class="arrow">
<?
while($row = $rs->fetch_assoc()){
?>
<li><a href="traducciones.php?edit=<?=$row['id']?>"><?=$row['grupo']?> - <?=$row['cancion_eng']?></a></li>
<? }// fin while ?>
</ul></div>
<?
}//fin ifelse 
?>  
   
</div><!--end of grids-->    
</div><!--end of wrapper--> 

            
<!--===============================================================  Footer =====================================================================================-->  

<? include_once("inc/footer.php"); ?>