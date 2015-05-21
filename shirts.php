<? include_once("inc/headeren.php"); ?>

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
    <li><a href="#" name="tab1">Football teams</a></li>
    <li><a href="#" name="tab2">My teams</a></li>
    <li><a href="#" name="tab3">Souvenirs</a></li>
    <li><a href="#" name="tab4">Shorts</a></li>
</ul>

<div id="content"> 
    <div id="tab2">
		<h3>My teams</h3>    
		<a rel="pachangas" href="camisetas/pachangas/big/Autoescuela.jpg" 
        title="Shirt of the driving school team, I had to wear the number two although been midfielder, i came late.">
       	<img src="camisetas/pachangas/thumb/Autoescuela.jpg" class="gallery" /></a>
		<a rel="pachangas" href="camisetas/pachangas/big/Independiente.jpg" 
		title="Thrid year in mancomunidad tournament, here we were known as independiente. I carry number 7 as usual.">
       	<img src="camisetas/pachangas/thumb/Independiente.jpg" class="gallery" /></a>
		<a rel="pachangas" href="camisetas/pachangas/big/Nocturno.jpg" 
		title="The shirt of the nocturno team although we never participate in a tournament. Number 11, my favorite then.">
       	<img src="camisetas/pachangas/thumb/Nocturno.jpg" class="gallery" /></a>
		<a rel="pachangas" href="camisetas/pachangas/big/PickingTatto.jpg" 
        title="4rd year in the tournament, now as picking tatto, as usual number 7.">
       	<img src="camisetas/pachangas/thumb/PickingTatto.jpg" class="gallery" /></a>
		<a rel="pachangas" href="camisetas/pachangas/big/Piedad.jpg" 
        title="Our first shirt in this tournament. I pick number 7 as usually">
       	<img src="camisetas/pachangas/thumb/Piedad.jpg" class="gallery" /></a>
		<a rel="pachangas" href="camisetas/pachangas/big/Recreativos.jpg" 
        title="Myth shirt that we used in our first and last champioship due to the results. We were the precursors of the tight shirts style.">
       	<img src="camisetas/pachangas/thumb/Recreativos.jpg" class="gallery" /></a>
		<a rel="pachangas" href="camisetas/pachangas/big/SabadosAzul1.jpg" 
        title="Used in the peña that we played in saturdays, our rival was green.">
       	<img src="camisetas/pachangas/thumb/SabadosAzul1.jpg" class="gallery" /></a>
		<a rel="pachangas" href="camisetas/pachangas/big/SabadosAzul2.jpg" 
		title="The new blue shirt of the matchs after my back.">
       	<img src="camisetas/pachangas/thumb/SabadosAzul2.jpg" class="gallery" /></a>
		<a rel="pachangas" href="camisetas/pachangas/big/SabadosAmarillo.jpg" 
        title="During a short time i played saturdays as yellow too.">
       	<img src="camisetas/pachangas/thumb/SabadosAmarillo.jpg" class="gallery" /></a>
	</div>
    <div id="tab1">
		<h3>Football Teams</h3>
		<a rel="equipos" href="camisetas/equipos/big/Espana94.jpg" 
        title="My first spanish football team shirt from clemente era, number eleven was erased.">
       	<img src="camisetas/equipos/thumb/Espana94.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Espana96.jpg" 
        title="I liked the shirt of 96, a little bit traditional but with many details.">
       	<img src="camisetas/equipos/thumb/Espana96.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Espana06.jpg" 
        title="I really thought that 2006 would be our year and the year of Raul too, that's why i bought it 10 years after.">
       	<img src="camisetas/equipos/thumb/Espana06.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Espana12.jpg" 
        title="One of the prettiest shrits of spanish football team, which we made the record of winning 3 followed competitions.">
       	<img src="camisetas/equipos/thumb/Espana12.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Sporting94.jpg" 
        title="Mi first Sporting de Gijon shirt, there wasn't short sleeve.">
       	<img src="camisetas/equipos/thumb/Sporting94.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Sporting08.jpg" 
        title="The shirt of the 'ascenso', I presaged what at the end happily happened. Poor the one who wants...">
       	<img src="camisetas/equipos/thumb/Sporting08.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/LiverpoolBlanca.jpg" 
        title="It's not the classic red shirt but i needed it white, with gerrard number 8, one of my idols.">
       	<img src="camisetas/equipos/thumb/LiverpoolBlanca.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Liverpool14.jpg" 
        title="A present of my favortite premier league team, with the motivational number 8 of gerrard the year we almost won.">
       	<img src="camisetas/equipos/thumb/Liverpool14.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Inter100.jpg" 
        title="Shirt of the centenary from the neoazzurri team and one of my true favorites.">
       	<img src="camisetas/equipos/thumb/Inter100.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Inter14.jpg" 
        title="The Inter shirt of 2014, too tight for my liking.">
       	<img src="camisetas/equipos/thumb/Inter14.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Gremio.jpg" 
        title="It was an offer but it became of the most used. With this one I started to use the number 7.">
       	<img src="camisetas/equipos/thumb/Gremio.jpg" class="gallery" /></a>
        <a rel="equipos" href="camisetas/equipos/big/Psv.jpg" 
        title="My favorite holland team. Nice shirt find it in a offer.">
       	<img src="camisetas/equipos/thumb/Psv.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Kaiserlautern.jpg" 
        title="It's not my favorite german team but i liked and I really enjoy it. Number 7 still gave me luck.">
       	<img src="camisetas/equipos/thumb/Kaiserlautern.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Suecia.jpg" 
        title="My affection for this country and Brolin make me bought it. I always wanted to put the number 11 but...">
       	<img src="camisetas/equipos/thumb/Suecia.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Fiore.jpg" 
        title="I needed a blue one and I loved this design, also of being a team i like.">
       	<img src="camisetas/equipos/thumb/Fiore.jpg" class="gallery" /></a>
		<a rel="equipos" href="camisetas/equipos/big/Alemania.jpg" 
        title="A present of kings day coinciding with the last world champions.">
       	<img src="camisetas/equipos/thumb/Alemania.jpg" class="gallery" /></a>
	</div>
    <div id="tab3">
		<h3>Souvenirs</h3>
		<a rel="souvenirs" href="camisetas/souvenirs/big/SLisboa.jpg" 
        title="From my travel around Lisboa, my favorite from portugal due to the similitude of the name.">
       	<img src="camisetas/souvenirs/thumb/SLisboa.jpg" class="gallery" /></a>
		<a rel="souvenirs" href="camisetas/souvenirs/big/Eire.jpg" 
        title="From my travel around Ireland, it's not the original because this one was prettier.">
       	<img src="camisetas/souvenirs/thumb/Eire.jpg" class="gallery" /></a>
		<a rel="souvenirs" href="camisetas/souvenirs/big/Alemania.jpg" 
        title="From my travel around Germany, nice but not original with very bad quality">
       	<img src="camisetas/souvenirs/thumb/Alemania.jpg" class="gallery" /></a>
		<a rel="souvenirs" href="camisetas/souvenirs/big/Roma.jpg" 
        title="A present of friends in their travel around Rome. With the number 10 of the great Totti.">
       	<img src="camisetas/souvenirs/thumb/Roma.jpg" class="gallery" /></a>
		<a rel="souvenirs" href="camisetas/souvenirs/big/Liverpool.jpg" 
        title="A present of friends in their travel around England. With the number 9 of betrayer Torres.">
       	<img src="camisetas/souvenirs/thumb/Liverpool.jpg" class="gallery" /></a>
		<a rel="souvenirs" href="camisetas/souvenirs/big/Canada.jpg" 
        title="A present of friends in their travel around Canada. Is noticed they don't have football tradition.">
       	<img src="camisetas/souvenirs/thumb/Canada.jpg" class="gallery" /></a>
		<a rel="souvenirs" href="camisetas/souvenirs/big/Hungria.jpg" 
        title="A present of friends in their travel around Hungry. Number 10 of their best player ever.">
       	<img src="camisetas/souvenirs/thumb/Hungria.jpg" class="gallery" /></a>
		<a rel="souvenirs" href="camisetas/souvenirs/big/Libano.jpg" 
        title="A present of friends in their travel around Libano. Not pretty but comfortable.">
       	<img src="camisetas/souvenirs/thumb/Libano.jpg" class="gallery" /></a>
		<a rel="souvenirs" href="camisetas/souvenirs/big/Marruecos.jpg" 
        title="A present of a friend. Elegant and comfortable .">
       	<img src="camisetas/souvenirs/thumb/Marruecos.jpg" class="gallery" /></a>
	</div>
	<div id="tab4">
  		<h3>Shorts</h3>
		<a rel="pantalones" href="camisetas/pantalones/big/Alemania.jpg" 
        title="Very elegants for being a football shorts.">
       	<img src="camisetas/pantalones/thumb/Alemania.jpg" class="gallery" /></a>
		<a rel="pantalones" href="camisetas/pantalones/big/Celtic.jpg" 
        title="The shorts of my favorite scottish team.">
       	<img src="camisetas/pantalones/thumb/Celtic.jpg" class="gallery" /></a>
		<a rel="pantalones" href="camisetas/pantalones/big/Hertha.jpg" 
        title="From Hertha Berlin team , good, cheap and pretty for being an offer.">
       	<img src="camisetas/pantalones/thumb/Hertha.jpg" class="gallery" /></a>
		<a rel="pantalones" href="camisetas/pantalones/big/Inter1.jpg" 
        title="Maybe the more elegants and sober shorts.">
       	<img src="camisetas/pantalones/thumb/Inter1.jpg" class="gallery" /></a>
		<a rel="pantalones" href="camisetas/pantalones/big/Inter2.jpg" 
        title="From my travel around Italy, like the olders.">
       	<img src="camisetas/pantalones/thumb/Inter2.jpg" class="gallery" /></a>
		<a rel="pantalones" href="camisetas/pantalones/big/Holanda.jpg" 
        title="An offer of a good shorts from the orange national team.">
       	<img src="camisetas/pantalones/thumb/Holanda.jpg" class="gallery" /></a>
	</div>
</div>


	</div><!--end of grid-16--> 
			           
  </div><!--end of grids-->     
</div><!--end of wrapper-->
    
        
<!--===============================================================  Footer =====================================================================================-->  

<? include_once("inc/footeren.php"); ?>