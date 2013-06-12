// funcion que permite abrir y cerrar un formulario 
	function frmJdialogo(IDcontenedorModal,IDurlClic){
		// ventana modal Nuevo 			
		$(IDcontenedorModal).dialog({
			autoOpen: false,
			modal:true,
			width: 400		 
		});
		// abrir la venta modal Nuevo
		$(IDurlClic).on('click',function(){
		  $(IDcontenedorModal ).dialog('open');
		   return false;
		});
	}
	
// funcion que permite abrir y cerrar un formulario Controlado el Ancho
	function frmJdialogoWidth(IDcontenedorModal,IDurlClic,ancho){
		// ventana modal Nuevo 			
		$(IDcontenedorModal).dialog({
			autoOpen: false,
			modal:true,
			width: ancho
			
		});
		// abrir la venta modal Nuevo
		$(IDurlClic).on('click',function(){
		  $(IDcontenedorModal ).dialog('open');
		   return false;
		});
	}