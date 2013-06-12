<?php  session_start();if(!isset($_SESSION["login"]))  header("Location:../../login.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>APESI:Personal</title>
<link href="../css/contenedor.css" rel="stylesheet" type="text/css" />
<link href="../css/menu.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_tabla.css" rel="stylesheet" type="text/css" />

<!--Ui de Jquery -->
<link  type="text/css" href="../css/ui-lightness/jquery-ui-1.9.2.custom.css" rel="stylesheet">
<script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.23.custom.min.js"></script>
<link href="../css/estilo_unidadproductiva_interno.css" rel="stylesheet" type="text/css" />
<!--modificar el estilo de los Jdialogos y calendario -->
<script src="../js/jquery.ui.datepicker-es.js"></script>
<link href="../css/estilo_calendario.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_frmModal.css" rel="stylesheet" type="text/css" />
</head>
<script  type="text/javascript">

$(document).ready(function(e) {
    CargarUsuarios();  
		$("#menu_interno #navi li").removeClass("selected");
	    $("#menu_interno #navi #producto").addClass("selected");
	
	$("#Modal_Usuario").dialog({
		autoOpen: false,
		title:"Nuevo Usuario",
		height: 300,
		width: 450,
		modal: true
	});
 		// agregamos clases css a los text select textarea 
		//$("input[type=text],select").addClass("text ui-widget-content ui-corner-all widthInput");
	   // $("textarea").addClass("text ui-widget-content ui-corner-all");
	   

	
});

function CargarUsuarios(){
	$.ajax({url:"../usuario/index_ajax.php",data: {"accion":"Listar"},success: function(data){
		$("#ListarUsuarios").html(data);
		//$('#tablaProducto td:nth-child(3),#tablaProducto th:nth-child(3)').hide();
		//$('#tablaProducto td:nth-child(4),#tablaProducto th:nth-child(4)').hide();
		}
	});
}
function AccioUser(id,estado){
	var accion;
	var mensaje;
	if(estado=="A"){
		accion="Eliminar";
		mensaje="Desea Desactivar el Usuario";
	}else{
		accion="Recuperar"
		mensaje="Desea Activar el Usuario";
	}
	
	var msg = confirm(mensaje)
	if ( msg ) {
		$.ajax({
			url: '../usuario/index_ajax.php',
			type: "GET",
			data:{ "accion":accion,"id":id},
			success: function(datos){
			alert(datos);
			CargarUsuarios();				
			}
		});
	}
	return false;
}

function ModalUsuario(id){			
		$.ajaxSetup({async:false});
		$.post("../usuario/index_ajax.php",{"accion":"OpenModal","id":id},
		function(data) {$("#Modal_Usuario").html(data);});	
		$("#Modal_Usuario").dialog("open");     
}
function RegistrarUsuario(){
	var metodo;
	$("#frmRegistrar_usuario").submit(function(){		
		metodo="&accion=Registrar";		
			$.ajax({
				url: '../usuario/index_ajax.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(datos){				
					alert(datos);								
					$("#Modal_Usuario").dialog("close" );
					CargarUsuarios();	
				}
			});
			return false;// para que no recarge toda la pagina
		 });	
	
	}
function ActualizarUsuario(){
	var metodo;
	$("#frmActualizar_usuario").submit(function(){		
		metodo="&accion=Actualizar";
			$.ajax({
				url: '../usuario/index_ajax.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(datos){				
					alert(datos);								
					$( "#Modal_Usuario").dialog("close" );
					CargarUsuarios();	
				}
			});
			return false;// para que no recarge toda la pagina
		 });	
	
	}

function Cancelar(contenedor, frmModal){
	$("#"+contenedor).dialog("close");
	$("#"+frmModal)[0].reset();
}	

</script>

<style>
.widthInput {
	width: 200px;
	font-size: 14px;
	color: #3a3a3a;
	height: 30px;
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
    <div id="superiorDerecha">
      <?php include_once("../usuario_linea.php"); // echo $_SESSION["usuario"];?>
    </div>
    <div class="clear"></div>
    <?php include_once("./menu_mantenimiento.php");?>
  </div>
  <div id="cuerpo">
    <div id="cuerpoContenedor">
  
      <div id="contenido">
        <div id="contenidoDatos">
          <table class="tablaSeparador" >
            <tr>
              <td style="text-align:left"><h4> Usuarios </h4></td>
              <td style="text-align:right"><a href="javascript:ModalUsuario()"  title="Añadir Nuevo Usuario"> Añadir  Usuario</a></td>
            </tr>
          </table>
          <div id="ListarUsuarios"></div>
          <div id="Modal_Usuario"></div>
          
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>