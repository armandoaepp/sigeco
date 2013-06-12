// JavaScript Document @armandoaepp

$(document).on('ready', iniciar);

function iniciar(){
	CargarAcopioContrato();
	
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
	 	// Seleccionar MENU  
		$("#cssmenu ul li").removeClass("selected");
	    $("#cssmenu ul #m_acopio").addClass("selected");
		// Seleccionar SUBMENU
		$("#menu_interno #navi li").removeClass("selected");
	    $("#menu_interno #navi #asignacion").addClass("selected");

	// Leer la Funcion para hacer busquedas
	BuscarAsignacion();
	$("#ListarTodos").on("click", function(e){ 			
		CargarAcopioContrato();		
	});
	
	CargarLotesContrato();
	
}




function CargarAcopioContrato(){			
	$.ajax({url:"../acopiocontrato/Listar_tabla_acopiocontrato.php",data: {"accion":"Listar"},success: function(data){
		$("#ListarAsignacion").html(data);	
		}
	});
}
// para paginar ordenar y buscar
function Paginar(variables){
	buscar=$("#busca").val();
	var metodo;	
	metodo="&accion=Listar";	
	$.ajax({
			url: '../contrato/index_ajax.php',
			type: "GET",
			data:variables+metodo,
			success: function(data){										
			$("#ListarContrato").html(data);
													
			}
		});
			return false;// para que no recarge toda la pagina
}
// funicion sirve para buscar 
/*function busqueda(){	
	var metodo;
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
}*/
function BuscarAsignacion(){
	var metodo;
	$("#Frm_BuscarAsignacion").submit(function(){		
		metodo="&accion=Listar";	
		//alert($(this).serialize());	
			$.ajax({
				url: '../acopiocontrato/Listar_tabla_acopiocontrato.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(datos){
					$("#ListarAsignacion").html(datos);	
					}
			});
			return false;// para que no recarge toda la pagina
		 });	
}
function AsignarLote(){
alert("Holas Vas a Asignar un loTe :)");	
}

function CargarLotesContrato(){			
	$.ajax({url:"../acopiocontrato/ListarLotes_Contrato.php",data: {"accion":"ListarLotes"},success: function(data){
		$("#ListarLotes").html(data);	
		}
	});
}


function OcultarColumnaTabla(){
		 $('#tablacontrato td:nth-child(2),#tablacontrato th:nth-child(2)').hide(); //ProductorId
}

function CancelarModal(contenedor, frmModal){
	$("#"+contenedor).dialog("close");
	$("#"+frmModal)[0].reset();
}
