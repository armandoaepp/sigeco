<?php  session_start();if(!isset($_SESSION["login"]))  header("Location:../../login.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>SIGECO-APESI: Control</title>
<link href="../css/contenedor.css" rel="stylesheet" type="text/css" />
<link href="../css/menu.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_tabla.css" rel="stylesheet" type="text/css" />

<!--Ui de Jquery -->
<link  type="text/css" href="../css/ui-lightness/jquery-ui-1.9.2.custom.css" rel="stylesheet">
<script type="text/javascript" src="../js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.23.custom.min.js"></script>
<link href="../css/estilo_unidadproductiva_interno.css" rel="stylesheet" type="text/css" />
<!--modificar el estilo de los Jdialogos y calendario -->
<script src="../js/jquery.ui.datepicker-es.js"></script>
<link href="../css/estilo_calendario.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_frmModal.css" rel="stylesheet" type="text/css" />

</head>


<script  type="text/javascript">

$(document).ready(function(e) {
    CargarControlFitoSanitario();  
		$("#menu_interno #navi li").removeClass("selected");
	    $("#menu_interno #navi #parcela").addClass("selected");
	
	$("#Modal_ControlFitoSanitario").dialog({
		autoOpen: false,
		title:"Control Fito Sanitario",		
		width: 380,
		height: 330,
		modal: true
	});
 		// agregamos clases css a los text select textarea 
		$("input[type=text],select").addClass("text ui-widget-content ui-corner-all widthInput");
	    $("textarea").addClass("text ui-widget-content ui-corner-all");
		
});

function CargarControlFitoSanitario(){
	$.ajax({url:"../controlfitosanitario/index_ajax.php",data: {"accion":"ListarControxParcela"},success: function(data){
		$("#ListarControlFitoSanitario").html(data);
		$('#TablaControl td:nth-child(3),#TablaControl th:nth-child(3)').hide();		
		}
	});
}
function Eliminar(id){
	var msg = confirm("Desea Eliminar el Registro?")
	if ( msg ) {
		$.ajax({
			url: '../controlfitosanitario/index_ajax.php',
			type: "GET",
			data:{ "accion":"Eliminar","id":id},
			success: function(datos){
			alert(datos);
			CargarControlFitoSanitario();				
			}
		});
	}
	return false;
}

function Modificar(id){			
		$.ajaxSetup({async:false});
		$.post("../controlfitosanitario/index_ajax.php",{"accion":"Mactualizar","id":id},
		function(data) {$("#Modal_ControlFitoSanitario").html(data);		
			TextCalendario("ControlFitosanitarioFecha_")
		});	
		$("#Modal_ControlFitoSanitario").dialog("open");     
}
function ActualizarControlFitosanitario(){
	var metodo;
	$("#frmActualizar_controlfitosanitario").submit(function(){		
		metodo="&accion=Actualizar";
			$.ajax({
				url: '../controlfitosanitario/index_ajax.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(datos){				
					alert(datos);								
					$( "#Modal_ControlFitoSanitario").dialog("close" );
					CargarControlFitoSanitario();	
				}
			});
			return false;// para que no recarge toda la pagina
		 });	
	
	}
function Cancelar(contenedor, frmModal){
	$("#"+contenedor).dialog("close");
	$("#"+frmModal)[0].reset();
}	
function TextCalendario(idtext){
	$("#"+idtext).datepicker({
		showOn: "button",
		buttonImage: "../images/calendar.gif",
		buttonImageOnly: true,
		yearRange: "-80:+5",		
		changeMonth: true,
		changeYear: true,
		dateFormat: "dd/mm/yy",				
	}); 
}
</script>

<style>
.widthInput {
	width: 200px;
	font-size: 14px;
	color: #3a3a3a;
	height:30px;
}
#cuerpoContenedor {
	margin: 8px;
	background: #FFFFFF;
	height: 100%;
	padding: 0px 0 10px 0;
}
</style>
<body>
<?php  

	 ?>
<div id="contenedor">
  <div id="superior">
    <div id="superiorIzquierda">
      <?php include_once("../superior_html.php");?>
    </div>
    <div id="superiorDerecha"> Usuario En  Linea :
      <?php  echo $_SESSION["usuario"];?>
    </div>
    <div class="clear"></div>
    <?php include_once("../menu.php");?>
  </div>
  <div id="cuerpo">
    <div id="cuerpoContenedor">
      <div style="background:#ebffe0;border-bottom: 1px solid #CCCCCC;">
        <p> Unidad Productiva:<b> <?php echo $_SESSION["Productor"];?> </b> <a  href="index.php" > << Volver a Vista de Unidad Productiva </a> </p>
        <p  style="clear:both; height:20px"> </p>
        <?php include_once("./menu_up.php");?>
      </div>
      <div id="contenido">
        <div id="contenidoDatos">
          <table class="tablaSeparador" >
            <tr>
              <td style="text-align:left"><h4> Control de Fitos Sanitario </h4></td>
              <td style="text-align:right"><a href="d_parcela.php" title="A&ntilde;adir un Familiar">Volver a Detalle de  Parcelea</a></td>
            </tr>
          </table>
          <div id="ListarControlFitoSanitario"></div>          
           <div id="Modal_ControlFitoSanitario"></div>

        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>