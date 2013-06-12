// JavaScript Document
$(document).ready(function(e) {
		// FRM ACTUALIZAR ACOPIO
	$('#frmActualizar_acopio input,#frmActualizar_acopio button,#frmActualizar_acopio select').attr("disabled", true);
	$("#linkEditar").click( function(){ 			
			linkEditar();
			return false;
	});
	$("#linkCancelar").click( function(){ 			
			linkCancelar();
			return false;
	});
	
	// frm HUMEDAD
	$('#frmRegistrar_humedad input,#frmRegistrar_humedad button').attr("disabled", true);
	$("#linkEditarHumedad").click( function(){ 			
			//linkEditarHumedad();
				return false;
	});	/*
	$("#linkCancelarHumedad").click( function(){ 			
			linkCancelarHumedad();
				return false;
	});*/
	// FRM RENDIMIENTO
	
	$("#linkEditarRendimiento").click( function(){ 			
			linkEditarRendimiento();
				return false;
	});	
	$("#linkCancelarRendimiento").click( function(){ 			
			linkCancelarRendimiento();
				return false;
	})
	//  actualizar 
	ActualizarAcopio();
	// cargar el frm rendimineto
	CargarRendimiento();
	
	// cargar trazabilidad
	CargarTrazabilidad();	
  	$("#linkTrazabilidadEdtitar").click( function(){ 			
			linkTrazabilidadEdtitar();
			return false;
	});
	$("#linkTrazabilidadCancelar").click( function(){ 			
			linkTrazabilidadCancelar();
			return false;
	});
	// cargar Certificado de Calidad
	CargarCertificadoCalidad();	
	$("#linkCertificadoCalidadCancelar").css("display", "none");
	$("#linkCertificadoCalidadEdtitar").click( function(){ 			
			linkCertificadoCalidadEdtitar();
			return false;
	});
	$("#linkCertificadoCalidadCancelar").click( function(){ 			
			linkCertificadoCalidadCancelar();
			return false;
	});
	
	// cargar Parametros de Calidad
	CargarParametro();	
	$("#linkParametroCancelar").css("display", "none");
	$("#linkParametroEdtitar").click( function(){ 			
			linkParametroEdtitar();
			return false;
	});
	$("#linkParametroCancelar").click( function(){ 			
			linkParametroCancelar();
			return false;
	});
	
	// Cargar Taceo 
	CargarTaceo();
	$("#linkTaceoCancelar").css("display", "none");
	$("#linkTaceoEdtitar").click( function(){ 			
			linkTaceoEdtitar();
			return false;
	});
	$("#linkTaceoCancelar").click( function(){ 			
			linkTaceoCancelar();
			return false;
	});
	// Cargar Estado de Acopio
	CargarEstadoAcopio();
	
});

//cuando le diee clic en el lin editar 
function linkEditar(){
	$("#linkCancelar").css("display", "block");		
	$("#linkEditar").css("display", "none");
	$('#frmActualizar_acopio input,#frmActualizar_acopio button,#frmActualizar_acopio select').attr("disabled", false);
	
}
function linkCancelar(){
	$("#linkCancelar").css("display", "none");	
	$("#linkEditar").css("display", "block");
	$('#frmActualizar_acopio input,#frmActualizar_acopio button,#frmActualizar_acopio select').attr("disabled", true);
	 location.reload(); // recargar la pagina	
}

