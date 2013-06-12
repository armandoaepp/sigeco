// JavaScript Document
$(document).ready(function(e) {  
	CargarUnidadProductiva();
	
		 $("#busca").keyup(function(e) {
			 buscar=$("#busca").val();
			//pregunto si eh presionado Enter
		    if(e.which==13){
				//llamamos ala funcion busqueda
				busqueda();
				//alert("teclas tstst")
				return false;
				}if(buscar.length==0){
					CargarUnidadProductiva();
					return false;
				}
				//alert("teclas tstst")}
		});
		$("#LinkNuevo").click( function(){ 	
		
		Nuevo();
			
	 	});
		
	$("#LinkListar").click( function(){ 			
			CargarUnidadProductiva();
	});
		
	 $("#divFrmNuevo").hide();
	 $("#Datos div").show();
	 
// seleccionar menu unidad productiva
	$("#cssmenu ul li").removeClass("selected");
	    $("#cssmenu ul #m_unidadproductiva").addClass("selected");
	
});




function CargarUnidadProductiva(){	
		$("#divFrmNuevo").hide();
		$("#Datos div").show();
		///alert("holassss");
	$.ajax({url:"../unidadproductiva/index_ajax.php",data: {"accion":"Listar"},success: function(data){
		$("#ListarUndidaProductiva").html(data);	
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
			url: '../unidadproductiva/index_ajax.php',
			type: "GET",
			data:variables+metodo,
			success: function(data){										
			$("#ListarUndidaProductiva").html(data);
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
		url: '../unidadproductiva/index_ajax.php',
		type: "GET",
		data: {"accion":"Listar","busca":buscar},
		success: function(data){					
		$("#busca").attr("value",buscar);									
		$("#ListarUndidaProductiva").html(data);
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
			url: '../unidadproductiva/index_ajax.php',
			type: "GET",
			data:{ "accion":"Eliminar","id":id},
			success: function(datos){
			alert(datos);
			busqueda();// me aseguro si es k esta buscando o no 			
			}
		});
	}
	return false;
}

function Nuevo(){
		$("#Datos div").css("display", "none");	
			$("#divFrmNuevo").show();//.css({"display":"block"});
			$.ajax({url:"../unidadproductiva/index_ajax.php",data: {"accion":"Nuevo"},success: function(data){			
				//alert(data);
				$("#divFrmNuevo").html(data);
				// para recargar los combos cuando se a dato clic mas de una ves en Nuevo
					CargarCombos();	
					 // resitrar Nueva Unidad Productiva
					RegistrarUnidadProductiva()
									}
			});
			return false;
	}
function RegistrarUnidadProductiva(){
	//alert("Resitrar ");
	var metodo;
	$("#frmRegistrar_productor").submit(function(){		
		metodo="&accion=Registrar";		
			$.ajax({
				url: '../unidadproductiva/index_ajax.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(datos){				
					alert(datos);					
					// llamomos al funcion busque puede k el usurio halla ingreado un texto en la busqueda					
					CargarUnidadProductiva();	
				}
			});
			return false;// para que no recarge toda la pagina
		 });	
}
function OcultarColumnaTabla(){
		 // Ocultar Culmnas de la Tabla(son los IDs que voy a utilizar Luego saludos)
      $('#tablaunidadproductiva td:nth-child(2),#tablaunidadproductiva th:nth-child(2)').hide(); //UnidadProductivaId
	  $('#tablaunidadproductiva td:nth-child(3),#tablaunidadproductiva th:nth-child(3)').hide(); //ProductorId
}

function Cancelar(){
	CargarUnidadProductiva();
	}

	
	