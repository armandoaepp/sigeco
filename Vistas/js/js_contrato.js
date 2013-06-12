// JavaScript Document
// JavaScript Document
$(document).ready(function(e) {  
	CargarContrato();
	
		 $("#busca").keyup(function(e) {
			 buscar=$("#busca").val();
			//pregunto si eh presionado Enter
		    if(e.which==13){
				//llamamos ala funcion busqueda
				busqueda();				
				return false;
				}if(buscar.length==0){
					CargarContrato();
					return false;
				}
				
		});
	$("#LinkNuevo").click( function(){ 	
		LinkNuevo();
	});
	$("#LinkCancelar").click( function(){ 			
		LinkCancelar();
		
	});

	$("#LinkListar").click( function(){ 			
			CargarContrato();
	});
	 	// Seleccionar MENU  
		$("#cssmenu ul li").removeClass("selected");
	    $("#cssmenu ul #m_acopio").addClass("selected");
		// Seleccionar SUBMENU
		$("#menu_interno #navi li").removeClass("selected");
	    $("#menu_interno #navi #contrato").addClass("selected");
		
	$("#Modal_Cliente").dialog({
		autoOpen: false,
		title:"Cliente ",
		width: 500,
		height: 450,
		modal: true 
	});	
		
});

function LinkNuevo(){
	$("#LinkCancelar").css("display", "block");
	$("#LinkNuevo").css("display", "none");	
	Nuevo();
}
function LinkCancelar(){
	$("#divFrmNuevo").hide();
	$("#Datos div").show();
	$("#LinkNuevo").css("display", "block");
	$("#LinkCancelar").css("display", "none");	
}
function CargarContrato(){	
		$("#divFrmNuevo").hide();
		$("#Datos div").show();	
		$("#LinkCancelar").css("display", "none");
		$("#LinkNuevo").css("display", "block");	
	$.ajax({url:"../contrato/index_ajax.php",data: {"accion":"Listar"},success: function(data){
		$("#ListarContrato").html(data);	
		OcultarColumnaTabla();
	
		}
	});
}
// para paginar ordenar y buscar
function Paginar(variables){
	//alert(variables);
	buscar=$("#busca").val();
	var metodo;	
	metodo="&accion=Listar";	
	$.ajax({
			url: '../contrato/index_ajax.php',
			type: "GET",
			data:variables+metodo,
			success: function(data){										
			$("#ListarContrato").html(data);
			OcultarColumnaTabla();											
			}
		});
			return false;// para que no recarge toda la pagina
}
// funicion sirve para buscar 
function busqueda(){	
	var metodo;
	buscar=$("#busca").val();	
	metodo="&accion=Listar";		
	$.ajax({
		url: '../contrato/index_ajax.php',
		type: "GET",
		data: {"accion":"Listar","busca":buscar},
		success: function(data){					
		$("#busca").attr("value",buscar);									
		$("#ListarContrato").html(data);
		OcultarColumnaTabla();
		}
	});
	return false;// para que no recarge toda la pagina		
}
//eliminar Registros 
function Eliminar(id){
	var msg = confirm("Desea Eliminar el Registro?")
	if ( msg ) {
		$.ajax({
			url: '../Contrato/index_ajax.php',
			type: "GET",
			data:{ "accion":"Eliminar","id":id},
			success: function(datos){
			
			if(datos==0){			
				alert("Registro Eliminado Correctamente");
				busqueda();// me aseguro si es k esta buscando o no
			}else{
				alert(datos);	
			}
			 			
			}
		});
	}
	return false;
}

function Nuevo(){
		$("#Datos div").css("display", "none");	
			$("#divFrmNuevo").show();//.css({"display":"block"});
			$.ajax({url:"../contrato/index_ajax.php",data: {"accion":"Nuevo"},success: function(data){			
				//alert(data);
				$("#divFrmNuevo").html(data);
				RegistraContrato();
				}
			});
			return false;
	}
function RegistraContrato(){
	//alert("Resitrar ");
	var metodo;
	$("#frmRegistrar_contrato").submit(function(){		
		metodo="&accion=Registrar";		
			$.ajax({
				url: '../contrato/index_ajax.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(datos){	
					if(datos=="ok"){
						alert("Datos Registrados Correctamente");
						// llamomos al funcion busque puede k el usurio halla ingreado un texto en la busqueda					
						CargarContrato();	
					}else{
						alert(datos);
						return false;
						}
				}
			});
			return false;// para que no recarge toda la pagina
		 });	
}
function OcultarColumnaTabla(){
		 $('#tablacontrato td:nth-child(2),#tablacontrato th:nth-child(2)').hide(); //ProductorId
}

function Cancelar(){
	LinkCancelar();
}

// modal Cliente

function ModalCliente(){			
		//$.ajaxSetup({async:false});
	$.post("../cliente/index_ajax.php",{"accion":"Nuevo"},
		function(data) {$("#Modal_Cliente").html(data);	
		RegistrarCliente();	
	});	
		$("#Modal_Cliente").dialog("open");     
}
function RegistrarCliente(){
	var metodo;
	$("#frmRegistrar_cliente").submit(function(){		
		metodo="&accion=Registrar";		
			$.ajax({
				url: '../cliente/index_ajax.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(datos){	
					if(datos==0){
						alert("Datos Registrados Correctamente");
						$("#Modal_Cliente").dialog("close" );					
						// llamomos al funcion busque puede k el usurio halla ingreado un texto en la busqueda					
						LinkNuevo();	
					}else{
						alert(datos);
						return false;
					}	
				}
			});
			return false;// para que no recarge toda la pagina
		 });		
}
function CancelarModal(contenedor, frmModal){
	$("#"+contenedor).dialog("close");
	$("#"+frmModal)[0].reset();
}	