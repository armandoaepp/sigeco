// JavaScript Document
function ActualizarAnalisisQuimico(){
	var metodo;
	metodo="&accion=Actualizar";
		$.ajax({
		url: '../analisisquimico/index_ajax.php',
		type: "POST",
		data:$(this).serialize()+metodo,
		success: function(datos){				
			alert(datos);
			//ConsultaDatos();			
		
			$( "#ActualizarAnalisis").dialog( "close" );
		}
	});
	return false;
	}	
