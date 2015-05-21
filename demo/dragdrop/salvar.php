<?
$nombre = htmlspecialchars(trim($_POST['nombre']));
$tactica = htmlspecialchars(trim($_POST['tactica']));
$equipo = htmlspecialchars(trim($_POST['equipo']));
$num01 = htmlspecialchars(trim($_POST['num01']));
$num02 = htmlspecialchars(trim($_POST['num02']));
$num03 = htmlspecialchars(trim($_POST['num03']));
$num04 = htmlspecialchars(trim($_POST['num04']));
$num05 = htmlspecialchars(trim($_POST['num05']));
$num06 = htmlspecialchars(trim($_POST['num06']));
$num07 = htmlspecialchars(trim($_POST['num07']));
$num08 = htmlspecialchars(trim($_POST['num08']));
$num09 = htmlspecialchars(trim($_POST['num09']));
$num10 = htmlspecialchars(trim($_POST['num10']));
$num11 = htmlspecialchars(trim($_POST['num11']));

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

$sql = "INSERT INTO salvar (nombre, tactica, equipo,num01,num02,num03,num04,num05,num06,num07,num08,num09,num10,num11)
		VALUES ('$nombre','$tactica','$equipo','$num01','$num02','$num03','$num04','$num05','$num06','$num07','$num08','$num09','$num10','$num11')";
$rs = mysql_query($sql) or die (mysql_error());
?>