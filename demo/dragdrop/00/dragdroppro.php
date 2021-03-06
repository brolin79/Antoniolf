<meta charset="utf-8">
	
	
	
	
	
	
	
	 <link type="text/css" href="css/jquery_ui.css" rel="stylesheet" />
 <script src="js/jquery_min.js" type="text/javascript"></script>  
 <script type="text/javascript" src="js/jquery_ui.js"></script>
	
	
	
	<style>
	h1 { padding: .2em; margin: 0; }
	#products { float:left; width: 500px; margin-right: 2em; }
	#cart { width: 200px; float: left; }
	/* style the list to maximize the droppable hitarea */
	#cart ol { margin: 0; padding: 1em 0 1em 3em; }
	</style>
	<script>
	$(function() {
		$( "#catalog" ).accordion();
		$( "#catalog li" ).draggable({
			appendTo: "body",
			helper: "clone"
		});
		$( "#cart ol" ).droppable({
			activeClass: "ui-state-default",
			hoverClass: "ui-state-hover",
			accept: ":not(.ui-sortable-helper)",
			drop: function( event, ui ) {
				$( this ).find( ".placeholder" ).remove();
				$( "<li></li>" ).text( ui.draggable.text() ).appendTo( this );
			}
		}).sortable({
			items: "li:not(.placeholder)",
			sort: function() {
				// gets added unintentionally by droppable interacting with sortable
				// using connectWithSortable fixes this, but doesn't allow you to customize active/hoverClass options
				$( this ).removeClass( "ui-state-default" );
			}
		});
	});
	</script>



<div class="demo">
	
<div id="products">
	<h1 class="ui-widget-header">Products</h1>	
	<div id="catalog">
		<h3><a href="#">T-Shirts</a></h3>
		<div>
			<ul>
				<li>Lolcat Shirt</li>
				<li>Cheezeburger Shirt</li>
				<li>Buckit Shirt</li>
			</ul>
		</div>
		<h3><a href="#">Bags</a></h3>
		<div>
			<ul>
				<li>Zebra Striped</li>
				<li>Black Leather</li>
				<li>Alligator Leather</li>
			</ul>
		</div>
		<h3><a href="#">Gadgets</a></h3>
		<div>
			<ul>
				<li>iPhone</li>
				<li>iPod</li>
				<li>iPad</li>
			</ul>
		</div>
	</div>
</div>

<div id="cart">
	<h1 class="ui-widget-header">Shopping Cart</h1>
	<div class="ui-widget-content">
		<ol>
			<li class="placeholder">Add your items here</li>
		</ol>
	</div>
</div>

</div><!-- End demo -->



<div class="demo-description">
<p>Demonstrate how to use an accordion to structure products into a catalog and make use drag and drop for adding them to a shopping cart, where they are sortable.</p>
</div><!-- End demo-description -->