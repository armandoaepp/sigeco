// JavaScript Document
$(document).ready(function(e) {  
	CargarPersonal();
	
		 $("#busca").keyup(function(e) {
			 buscar=$("#busca").val();
			//pregunto si eh presionado Enter
		    if(e.which==13){
				//llamamos ala funcion busqueda
				busqueda();
				//alert("teclas tstst")
				return false;
				}if(buscar.length==0){
					CargarPersonal();
					return false;
				}
				//alert("teclas tstst")}
		});
	$("#Modal_Personal").dialog({
		autoOpen: false,
		title:"Personal ",
		width: 450,
		height: 420,
		modal: true 
	});	
	//RegistrarPersonal();
	
});




function CargarPersonal(){
	$.ajax({url:"../personal/index_ajax.php",data: {"accion":"Listar"},success: function(data){
		$("#ListarPersonal").html(data);		
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
			url: '../personal/index_ajax.php',
			type: "GET",
			data:variables+metodo,
			success: function(data){										
			$("#ListarPersonal").html(data);											
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
		url: '../personal/index_ajax.php',
		type: "GET",
		data: {"accion":"Listar","busca":buscar},
		success: function(data){					
		$("#busca").attr("value",buscar);									
		$("#ListarPersonal").html(data);
		}
	});
	return false;// para que no recarge toda la pagina		
}
//eliminar Registros 
function Eliminar(id){
	var msg = confirm("Desea Eliminar el Registro?")
	if ( msg ) {
		$.ajax({
			url: '../personal/index_ajax.php',
			type: "GET",
			data:{ "accion":"Eliminar","id":id},
			success: function(datos){
			alert(datos);
			//CargarPersonal();	
			busqueda();// me aseguro si es k esta buscando o no 			
			}
		});
	}
	return false;
}
function ModalPersonal(id){		
		$.ajaxSetup({async:false});		
		$.post("../personal/index_ajax.php",{"accion":"OpenFrmModal","id":id},
		function(data) {$("#Modal_Personal").html(data);				
		});	
		$("#PersonalFechaIngreso_" ).datepicker({		
			yearRange: "-5:+5",		
			changeMonth: true,
			changeYear: true,
			dateFormat: "dd/mm/yy",				
		}); 
		$("#PersonalFechaNac_" ).datepicker({		
			yearRange: "-90:+1",		
			changeMonth: true,
			changeYear: true,
			dateFormat: "dd/mm/yy",				
		});
		$("#Modal_Personal").dialog("open");
		// para inicio la Funcion Registrar	
		 RegistrarPersonal();
		 // iniciamos la Funcion Registrar
		 ActualizarPersonal();	   
}
function RegistrarPersonal(){
	var metodo;
	$("#frmRegistrar_personal").submit(function(){		
		metodo="&accion=Registrar";		
			$.ajax({
				url: '../personal/index_ajax.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(datos){				
					alert(datos);								
					$("#Modal_Personal").dialog("close" );
					// llamomos al funcion busque puede k el usurio halla ingreado un texto en la busqueda					
					busqueda();	
				}
			});
			return false;// para que no recarge toda la pagina
		 });	
}
function ActualizarPersonal(){
	var metodo;
	$("#frmActualizar_personal").submit(function(){		
		metodo="&accion=Actualizar";
			$.ajax({
				url: '../personal/index_ajax.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(datos){				
					alert(datos);								
					$("#Modal_Personal").dialog( "close" );
					//buscar=$("#PersonalApellido_").val();
					//$("#busca").attr("value",buscar);						
					// llamomos al funcion busque puede k el usurio halla ingreado un texto en la busqueda					
					busqueda();	
				}
			});
			return false;// para que no recarge toda la pagina
		 });	
	
	}	
function Cancelar(contenedor, frmModal){
	$("#"+contenedor).dialog("close");
	$("#"+frmModal)[0].reset();
}