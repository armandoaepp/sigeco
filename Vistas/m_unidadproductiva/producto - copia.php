<?php  session_start();
if(!isset($_SESSION["login"]))  header("Location:../../login.php");
//  echo "<META HTTP-EQUIV = REFRESH CONTENT='2 ;URL=../../login.php'>";

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>APESI: Analisis Químico </title>
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
<link href="../css/estilo_ListaSeparador.css" rel="stylesheet" type="text/css" />

<script>
/*Iniciar los Calendarios */
   	$(document).ready(function(){	
	ConsultaDatos();	
	$("#AnalisisQuimicoFecha_" ).datepicker({
		showOn: "button",
		buttonImage: "../images/calendar.gif",
		buttonImageOnly: true,
		yearRange: "-80:+5",		
		changeMonth: true,
		changeYear: true,
		dateFormat: "dd/mm/yy",				
		}); 
		
		$("#ActualizarAnalisis").dialog({
			autoOpen: false,
			title:"Actulizar Analisis Quimico ",
			height: 400,
			width: 600,
			modal: true
	    });
		// agregamos clases css a los text select textarea 
		 $("input[type=text],select").addClass("text ui-widget-content ui-corner-all widthInput");
		  $("textarea").addClass("text ui-widget-content ui-corner-all");
	});
	
	$(function(){		
		// ventana modal Nuevo 			
		$("#ModalAnalisisQuimico" ).dialog({
			autoOpen: false,
			modal:true,
			width: 600	,
			height: 500	,
			maxHeight: 600
		});
		// abrir la venta modal Nuevo
		$('#NuevoAnalisisQuimico').on('click',function(){
		  $("#ModalAnalisisQuimico" ).dialog('open');
		  
		   return false;
		});		
	RegistrarAnalisisQuimico();
	});
	
 function Eliminar(id){
		var msg = confirm("Desea Eliminar el Registro?")
		if ( msg ) {
			$.ajax({
				url: 'index_interno.php',
				type: "POST",
				data: "accion=EliminarAnalisis&id="+id,
				success: function(datos){
				alert(datos);
				ConsultaDatos();				
				}
			});
		}
		return false;
	}	
function Modificar(id){			
		$.ajaxSetup({async:false});
		$.post("Actualizar_analisisquimico.php",{id:id},
		function(data) {$("#ActualizarAnalisis").html(data);});	
		$("#ActualizarAnalisis").dialog("open");     
}
function Cancelar(cerrarFrm){
	$("#"+cerrarFrm).dialog("close");
	$("#frmRegistrar_analisisquimico")[0].reset();
}
function ConsultaDatos(){
	//alert("consultar datos");
	$.ajax({url:"../analisisquimico/Listar_Datos.php",success: function(data){$("#DatosPrincipales").html(data);}
	});
	}
	
function ActualizarAnalisisQuimico(){
	var metodo;
	$("#frmActualizar_analisisquimico").submit(function(){		
		metodo="&accion=Actualizar";
			$.ajax({
				url: '../analisisquimico/index_ajax.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(datos){				
					alert(datos);								
					$( "#ActualizarAnalisis").dialog( "close" );
					ConsultaDatos();	
				}
			});
			return false;// para que no recarge toda la pagina
		 });	
	
	}	
function RegistrarAnalisisQuimico(){
	var metodo;
	$("#frmRegistrar_analisisquimico").submit(function(){		
			metodo="&accion=Registrar";
			$.ajax({
				url: '../analisisquimico/index_ajax.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(datos){				
					alert(datos);								
					$( "#ModalAnalisisQuimico").dialog( "close" );
					ConsultaDatos();
					$("#frmRegistrar_analisisquimico")[0].reset();	
				}
			});
			return false;// para que no recarge toda la pagina
		 });	
	
	}	
</script>
<style>

/*especial para la tabla de presentacion*/
#DatosSuelo table tr p {
	font-size: 14px;
	font-weight: bold;
}
.widthInput {
	width: 200px;
	font-size: 14px;
	color: #3a3a3a;
}
#cuerpoContenedor {
	margin: 8px;
	background: #FFFFFF;
	height: 100%;
	padding: 0px 0 10px 0;
}
</style>
</head>
<body>

<div id="contenedor">
  <div id="superior">
    <div id="superiorIzquierda">
      <?php include_once("../superior_html.php");?>
    </div>
    <div id="superiorDerecha">
      <?php include_once("../usuario_linea.php"); // echo $_SESSION["usuario"];?>
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
              <td style="text-align:left"><h4> Análisis Físico y Químico</h4></td>
              <td style="text-align:right"><ul class="classAdd">
                  <li > <a href="#"  id="NuevoAnalisisQuimico" title="Añadir un Analisis de Suelo "> Añadir </a></li>
                </ul></td>
            </tr>
          </table>
          <div id="DatosPrincipales"> </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>