<? include_once("inc/header.php"); ?>

<link rel="stylesheet" href="css/tabs.css" />
<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script src="js/jquery.js" type="text/javascript"></script>
<script type='text/javascript' src='js/tabs.js'></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
	
		$("a[rel=pachangas]").fancybox({
			'opacity'		: true,
			'overlayShow'	: false,
			'transitionIn'		: 'elastic',
			'transitionOut'		: 'none',
			'titlePosition' 	: 'over',
			'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
			return '<span id="fancybox-title-over">' + title +' </span>';
			}
		});
		
		$("a[rel=equipos]").fancybox({
			'opacity'		: true,
			'overlayShow'	: false,
			'transitionIn'		: 'elastic',
			'transitionOut'		: 'none',
			'titlePosition' 	: 'over',
			'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
			return '<span id="fancybox-title-over">' + title +' </span>';
			}
		});
		
		$("a[rel=souvenirs]").fancybox({
			'opacity'		: true,
			'overlayShow'	: false,
			'transitionIn'		: 'elastic',
			'transitionOut'		: 'none',
			'titlePosition' 	: 'over',
			'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
			return '<span id="fancybox-title-over">' + title +' </span>';
			}
		});
		
		$("a[rel=pantalones]").fancybox({
			'opacity'		: true,
			'overlayShow'	: false,
			'transitionIn'		: 'elastic',
			'transitionOut'		: 'none',
			'titlePosition' 	: 'over',
			'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
			return '<span id="fancybox-title-over">' + title +' </span>';
			}
		});
	
	});//#document
</script>

<!--=============================================================== CAMISETAS =====================================================================================-->     
      
<div class="wrapper"> 
  <div class="grids">         

	<div class="grid-16 grid">
	
	
<ul id="tabs">
    <li><a href="#" name="tab1">Equipos</a></li>
    <li><a href="#" name="tab2">Pachangas</a></li>
    <li><a href="#" name="tab3">Souvenirs</a></li>
    <li><a href="#" name="tab4">Pantalones</a></li>
</ul>

