$(function() {
	
	var preftac = getUrlVars()["tac"];
	tac(preftac);
	
	function tac(preftac) {
	//var preftac = $.get("carga");
	//var preftac = getUrlVars()["carga"];
	
	//var preftac ="433";
		switch (preftac) {
           case '442dp':
	           tac442dp();
               break;
           case '442r':
	           tac442r();
               break;
           case '433':
			   tac433();
	           break;
           case '4231':
	           tac4231();
               break;
	       case '532':
	           tac532();
               break;
           case '343':
	           tac343();
               break; 
		   default:
               tac442dp();
               break;
          }//#switch
	}

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

function tac442dp() {
		$("#num01").css({ "top": "675px", "left": "220px" });
		$("#num02").css({ "top": "525px", "left": "400px" });
		$("#num03").css({ "top": "525px", "left": "40px" });
		$("#num04").css({ "top": "525px", "left": "275px" });
		$("#num05").css({ "top": "275px", "left": "275px" });
		$("#num06").css({ "top": "525px", "left": "150px" });
		$("#num07").css({ "top": "75px", "left": "275px" });
		$("#num08").css({ "top": "275px", "left": "400px" });
		$("#num09").css({ "top": "75px", "left": "150px" });
		$("#num10").css({ "top": "275px", "left": "150px" });
		$("#num11").css({ "top": "275px", "left": "40px" });
		$("input#tactica").val("442dp");
}//#tac442dp


function tac442r() {
		$("#num01").css({ "top": "675px", "left": "620px" });
		$("#num02").css({ "top": "525px", "left": "800px" });
		$("#num03").css({ "top": "525px", "left": "440px" });
		$("#num04").css({ "top": "525px", "left": "675px" });
		$("#num05").css({ "top": "400px", "left": "620px" });
		$("#num06").css({ "top": "525px", "left": "550px" });
		$("#num07").css({ "top": "75px", "left": "675px" });
		$("#num08").css({ "top": "275px", "left": "800px" });
		$("#num09").css({ "top": "75px", "left": "550px" });
		$("#num10").css({ "top": "200px", "left": "620px" });
		$("#num11").css({ "top": "275px", "left": "440px" });
		$("input#tactica").val("442r");
}//#tac442r

function tac433() {
		$("#num01").css({ "top": "675px", "left": "620px" });
		$("#num02").css({ "top": "525px", "left": "800px" });
		$("#num03").css({ "top": "525px", "left": "440px" });
		$("#num04").css({ "top": "525px", "left": "675px" });
		$("#num05").css({ "top": "425px", "left": "620px" });
		$("#num06").css({ "top": "525px", "left": "550px" });
		$("#num07").css({ "top": "125px", "left": "750px" });
		$("#num08").css({ "top": "275px", "left": "675px" });
		$("#num09").css({ "top": "75px", "left": "620px" });
		$("#num10").css({ "top": "275px", "left": "550px" });
		$("#num11").css({ "top": "125px", "left": "500px" });
		$("input#tactica").val("433");
}//#tac433

function tac4231() {
		$("#num01").css({ "top": "675px", "left": "620px" });
		$("#num02").css({ "top": "525px", "left": "800px" });
		$("#num03").css({ "top": "525px", "left": "440px" });
		$("#num04").css({ "top": "525px", "left": "675px" });
		$("#num05").css({ "top": "400px", "left": "675px" });
		$("#num06").css({ "top": "525px", "left": "550px" });
		$("#num07").css({ "top": "275px", "left": "800px" });
		$("#num08").css({ "top": "400px", "left": "550px" });
		$("#num09").css({ "top": "75px", "left": "620px" });
		$("#num10").css({ "top": "200px", "left": "620px" });
		$("#num11").css({ "top": "275px", "left": "440px" });
		$("input#tactica").val("4231");
}//#tac4231

function tac532() {
		$("#num01").css({ "top": "675px", "left": "620px" });
		$("#num02").css({ "top": "475px", "left": "800px" });
		$("#num03").css({ "top": "475px", "left": "440px" });
		$("#num04").css({ "top": "525px", "left": "720px" });
		$("#num05").css({ "top": "525px", "left": "620px" });
		$("#num06").css({ "top": "525px", "left": "525px" });
		$("#num07").css({ "top": "75px", "left": "675px" });
		$("#num08").css({ "top": "400px", "left": "620px" });
		$("#num09").css({ "top": "75px", "left": "550px" });
		$("#num10").css({ "top": "275px", "left": "720px" });
		$("#num11").css({ "top": "275px", "left": "525px" });
		$("input#tactica").val("532");
}//#tac532

function tac343() {
		$("#num01").css({ "top": "675px", "left": "620px" });
		$("#num02").css({ "top": "525px", "left": "800px" });
		$("#num03").css({ "top": "525px", "left": "440px" });
		$("#num04").css({ "top": "525px", "left": "620px" });
		$("#num05").css({ "top": "400px", "left": "675px" });
		$("#num06").css({ "top": "400px", "left": "550px" });
		$("#num07").css({ "top": "125px", "left": "750px" });
		$("#num08").css({ "top": "275px", "left": "800px" });
		$("#num09").css({ "top": "75px", "left": "620px" });
		$("#num10").css({ "top": "275px", "left": "440px" });
		$("#num11").css({ "top": "125px", "left": "500px" });
		$("input#tactica").val("343");
}//#tac343
	
	$("#442dp").click(function(evento){
		evento.preventDefault();
		tac442dp();
    });//#442dp
	$("#442r").click(function(evento){
		evento.preventDefault();
		tac442r();
    });//#442r
	$("#433").click(function(evento){
		evento.preventDefault();
		tac433();
    });//#433
	$("#4231").click(function(evento){
		evento.preventDefault();
		tac4231();
    });//#4231
	$("#532").click(function(evento){
		evento.preventDefault();
		tac532();
    });//#532
	$("#343").click(function(evento){
		evento.preventDefault();
		tac343();
    });//#343
	
	
	$("#resetear").click(function(evento){
	    evento.preventDefault();
		var equipo = $("input#equipo").val();
		window.location = "dragdrop.php?edit="+equipo+"";
    });//#resetear
	
	
	$("#volver").click(function(evento){
	    evento.preventDefault();
		window.location = "index.php";
    });//#cargar

	$("#guardar").click(function(evento){
		var nombre = $("input#nombre").val();
		var equipo = $("input#equipo").val();
		var tactica = $("input#tactica").val();

       $("#destino").load("salvar.php", {
		   nombre: nombre,
		   equipo: equipo,
		   tactica: tactica,
		   num01: $("#num01").val(),
		   num02: $("#num02").val(),
		   num03: $("#num03").val(),
		   num04: $("#num04").val(),
		   num05: $("#num05").val(),
		   num06: $("#num06").val(),
		   num07: $("#num07").val(),
		   num08: $("#num08").val(),
		   num09: $("#num09").val(),
		   num10: $("#num10").val(),
		   num11: $("#num11").val()
		   }, function(){
          	alert("Datos guardados correctamente");
       });//#destino
	});//#guardar
	
	$( ".position" ).draggable({
		//appendTo: "body",
		//helper: "clone",
		//revert: true
		containment: "parent"
	});//#draggable

	
	$( ".player" ).draggable({
		//appendTo: "body",
		helper: "clone",
		revert: false
	});//#draggable
	
	$( ".position" ).droppable({
		//activeClass: "ui-state-default",
		//hoverClass: "ui-state-hover",
		//accept: ":not(.ui-sortable-helper)",
		drop: function( event, ui ) {
			
			//var cual = $(this).attr('id');
			var texto = $( "<span></span>" ).text( ui.draggable.text() ).text();
			//$( ".position span" ).text(texto);	
			$("p", this).html("" + texto + "");

			$(this).val("" + ui.draggable.attr('id') + "");
	
			
			//var valor = ui.draggable.attr('id');
			//alert(valor);
		}
	});//#droppable
		
	
	$('#dialog').dialog({
		autoOpen: false,
		width: 600,
		buttons: {
			/*
			"Ok": function() {
			$(this).dialog("close");
			$('#respuesta').text("Has dado el ok asi que despidete");
			//alert("Esto va a hacer catapum");
			},*/
			"Cancel": function() {
			$(this).dialog("close");
			//alert("Detonacion cancelada");
			}						
		}
	});//#dialog
	
	$("a", this).click(function(){
		
		window.location = "dragdrop.php?carga="+$(this).attr('id')+"&tac="+$(this).attr('name');
		$(this).dialog("close");
	});//#dialog a
	
	$('#dialog_link').click(function(){
		$('#dialog').dialog('open');
		return false;
	});//Dialog Link	
	
})//#end