//cuando le diee clic en el linkEditarRendimiento
function linkEditarRendimiento(){
	$("#linkEditarRendimiento").css("display", "none");
	$("#linkCancelarRendimiento").css("display", "block");			
	$('#frmRegistrar_rendimiento input,#frmRegistrar_rendimiento button').attr("disabled", false);
	$('#frmActualizar_rendimiento input,#frmActualizar_rendimiento button').attr("disabled", false);
	
}
function linkCancelarRendimiento(){
	$("#linkEditarRendimiento").css("display", "block");
	$("#linkCancelarRendimiento").css("display", "none");	
	$('#frmRegistrar_rendimiento input,#frmRegistrar_rendimiento button').attr("disabled", true);	
	$('#frmActualizar_rendimiento input,#frmActualizar_rendimiento button').attr("disabled", true);	
	CargarRendimiento();
}
function ActualizarAcopio(){
	var metodo;
	$("#frmActualizar_acopio").submit(function(){		
	 metodo="&accion=Actualizar";
		$.ajax({
			url: '../acopio/index_ajax.php',
			type: "POST",
			data:$(this).serialize()+metodo,
			success: function(datos){				
				//alert(datos);
			if(datos=="ok"){
				alert("Datos Registrados Correctamente");	
				linkCancelar();
			}else{
				alert(datos);
				return false;// para que no recarge toda la pagina
				}	
			}
		});
		return false;// para que no recarge toda la pagina
	 });	
}	

function CargarRendimiento(){		
	idAcopio=$("#AcopioId_").val();
	$.ajax({url:"../rendimiento/index_ajax.php",type: "GET",data: {"accion":"frmRendimineto","idAcopio":idAcopio},success: function(data){
		$("#Rendimiento").html(data);	
		$('#frmRegistrar_rendimiento input,#frmRegistrar_rendimiento button').attr("disabled", true);
		$('#frmActualizar_rendimiento input,#frmActualizar_rendimiento button').attr("disabled", true);		
		// calcular Rendimiento 
		 $("#RendimientoCafeDescarte_").keyup(function(e) { CalcularRendimiento(); 	return false; 	});
		 // Registrar Rendimiento
			RegistarRendimiento();
		// leer la funcion Actualizar Rendieminto
			ActualizarRendimiento();
			
		}
	});	
}

function RegistarRendimiento(){
	var metodo;
	$("#frmRegistrar_rendimiento").submit(function(){		
		metodo="&accion=Registrar";
		$.ajax({
			url: '../rendimiento/index_ajax.php',
			type: "POST",
			data:$(this).serialize()+metodo,
			success: function(datos){				
				//alert(datos);
			if(datos=="ok"){
				alert("Datos Registrados Correctamente");	
				linkCancelarRendimiento();
			}else{
				alert(datos);
				return false;// para que no recarge toda la pagina
				}		
			}
		});
		return false;// para que no recarge toda la pagina
	 });	
}	
function ActualizarRendimiento(){
	var metodo;
	$("#frmActualizar_rendimiento").submit(function(){		
		metodo="&accion=Actualizar";
		$.ajax({
			url: '../rendimiento/index_ajax.php',
			type: "POST",
			data:$(this).serialize()+metodo,
			success: function(datos){				
				//alert(datos);
			if(datos=="ok"){
				alert("Datos Registrados Correctamente");	
				linkCancelarRendimiento();
			}else{
				alert(datos);
				return false;// para que no recarge toda la pagina
				}		
			}
		});
		return false;// para que no recarge toda la pagina
	 });	
}	

function CalcularRendimiento(){
	// RendimientoMuestra, RendimientoCafePilado, RendimientoCafeDescarte, RendimientoCascara, RendimientoExportable, RendimientoTotal, RendimientoPorcentaje, AcopioId
	RendimientoMuestra_=$("#RendimientoMuestra_").val();
	RendimientoCafePilado_=$("#RendimientoCafePilado_").val();
	RendimientoCafeDescarte_=$("#RendimientoCafeDescarte_").val();	
	
	RendimientoCascara_ = RendimientoMuestra_ - RendimientoCafePilado_ ;
	RendimientoExportable_ = RendimientoMuestra_ - RendimientoCafeDescarte_ - RendimientoCascara_ ;
	RendimientoTotal_ = RendimientoMuestra_ ;
	RendimientoPorcentaje_ = ( RendimientoExportable_ * 100) / RendimientoMuestra_ ;
	
	$("#RendimientoCascara_").attr("value",RendimientoCascara_);
	$("#RendimientoExportable_").attr("value",RendimientoExportable_);
	$("#RendimientoTotal_").attr("value",RendimientoTotal_);
	$("#RendimientoPorcentaje_").attr("value",RendimientoPorcentaje_);
	
	}
	
