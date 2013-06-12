<script src="../js/jquery-1.8.3.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
		// Ocultar Culmnas de la Tabla(son los IDs que voy a utilizar Luego saludos)
      $('#tablaunidadproductiva td:nth-child(2),#tablaunidadproductiva th:nth-child(2)').hide(); //UnidadProductivaId
	  $('#tablaunidadproductiva td:nth-child(3),#tablaunidadproductiva th:nth-child(3)').hide(); //ProductorId
		EliminarSerie();
	    });
	
// Eliminar Datos en serie de un chk 
function EliminarSerie(){
$("#EliminarSerie").submit(function () {
	// enviar solo los chvr cheados
     var i, elements = document.getElementsByTagName('input'), array = [];
     for (i = 0; i < elements.length; i++) {
          if (elements[i].type == 'checkbox' && elements[i].checked) {
               array.push(elements[i]);
          }
     }
	//  confirmar el eliminar
	 var action = confirm('Está seguro que desea eliminar '+array.length +' Fila(s) Seleccionada(s)?');
		if(action==true){
			//$.post("Eliminar.php", array, function (data) {
			$.post("index.php?accion=EliminarSerie", array, function (data) {
			//  alert(data);
			  })
		  }else {
			  return false;
			  }
     
		  });		
	}	
	
</script>

<div id="divListar_unidadproductiva"> <?php echo $Listar_unidadproductiva ;?> </div>
