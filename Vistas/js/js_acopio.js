// JavaScript Document
// JavaScript Document
$(document).ready(function(e) {  
	CargarAcopio();
	
	 $("#busca").keyup(function(e) {
			 buscar=$("#busca").val();
			//pregunto si eh presionado Enter
		    if(e.which==13){
				//llamamos ala funcion busqueda
				busqueda();
				//alert("teclas tstst")
				return false;
				}if(buscar.length==0){
					CargarAcopio();
					return false;
				}				
		});

		$("#LinkNuevo").click( function(){ 		
			Nuevo();			
	 	});
		
	$("#LinkListar").click( function(){ 			
			CargarAcopio();
	});
		
	 $("#divFrmNuevo").hide();
	 $("#NuevoAcopio").hide();
	 $("#Datos").show();
	 
		// Seleccionar MENU  
		$("#cssmenu ul li").removeClass("selected");
	    $("#cssmenu ul #m_acopio").addClass("selected");
		// Seleccionar SUBMENU
		$("#menu_interno #navi li").removeClass("selected");
	    $("#menu_interno #navi #acopio").addClass("selected");
		
	 
		
});




function CargarAcopio(){	
		$("#divFrmNuevo").hide();
		$("#NuevoAcopio").hide();
		$("#Datos div").show();
		///alert("holassss");
	$.ajax({url:"../acopio/index_ajax.php",data: {"accion":"Listar"},success: function(data){
		$("#ListarAcopio").html(data);	
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
			url: '../acopio/index_ajax.php',
			type: "GET",
			data:variables+metodo,
			success: function(data){										
			$("#ListarAcopio").html(data);
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
		url: '../acopio/index_ajax.php',
		type: "GET",
		data: {"accion":"Listar","busca":buscar},
		success: function(data){					
		$("#busca").attr("value",buscar);									
		$("#ListarAcopio").html(data);
		OcultarColumnaTabla();
		}
	});
	return false;// para que no recarge toda la pagina		
}
function Nuevo(){
		$("#Datos div").css("display", "none");	
			$("#divFrmNuevo").show();//.css({"display":"block"});
			$.ajax({url:"../acopio/index_ajax.php",data: {"accion":"Nuevo"},success: function(data){			
				//alert(data);
				$("#divFrmNuevo").html(data);
				NuevoAcopio();
				
				}
			});
			return false;
	}
function NuevoAcopio(){
		var dniProductor;
		$("#btnBuscarProductor").click(function(e) {
			dniProductor=$("#ProductorDni").val();
			//alert(dniProductor);
			$.ajax({
				url:"../acopio/index_ajax.php",
				type: "GET",
				data: {"accion":"NuevoAcopio","dni":dniProductor},
				success: function(data){			
						//alert(data);
						$("#NuevoAcopio").html(data);
							// fuerza bruta para cargar el calendario 
			/*
			$("#AcopioFecha_" ).datepicker({
			//	showOn: "button",
			//buttonImage: "../images/calendar.gif",
			//buttonImageOnly: true,
			//yearRange: "-2:+5",		
			changeMonth: true,
			changeYear: true,
			dateFormat: "dd/mm/yy",							
			});
			*/
			RegistrarAcopio();
				$("#NuevoAcopio").show();	
				
					}
				});										
			return false;			
		});	
}

function generarGuiaAcopio(){		
	$.ajax({url:"../acopio/index_ajax.php", type: "GET",data: {"accion":"GenerarGuiaAcopio"},success: function(data){
		//alert(data);
		$("#GuiaAcopioNumero_").attr("value",data);			
		return false;	
		}
	});
}


function RegistrarAcopio(){
	var metodo;
	//alert("reg");
	$("#frmRegistrar_acopio").submit(function(){		
	metodo="&accion=Registrar";	
	//alert($(this).serialize()+metodo);	
		$.ajax({
			url: '../acopio/index_ajax.php',
			type: "POST",
			data:$(this).serialize()+metodo,
			success: function(datos){
				//alert(datos);
				if(datos=="ok"){
					alert("Datos Registrados Correctamente");	
					CargarAcopio();
				}else{
					alert(datos);
					return false;// para que no recarge toda la pagina
					}

			}
		});
		return false;
			
	});	 
}
function OcultarColumnaTabla(){
		 // Ocultar Culmnas de la Tabla(son los IDs que voy a utilizar Luego saludos)
      $('#tablaacopio td:nth-child(1),#tablaacopio th:nth-child(1)').hide(); //UnidadProductivaId
	 
}