function linkTrazabilidadEdtitar(){
	$("#linkTrazabilidadEdtitar").css("display", "none");
	$("#linkTrazabilidadCancelar").css("display", "block");	
	CargarTrazabilidadEditar();
}
function linkTrazabilidadCancelar(){
	$("#linkTrazabilidadEdtitar").css("display", "block");
	$("#linkTrazabilidadCancelar").css("display", "none");
	CargarTrazabilidad();
}	
	
function CargarTrazabilidad(){	
	$.ajax({url:"../trazabilidad/index_ajax.php",data: {"accion":"ListarParcelaAcopio","editar":""},success: function(data){
		$("#MTrazabilidad").html(data);	
		 $("#frmTrazabilidad button").css("display", "none");
		$('#tablatrazabilidad td:nth-child(1),#tablatrazabilidad th:nth-child(1)').hide();
		 $("#linkTrazabilidadCancelar").css("display", "none")		
		}
	});	
}
	
function CargarTrazabilidadEditar(){	
	$.ajax({url:"../trazabilidad/index_ajax.php",type: "GET",data: {"accion":"ListarParcelaAcopio","editar":"Editar"},success: function(data){
		$("#MTrazabilidad").html(data);	
		$("#frmTrazabilidad button").css("display", "block");	
		 $('#tablatrazabilidad td:nth-child(1),#tablatrazabilidad th:nth-child(1)').show(); 
		 	Registrar_Trazabilidad();
		}
	});	
}
function Registrar_Trazabilidad(){	
	var metodo;
	$("#frmTrazabilidad").submit(function(){		
		metodo="&accion=Registrar";
		//alert($(this).serialize());
		$.ajax({
			url: '../trazabilidad/index_ajax.php',
			type: "POST",
			data:$(this).serialize()+metodo,
			success: function(datos){				
			if(datos=="ok"){
				alert("Datos Registrados Correctamente");	
				linkTrazabilidadCancelar();
			}else{
				alert(datos);
				return false;// para que no recarge toda la pagina
				}		
			}
		});
		return false;// para que no recarge toda la pagina
	 });	
}	
// Certidicado de Calidad 
function CargarCertificadoCalidad(){
	idAcopio=$("#AcopioId_").val();	
	$.ajax({url:"../certificadocalidad/index_ajax.php", type:"GET" ,data: {"accion":"Listar","idAcopio":idAcopio },success: function(data){
		$("#DatosCertificadoCalidad").html(data);	
		}
	});	
}
function CargarCertificadoCalidadModalidadFrm(){
	idAcopio=$("#AcopioId_").val();	
	$.ajax({url:"../certificadocalidad/index_ajax.php", type:"GET" ,data: {"accion":"ModalidadFrm","idAcopio":idAcopio },
	success: function(data){
		$("#DatosCertificadoCalidad").html(data);
		Registrar_CertificadoCalidad();	
		}
	});	
}
function linkCertificadoCalidadEdtitar(){	
	$("#linkCertificadoCalidadEdtitar").css("display", "none");
	$("#linkCertificadoCalidadCancelar").css("display", "block");
	CargarCertificadoCalidadModalidadFrm();	
	
}
function linkCertificadoCalidadCancelar(){
	$("#linkCertificadoCalidadEdtitar").css("display", "block");
	$("#linkCertificadoCalidadCancelar").css("display", "none");
	CargarCertificadoCalidad();
}	

