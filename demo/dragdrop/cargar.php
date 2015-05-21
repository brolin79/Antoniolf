 <script type="text/javascript">
	 $(document).ready(function(){
		 
		$(a).click(function(evento){
    	  evento.preventDefault();
			//parent.document.location = window.location='dragdrop.php';
			window.close();
		
    });//#aclick
	
	 });//ready
 
 </script>

<?
/*database info local
 $databaseserver = "localhost"; //normalmente localhost
 $databasename = "demo"; //nombre de la bd
 $databaseuser = "root"; //nombre de usuario de la bd
 $databasepass = "Brolin11"; // password de la bd */
 
 //database info online
 $databaseserver = "db449031449.db.1and1.com"; //normalmente localhost
 $databasename = "db449031449"; //nombre de la bd
 $databaseuser = "dbo449031449"; //nombre de usuario de la bd
 $databasepass = "Sent7nel"; // password de la bd
 
//conexion
$db = mysql_connect($databaseserver, $databaseuser, $databasepass);
mysql_query("SET NAMES 'utf8'");
mysql_select_db($databasename,$db);


echo"<ul>";

$rs = mysql_query("SELECT * FROM salvar");
while ($row = mysql_fetch_array($rs)){
	echo"<li><a href=''>$row[nombre] - $row[equipo]</li></a>";
}
echo"</ul>";

?>