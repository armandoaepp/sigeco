// JavaScript Document
$(document).ready(function(e) {
	//$("#divRegistrar_usuario").addClass("ocultar");
	//$("#divRegistrar_usuario").css("display","none");

	
	/*$("#PersonalDni").keypress(function(e) {	
		//pregunto si eh presionado Enter
        if(e.which==13){
			//llamamos ala funcion busqueda			
			Buscar();
			}
	    });
	
	$("#imgBuscar").click(function(e) {	
		Buscar();			
    });
	
	//para inicar la validacion del frm 
		jQuery("#frmEmpleado").validationEngine('attach');
		jQuery("#frmRegistrar_usuario").validationEngine('attach');	*/
});
/*
function Buscar(){
	//llamamos ala funcion busqueda
	DNI=$("#PersonalDni").val();
	if(!isNaN(DNI)){
		if(DNI.length==8){
			Busqueda();	// llamanos ala funcion busqueda k a va a la BD
		}else{
			alert("DNI Incorrecto");
		}
	}else{
			alert("DNI Incorrecto");
		}	
				
		return false;
}

function Busqueda(){
	//alert("Entro")
	var DNI;
	DNI=$("#PersonalDni").val();
	$.post("../personal/index_ajax.php",{"accion":"Buscar_xDNI","dni":DNI},
	function(datodev){
		//alert(datodev);
		datodev=$.parseJSON(datodev);
		var DATA=datodev.items;
		//alert(DATA.length);
		if(DATA.length!=0){
		//recorrer json  Clientes
		$.each(DATA, function(index, obj) {
			$("#EmpleadoNombre_").attr("value",obj.Nombre+"");
			$("#PersonalId_").attr("value",obj.PersonalId+"");
			//$("#tdni").attr("value",obj.DNI+"");
		$("#divRegistrar_usuario").css("display","block"); // hacemos visible los  input de usuario
			//alert(ob_clie.NOMBRE);
		});
		}else{
			//$("#EmpleadoNombre_").attr("value","");
			$("#frmRegistrar_usuario")[0].reset();
			$("#EmpleadoNombre_").attr("value","");
			$("#PersonalId_").attr("value","");
			alert("No Se Encontraron Registros");
	
		$("#PersonalDni").focus();
		}	
		//fin del recorrido
		});
	}
*/