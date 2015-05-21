<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="Antonio L.F. Website" />
    <meta name="keywords" content="Portafolio, Programador, Diseño Web, Informatica" />
    <meta property="og:image" content="img/favicon_big.png" />
	
	<title>Antonio L.F.</title>
			      
    <link rel="stylesheet" href="css/init.css" />
    <link rel="stylesheet" href="css/grid.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/menu.css" />
    <link rel="Shortcut Icon" href="img/favicon.png">
    <link rel="image_src" href="img/favicon_big.png" />
	<script src='js/menu.js' type='text/javascript'></script>
</head>

<!--===============================================================  HEADER =====================================================================================--> 

<body>

<div class="wrapper">	
	
	<div class="grids">
      <div class="grid-10 grid">
	  	<a href="index.php"><img src="img/logo30.png"/></a>
      </div>     

      <div class="grid-6 grid">
		
  	  <div class="social">
        <a href="http://es.linkedin.com/pub/antonio-lopez-fernandez/49/956/39a" title="linkedin" target="_blank">
		<img src="img/social/linkedin.png" width="30" height="30" alt="linkedin">
		</a>
        <a href="https://twitter.com/#!/brolin79" title="twitter" target="_blank"><img src="img/social/twitter.png" width="30" height="30" alt="twitter"></a>
      	<a href="#" title="facebook"><img src="img/social/facebook.png" width="30" height="30" alt="facebook"></a>
        <a href="#" title="google"><img src="img/social/google.png" width="30" height="30" alt="google"></a>
      </div><!--#social-->
	  </div>
      <br>
      <div class="social">
	    <a href="index.php" title="español"><img src="img/icons/spain.png" width="50" height="39" alt="Español"></a>&nbsp;
        <a href="indexen.php" title="ingles"><img src="img/icons/english.png" width="50" height="39" alt="Ingles"></a>&nbsp;
      </div>
	
	  
	
      <div class="grid-16 grid">        
 		<?
        $toi = basename($_SERVER[PHP_SELF]); 
		?>
                           
		<div id='cssmenu'>
		<ul>
		   <li <? if ($toi=="index.php"){echo"class='active'";}?>><a href='index.php'><img src="img/menu/home.png"/>&nbsp;<span>Inicio</span></a></li>
		   <li <? if ($toi=="portafolio.php"){echo"class='active'";}?>><a href='portafolio.php'><img src="img/menu/portafolio.png"/>&nbsp;<span>Portafolio</span></a></li>
		   <li <? if ($toi=="descargas.php"){echo"class='active'";}?>><a href='descargas.php'><img src="img/menu/descargas.png"/>&nbsp;<span>Descargas</span></a></li>
		   <li class='has-sub'><a href='#'><img src="img/menu/miscelanea.png"/>&nbsp;<span>Miscelanea&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
			  <ul>
				   <li ><a href='traducciones.php'><img src="img/menu/tradu.png"/>&nbsp;<span>Traducciones</span></a></li>
				   <li ><a href='camisetas.php'><img src="img/menu/shirt.png"/>&nbsp;<span>Camisetas</span></a></li>
				   <li ><a href='http://www.antoniolf.es/alineapp' target="_blank"><img src="img/menu/alineapp.png"/>&nbsp;<span>Alineapp</span></a></li>
			  </ul>
		   </li>
		   <li <? if ($toi=="contacto.php"){echo"class='active'";}?>><a href='contacto.php'><img src="img/menu/contacto.png"/>&nbsp;<span>Contacto</span></a></li>
		</ul>
		</div><!--#cssmenu-->
		
		</div>
                    
	</div><!--#grids--> 
</div><!--#wrapper-->        
