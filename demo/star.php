<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Star rating</title>

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.raty.min.js"></script>

</head>

<body>
<p>Una estrella para trabajar con ella:
<br/>
<a id="star"></a><br/>
</p>

<p>Varias estrellas "de solo lectura" y valor por defecto
<br/>
<a class="fixed" title="2"></a>
<br/>
<a class="fixed" title="5"></a>
<br/>
<a class="fixed" title="3" ></a>
</p>


<p>Dentro de un bucle:<br/>
<? 
$i=0;
for ($i=0;$i<5;$i++){
echo"<a class='sview' id='$i' title='$i+1'></a><br/>";
}
?>
<div id="destino"></div>

</p>

</body>
</html>


<script language="javascript" type="text/javascript">
	$('#star').raty();

	$(".fixed").each(function(i){
		var valor = $(this).attr('title');	
		$(this).raty({
		   readOnly:  true,
		   start:     valor
		});//#raty
	});

	var i =0;
	$(".sview").each(function(i){
		var valor = $(this).attr('title');	
		var napa = "#"+i;
		$(napa).raty({
		  start: valor,
		  onClick: function(score) {
			alert("Has pulsado: "+score);
		  }
		});//#raty
	});//#sview
</script>