// JavaScript Document
//comenzar javascript
var Servicios="../labor/";
$(document).ready(function(e) {
	// Cargar la Tabla detalle de labore cultruales 
			CargarTablaDetalleLaboresCulturales();	
	
	// ENVIAR FORMULARIO PARA REGISTRAR LABORES CULTURALES
	 EnviarFormularioLabor("#frmRegistrar_labor_poda");
	 EnviarFormularioLabor("#frmRegistrar_labor_riego");
	 EnviarFormularioLabor("#frmRegistrar_labor_enfermedad");
	 EnviarFormularioLabor("#frmRegistrar_labor_plaga");
	 EnviarFormularioLabor("#frmRegistrar_labor_fertilizacion");
	 
	 EliminarDetalleLaborCultural();
	
});
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

// recorremos todos los campos que tiene el formulario
function limpiarForm(miForm) {	
	$(':input', miForm).each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase();
		//limpiamos los valores de los campos…
		if (type == 'text' || type == 'password' || tag == 'textarea')
		this.value = "";
		// excepto de los checkboxes y radios, le quitamos el checked
		// pero su valor no debe ser cambiado
		else if (type == 'checkbox' || type == 'radio')
		this.checked = false;
		// los selects le ponesmos el indice a -
		else if (tag == 'select')
		this.selectedIndex = -1;
	});
}
// Cargar la Tabla detalle de labore cultruales 
function CargarTablaDetalleLaboresCulturales(){	
	//accion = "&accion=RegistrarLabor"	
	urlLink="h";

	//alert("entro al filtra datos ");
	$.ajax({
		//data: $("#frm_filtro").serialize()+accion,		
		type: "POST",
		dataType: "json",
		url: Servicios+"servicio_index.php?accion=ListarDetalleLabores",
			success: function(data){
				var html = '';
				if(data.length > 0){
					$.each(data, function(i,item){
						//l.LaborId, l.LaborFecha , tl.TipoLabor , l.LaborTipo , Trabajo ,  l.LaborNota
						html += '<tr>'
						//<a  href="' . $pactu . 'id=' . $data["cuerpo"][$i]["$columnas"] . '&accion=Mactualizar"><img src="../images/delete.gif" width="15" height="15" /></a>
							//html += '<td><a  href="'+urlLink+'?id='+item.LaborId+'&accion=Elimiar"><img src="../images/delete.gif" width="15" height="15" title="Eliminar" /></a></td>'
							html += '<td><img src="../images/delete.gif" id="'+item.LaborId+'" width="15" height="15" title="Eliminar" /></td>'
							html += '<td>'+item.LaborId+'</td>'
							html += '<td>'+item.LaborFecha+'</td>'
							html += '<td>'+item.TipoLabor+'</td>'
							html += '<td>'+item.LaborTipo+'</td>'
							html += '<td>'+item.Trabajo+'</td>'
							html += '<td>'+item.LaborNota+'</td>'
						html += '</tr>';
															
					});					
				}
				if(html == '') html = '<tr><td colspan="6" align="center">No se encontraron registros..</td></tr>'
				$("#dataTablaDetallesLabores tbody").html(html);
				$('#dataTablaDetallesLabores td:nth-child(2)').hide();
			}
	  });
}