function Registrar_CertificadoCalidad(){	
	var metodo;
	$("#frmRegistrar_certificadocalidad").submit(function(){		
		metodo="&accion=Registrar";
		$.ajax({
			url: '../certificadocalidad/index_ajax.php',
			type: "POST",
			data:$(this).serialize()+metodo,
			success: function(datos){				
				//alert(datos);
			if(datos=="ok"){
				alert("Datos Registrados Correctamente");	
				linkCertificadoCalidadCancelar();
			}else{
				alert(datos);
				return false;// para que no recarge toda la pagina
				}		
			}
		});
		return false;// para que no recarge toda la pagina
	 });	
}		
// Parametros
function CargarParametro(){
	idAcopio=$("#AcopioId_").val();	
	$.ajax({url:"../parametro/index_ajax.php", type:"GET" ,data: {"accion":"Listar","idAcopio":idAcopio },success: function(data){
		$("#DatosParametro").html(data);	
		}
	});	
}
function CargarParametroModalidadFrm(){
	idAcopio=$("#AcopioId_").val();	
	$.ajax({url:"../parametro/index_ajax.php", type:"GET" ,data: {"accion":"ModalidadFrm","idAcopio":idAcopio },
	success: function(data){
		$("#DatosParametro").html(data);
		Registrar_Parametro();	
		}
	});	
}
function linkParametroEdtitar(){	
	$("#linkParametroEdtitar").css("display", "none");
	$("#linkParametroCancelar").css("display", "block");
	CargarParametroModalidadFrm();	
	
}
function linkParametroCancelar(){
	$("#linkParametroEdtitar").css("display", "block");
	$("#linkParametroCancelar").css("display", "none");
	CargarParametro();
}	

function Registrar_Parametro(){	
	var metodo;
	$("#frmRegistrar_parametro").submit(function(){		
		metodo="&accion=Registrar";
		$.ajax({
			url: '../parametro/index_ajax.php',
			type: "POST",
			data:$(this).serialize()+metodo,
			success: function(datos){				
				//alert(datos);
			if(datos=="ok"){
				alert("Datos Registrados Correctamente");	
				linkParametroCancelar();
			}else{
				alert(datos);
				return false;// para que no recarge toda la pagina
				}		
			}
		});
		return false;// para que no recarge toda la pagina
	 });	
}	

// Taceo
function CargarTaceo(){
	idAcopio=$("#AcopioId_").val();	
	$.ajax({url:"../taceo/index_ajax.php", type:"GET" ,data: {"accion":"Listar","idAcopio":idAcopio },success: function(data){
		$("#DatosTaceo").html(data);	
		}
	});	
}
function CargarTaceoModalidadFrm(){
	idAcopio=$("#AcopioId_").val();	
	$.ajax({url:"../taceo/index_ajax.php", type:"GET" ,data: {"accion":"ModalidadFrm","idAcopio":idAcopio },
	success: function(data){
		$("#DatosTaceo").html(data);
		Registrar_Taceo();	
		}
	});	
}
function linkTaceoEdtitar(){	
	$("#linkTaceoEdtitar").css("display", "none");
	$("#linkTaceoCancelar").css("display", "block");
	CargarTaceoModalidadFrm();	
	
}
function linkTaceoCancelar(){
	$("#linkTaceoEdtitar").css("display", "block");
	$("#linkTaceoCancelar").css("display", "none");
	CargarTaceo();
}	

function Registrar_Taceo(){	
	var metodo;
	$("#frmRegistrar_taceo").submit(function(){		
		metodo="&accion=Registrar";
		$.ajax({
			url: '../taceo/index_ajax.php',
			type: "POST",
			data:$(this).serialize()+metodo,
			success: function(datos){				
				//alert(datos);
			if(datos=="ok"){
				alert("Datos Registrados Correctamente");	
				linkTaceoCancelar();
			}else{
				alert(datos);
				return false;// para que no recarge toda la pagina
				}		
			}
		});
		return false;// para que no recarge toda la pagina
	 });	
}
// Carga Estado de Acopo
function CargarEstadoAcopio(){
	idAcopio=$("#AcopioId_").val();	
	$.ajax({url:"../estadoacopio/index_ajax.php", type:"GET" ,data: {"accion":"Listar","idAcopio":idAcopio },
	success: function(data){
	   $("#DatosEstadoAcopio").html(data);
		Registrar_Taceo();	
		}
	});	
}		