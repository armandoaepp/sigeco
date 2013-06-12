<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<link  type="text/css" href="../css/ui-lightness/jquery-ui-1.9.2.custom.css" rel="stylesheet">
<script type="text/javascript" src="../js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.23.custom.min.js"></script>
<!--  esto lo coloco aca para poder cargar los combos -->
<script type="text/javascript" src="../js/js_provincia.js"></script>

<script type="text/javascript">
	$(document).ready(function(e) {
		$("#tablaproductor  tr td a img ").on("click", function(event){
			//alert($(this).text());
			alert($(this).attr('id'));
		});
	});


	$(function(){		
		// Creamos los botones
		$('#botonera button').button();
		// ventana modal Nuevo 			
		$("#dialogModal" ).dialog({
			autoOpen: false,
			modal:true,
			width: 450,
			
		});
		// abrir la venta modal Nuevo
		$('#btnModal').on('click',function(){
		  $("#dialogModal" ).dialog('open');
		   return false;
		});
	EnviarFormularioNuevo();

	});
	
	function EnviarFormularioNuevo(){
	// ENVIAR FORMULARIO CUANDO HAGA CLICK EN EL BOTON REGISTTRAR
	$("#frmRegistrar_productor").submit(function(e){
	//envio al formulario
	alert($(this).serialize());
	$.post("eventos.php?metodo=Registrar",$(this).serialize(),function(datadev){
				datadev=$.parseJSON(datadev);
				//alert("Respuesta:::  "+datadev)
				
			$("#divRespuesta").text(datadev);	
			
		});
		$(this).dialog( "close" );
	//return false;
	});
	//FIN ENVIO
	}
	// limpiar el frm
	function Limpiar(){
	$("#frmRegistrar_productor input").each(function(index, element) {
               if($(this).attr("type")!="submit"){ // si es diferente a un botn 
			   if($(this).attr("type")!="radio"){ // para k no le borre los valores al radio button 
					$(this).attr("value","");
				}
			  }
            });
	$("#ProductorNombre_").focus();
	
	}
</script>
<body>
<?php
ob_start();
include_once "./Controlador_productor.php";
include_once "../cixphp.php";
$cix = new CixPHP();

?>
<table width="403" height="27"  border="1">
  <tr>
    <td><section id="botonera">
          <button id="btnModal">Nuevo</button>
      </section></td>
  </tr>
</table>
<?php
 $data = CListar_productor();
        if (isset($_GET["pagina"])) {
            $page = $_GET["pagina"];
        } else {
            $page = 1;
        }
        $Listar_productor = $cix->ImprimeTable("tablaproductor", $data, "?", "?", 5, $page);
		echo $Listar_productor ;
?>
<div id="dialogModal" title="Nuevo Productor">
  <p>
    <?php include_once("Registrar_productor.php");?>
</p>
</div>
</body>
</html>