<div id="content"> 
    <div id="tab2">
		<h3>Pachangas</h3>    
		<a rel="pachangas" href="camisetas/pachangas/big/Autoescuela.jpg" 
        title="Camiseta del equipo de la autoescuela, me toco el 2 a pesar de jugar de medio centro, por llegar tarde.">
       	<img src="camisetas/pachangas/thumb/Autoescuela.jpg" class="gallery" /></a>
		<a rel="pachangas" href="camisetas/pachangas/big/Independiente.jpg" 
        title="Tercer año de mancomunidad aqui conocidos como independiente, con el 7, como siempre en este torneo.">
       	<img src="camisetas/pachangas/thumb/Independiente.jpg" class="gallery" /></a>
		<a rel="pachangas" href="camisetas/pachangas/big/Nocturno.jpg" 
        title="La camiseta para el equipo del nocturno aunque nunca llegamos a competir, con el once que era mi numero de aquella.">
       	<img src="camisetas/pachangas/thumb/Nocturno.jpg" class="gallery" /></a>
		<a rel="pachangas" href="camisetas/pachangas/big/PickingTatto.jpg" 
        title="Cuarto año de mancomunidad, ahora conocidos como picking tattoo, una vez mas con el 7.">
       	<img src="camisetas/pachangas/thumb/PickingTatto.jpg" class="gallery" /></a>
		<a rel="pachangas" href="camisetas/pachangas/big/Piedad.jpg" 
        title="Nuestra primera camiseta al participar en el torneo de mancomunidad. El 7 del que no me separaria en este torneo.">
       	<img src="camisetas/pachangas/thumb/Piedad.jpg" class="gallery" /></a>
		<a rel="pachangas" href="camisetas/pachangas/big/Recreativos.jpg" 
        title="Equipacion mitica que usamos en nuestro primer y unico campeonato a raiz de los resultados. Fuimos los precursores en la moda de camisetas ceñidas.">
       	<img src="camisetas/pachangas/thumb/Recreativos.jpg" class="gallery" /></a>
		<a rel="pachangas" href="camisetas/pachangas/big/SabadosAzul1.jpg" 
        title="Camiseta que usaba en la peña de las pachangas de los sabados, nuestro rival iba de verde.">
       	<img src="camisetas/pachangas/thumb/SabadosAzul1.jpg" class="gallery" /></a>
		<a rel="pachangas" href="camisetas/pachangas/big/SabadosAzul2.jpg" 
        title="La nueva camiseta azul de las pachangas tras mi vuelta.">
       	<img src="camisetas/pachangas/thumb/SabadosAzul2.jpg" class="gallery" /></a>
		<a rel="pachangas" href="camisetas/pachangas/big/SabadosAmarillo.jpg" 
        title="Durante un corto espacio de tiempo tambien jugue de amarillo los sabados.">
       	<img src="camisetas/pachangas/thumb/SabadosAmarillo.jpg" class="gallery" /></a>
	</div>
    <div id="tab1">
		<h3>Equipos</h3>
		<a rel="equipos" href="camisetas/equipos/big/Espana94.jpg" 
        title="Mi primera camiseta de la seleccion de la epoca clementista, se le borro el once que le puse.">
       	<img src="camisetas/equipos/thumb/Espana94.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Espana96.jpg" 
        title="Me gusto la camiseta del 96, un poco tradicional pero con muchos detalles.">
       	<img src="camisetas/equipos/thumb/Espana96.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Espana06.jpg" 
        title="Realmente crei que seria nuestro mundial y el de Raul por eso la pille 10 años despues de la ultima.">
       	<img src="camisetas/equipos/thumb/Espana06.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Espana12.jpg" 
        title="Una de las mas bonitas de la seleccion y con la que batimos el record de ganar 3 competiciones seguidas.">
       	<img src="camisetas/equipos/thumb/Espana12.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Sporting94.jpg" 
        title="Mi primera camiseta del sporting, no la habia de manga corta.">
       	<img src="camisetas/equipos/thumb/Sporting94.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Sporting08.jpg" 
        title="La camiseta del ascenso, presenti lo que despues felizmente ocurrio. Pobre del que quiera ...">
       	<img src="camisetas/equipos/thumb/Sporting08.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/LiverpoolBlanca.jpg" 
        title="No es la red clasica pero necesitaba una blanca, con el 8 de gerrard uno de mis idolos.">
       	<img src="camisetas/equipos/thumb/LiverpoolBlanca.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Liverpool14.jpg" 
        title="Regalo de mi equipo favorito de la premier con el 8 motivador de gerrard el año que casi ganamos.">
       	<img src="camisetas/equipos/thumb/Liverpool14.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Inter100.jpg" 
        title="Camiseta del centenario del equipo neoazzurri y una de mis favoritas de verdad.">
       	<img src="camisetas/equipos/thumb/Inter100.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Inter14.jpg" 
        title="La camiseta del inter de 2014, demasiado ciñada para mi gusto.">
       	<img src="camisetas/equipos/thumb/Inter14.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Gremio.jpg" 
        title="Fue por una oferta pero se convirtio en una de las mas usadas, con esta empece a llevar el 7 que me daria suerte..">
       	<img src="camisetas/equipos/thumb/Gremio.jpg" class="gallery" /></a>
        <a rel="equipos" href="camisetas/equipos/big/Psv.jpg" 
        title="Mi favorito holandes, una camiseta bonita que estaba en oferta.">
       	<img src="camisetas/equipos/thumb/Psv.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Kaiserlautern.jpg" 
        title="No es que sea mi favorito de alemania pero me gusto y le cogi un gran cariño. El 7 seguia dandome suerte.">
       	<img src="camisetas/equipos/thumb/Kaiserlautern.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Suecia.jpg" 
        title="Mi aprecio por este pais y por Brolin me llevo a pillarla, siempre quise ponerle el once pero entre una cosa y otra.">
       	<img src="camisetas/equipos/thumb/Suecia.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Fiore.jpg" 
        title="Necesitaba una azul y el diseño de esta me encato, ademas de ser un equipo que me gusta.">
       	<img src="camisetas/equipos/thumb/Fiore.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Alemania.jpg" 
        title="Un regalo de reyes con ocasion de los ultimos campeones del mundo.">
       	<img src="camisetas/equipos/thumb/Alemania.jpg" class="gallery" /></a>
	</div>
    <div id="tab3">
		<h3>Souvenirs</h3>
		<a rel="souvenirs" href="camisetas/souvenirs/big/SLisboa.jpg" 
        title="De mi viaje a lisboa, mi favorito por la afinidad linguistica con el de mis amores.">
       	<img src="camisetas/souvenirs/thumb/SLisboa.jpg" class="gallery" /></a>
		<a rel="souvenirs" href="camisetas/souvenirs/big/Eire.jpg" 
        title="De mi viaje a Irlanda, no es la oficial porque era mas guapa esta.">
       	<img src="camisetas/souvenirs/thumb/Eire.jpg" class="gallery" /></a>
		<a rel="souvenirs" href="camisetas/souvenirs/big/Alemania.jpg" 
        title="De mi viaje a Alemania, bonita pero al ser imitacion muy mala calidad.">
       	<img src="camisetas/souvenirs/thumb/Alemania.jpg" class="gallery" /></a>
		<a rel="souvenirs" href="camisetas/souvenirs/big/Roma.jpg" 
        title="Regalo de amigos en su viaje a Roma. Con el 10 del grandisimo Totti.">
       	<img src="camisetas/souvenirs/thumb/Roma.jpg" class="gallery" /></a>
		<a rel="souvenirs" href="camisetas/souvenirs/big/Liverpool.jpg" 
        title="Regalo de amigos en su viaje a Inglaterra. Con el 9 del traidor Torres.">
       	<img src="camisetas/souvenirs/thumb/Liverpool.jpg" class="gallery" /></a>
		<a rel="souvenirs" href="camisetas/souvenirs/big/Canada.jpg" 
        title="Regalo de amigos en su viaje a Canada. Se nota que no tienen gran equipo.">
       	<img src="camisetas/souvenirs/thumb/Canada.jpg" class="gallery" /></a>
		<a rel="souvenirs" href="camisetas/souvenirs/big/Hungria.jpg" 
        title="Regalo de amigos en su viaje a Hungria. El 10 de su jugador emblema.">
       	<img src="camisetas/souvenirs/thumb/Hungria.jpg" class="gallery" /></a>
		<a rel="souvenirs" href="camisetas/souvenirs/big/Libano.jpg" 
        title="Regalo de amigos en su viaje a Libano. No muy bonita pero comoda.">
       	<img src="camisetas/souvenirs/thumb/Libano.jpg" class="gallery" /></a>
		<a rel="souvenirs" href="camisetas/souvenirs/big/Marruecos.jpg" 
        title="Conseguida por un amigo. Comoda y elegante a pesar de su poca tradicion futbolistica.">
       	<img src="camisetas/souvenirs/thumb/Marruecos.jpg" class="gallery" /></a>
	</div>
	<div id="tab4">
  		<h3>Pantalones</h3>
		<a rel="pantalones" href="camisetas/pantalones/big/Alemania.jpg" 
        title="Bastante elegantes para tratarse de unos pantalones deportivos.">
       	<img src="camisetas/pantalones/thumb/Alemania.jpg" class="gallery" /></a>
		<a rel="pantalones" href="camisetas/pantalones/big/Celtic.jpg" 
        title="Los pantalones de mi equipo escoces favorito.">
       	<img src="camisetas/pantalones/thumb/Celtic.jpg" class="gallery" /></a>
		<a rel="pantalones" href="camisetas/pantalones/big/Hertha.jpg" 
        title="Del Hertha de Berlin, buenos, baratos y bonitos para ser una oferta.">
       	<img src="camisetas/pantalones/thumb/Hertha.jpg" class="gallery" /></a>
		<a rel="pantalones" href="camisetas/pantalones/big/Inter1.jpg" 
        title="Quizas los pantalones mas elegantes y sobrios del futbol.">
       	<img src="camisetas/pantalones/thumb/Inter1.jpg" class="gallery" /></a>
		<a rel="pantalones" href="camisetas/pantalones/big/Inter2.jpg" 
        title="De mi viaje a Italia, los de siempre rejuvenecidos.">
       	<img src="camisetas/pantalones/thumb/Inter2.jpg" class="gallery" /></a>
		<a rel="pantalones" href="camisetas/pantalones/big/Holanda.jpg" 
        title="Una oferta de unos buenos pantalones de la seleccion orange.">
       	<img src="camisetas/pantalones/thumb/Holanda.jpg" class="gallery" /></a>
	</div>
</div>


	</div><!--end of grid-16--> 
			           
  </div><!--end of grids-->     
</div><!--end of wrapper-->
    
        
<!--===============================================================  Footer =====================================================================================-->  

<? include_once("inc/footer.php"); ?>