// JavaScript Document
$(document).ready(function(e) {
   
	CargarContratoFrmActualizar();
	 $("#LinkEditar").click( function(){ 			
			LinkEditar();
			return false;
	});
	$("#LinkCancelar").click( function(){ 			
			LinkCancelar();
			return false;
	});
	$("#LinkEditar").css("display", "block");
	$("#LinkCancelar").css("display", "none");
	
});
//cuando le diee clic en el linkEditarRendimiento
function LinkEditar(){
	$("#LinkEditar").css("display", "none");
	$("#LinkCancelar").css("display", "block");			
	$('#frmActulizar_contrato :input').attr("disabled", false);	
	
}
function LinkCancelar(){
	$("#LinkEditar").css("display", "block");
	$("#LinkCancelar").css("display", "none");	
	$('#frmActulizar_contrato :input').attr("disabled", true);		
	CargarContratoFrmActualizar();
}
function CargarContratoFrmActualizar(){	
 var idContrato = $.get("id");		
	$.ajax({url:"../contrato/index_ajax.php",type: "GET",data: {"accion":"Mactualizar","id":idContrato},
		success: function(data){
		$("#divFrmActualizar").html(data);	
		$('#frmActulizar_contrato :input').attr("disabled", true);			
			// leer la funcion Actualizar Rendieminto
			ActualizarContrato();
			
		}
	});	
}

function ActualizarContrato(){
	var metodo;
	$("#frmActulizar_contrato").submit(function(){		
		metodo="&accion=Actualizar";
		$.ajax({
			url: '../contrato/index_ajax.php',
			type: "POST",
			data:$(this).serialize()+metodo,
			success: function(datos){				
				//alert(datos);
			if(datos=="ok"){
				alert("Datos Registrados Correctamente");	
				linkCancelar();
			}else{
				alert(datos);				
				}		
			}
		});
		return false;// para que no recarge toda la pagina
	 });	
}	