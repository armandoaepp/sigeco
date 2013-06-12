//comenzar javascript
var Servicios="../labor/";
$(document).ready(function(e) {
	IniciarLaboresCultruales();
	
});
function IniciarLaboresCultruales(){
	jQuery("#frmRegistrar_labor_riego,#frmRegistrar_labor_plaga,#frmRegistrar_labor_fertilizacion,#frmRegistrar_labor_enfermedad,#frmRegistrar_labor_poda").validationEngine({autoHidePrompt:true});
	
	/// para cargar las labores culturales 
	$("#LaboresCulturales div").hide();
		// llena el combo provinciaa
		$("#TipoLaborCultural").change( function(e){			
			var id=$("#TipoLaborCultural").val();
			LaboresCulturales (id)		
		});
		//cuando se Carga el Documento se se haga visible la primera labor
		LaboresCulturales (1)
	$("#ParcelaDetalleFechaSiembra,#LaborFecha_poda,#LaborFecha_riego,#LaborFecha_enfermedad,#LaborFecha_poda,#LaborFecha_fertilizacion, #LaborFecha_plaga,ControlFitosanitarioFecha1_" ).datepicker({
		showOn: "button",
		buttonImage: "../images/calendar.gif",
		buttonImageOnly: true,
		yearRange: "-80:+5",		
		changeMonth: true,
		changeYear: true,
		dateFormat: "dd/mm/yy",				
		}); 
		
	//jQuery("#frmRegistrar_labor_poda").	validationEngine('attach');
	// ENVIAR FORMULARIO PARA REGISTRAR LABORES CULTURALES
	 EnviarFormularioLabor("#frmRegistrar_labor_poda");
	 EnviarFormularioLabor("#frmRegistrar_labor_riego");
	 EnviarFormularioLabor("#frmRegistrar_labor_enfermedad");
	 EnviarFormularioLabor("#frmRegistrar_labor_plaga");
	 EnviarFormularioLabor("#frmRegistrar_labor_fertilizacion");	 
	 CargarTablaDetalleLaboresCulturales();
	 
	 $("#RegistrarControlFitosanotario").dialog({
			autoOpen: false,
			title:"Registrar Control Fito Sanitario",
			height: 320,
			width: 400,
			modal: true
	    });
		
	 		
	}
	
	
// Labores Culturales 	
function LaboresCulturales (idLabor){	 
	$("#LaboresCulturales div").hide();
		if(idLabor==1){
			$("#LaboresCulturales #LaborPoda").show();
		}
		if(idLabor==2){
			$("#LaboresCulturales #LaborRiego").show();
		}
		if(idLabor==3){
			$("#LaboresCulturales #LaborEnfermedad").show();
		}
		if(idLabor==4){
			$("#LaboresCulturales #LaborPlaga").show();
		}
		if(idLabor==5){
			$("#LaboresCulturales #LaborFertilizacion").show();
		}
		if(idLabor==6){
			$("#LaboresCulturales #LaborControl").show();
		}		
}	
//=:=_=:=
//  ENVIAR FORMULARIO PARA REGISTRAR LABORES CULTURALES
function EnviarFormularioLabor(idForm){		
		//alert(idForm);
	$(idForm).submit(function(e){
	//envio al formulario
	// alert($(this).serialize());
		// cogemos el valor del combo 
	var IDTipoLaborCultural=$("#TipoLaborCultural").val();
	IDTipoLaborTipo = "&TipoLaborId_="+IDTipoLaborCultural+"";
	
	$.post(Servicios+"servicio_index.php?accion=RegistrarLabor", $(this).serialize()+IDTipoLaborTipo,function(datadev){
				//datadev=$.parseJSON(datadev);
				mensaje="";
				if(datadev==0) {
					mensaje="Datos Registrado correctamente";
					alert(mensaje);	
					limpiarForm(idForm);				
					// Cargar la Tabla detalle de labore cultruales		
					CargarTablaDetalleLaboresCulturales();	
				}else alert(datadev);					
				
						
		});
	return false;
	});
	//FIN ENVIO
	} 

function CargarTablaDetalleLaboresCulturales(){
	$.ajax({url:"../labor/Listar_labor_tabla.php",success: function(data){$("#ListarDetalleLabioresCultruales").html(data);}
	});
}
 function EliminarDetalleLabor(id){
		var msg = confirm("Desea Eliminar el Registro?")
		if ( msg ) {
			$.ajax({
				url: '../labor/index_ajax.php',
				type: "GET",
				//type: "POST",
				data:{ "accion":"Eliminar","id":id},
				success: function(datos){
				alert(datos);
				CargarTablaDetalleLaboresCulturales();				
				}
			});
		}
		return false;
	}
	
function MostrafrmRegistrarControl(id){			
		$.ajaxSetup({async:false});
		$.post("../controlfitosanitario/Registrar_controlfitosanitario.php",{"IdLabor":id,"acction":"Registrar"},
		function(data) {$("#RegistrarControlFitosanotario").html(data);});	
		// fuerza bruta para cargar el calendario 
			$("#ControlFitosanitarioFecha1_" ).datepicker({
			showOn: "button",
			buttonImage: "../images/calendar.gif",
			buttonImageOnly: true,
			yearRange: "-2:+5",		
			changeMonth: true,
			changeYear: true,
			dateFormat: "dd/mm/yy",				
			}); 
		$("#RegistrarControlFitosanotario").dialog("open");     
}/*
function RegistrarControlFitosanitario(){
	var metodo;
	$("#frmRegistrar_controlfitosanitario").submit(function(){		
		metodo="&accion=Registrar";		
			$.ajax({
				url: '../controlfitosanitario/index_ajax.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(datos){				
					alert(datos);								
					$("#RegistrarControlFitosanotario").dialog("close" );
					CargarTablaDetalleLaboresCulturales();	
				}
			});
			return false;// para que no recarge toda la pagina
		 });	
	
	}*/

function limpiarForm(miForm){
	$(miForm)[0].reset();
	}
