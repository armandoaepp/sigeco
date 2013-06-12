<?php  session_start();if(!isset($_SESSION["login"]))  header("Location:../../login.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>SIGECO-APESI: Producto </title>
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

<script  type="text/javascript">

$(document).ready(function(e) {
    CargarPersonal();  
	
		
});

function CargarPersonal(){
	alert(holas);
	$.ajax({url:"../personal/index_ajax.php",data: {"accion":"Listarsimple"},success: function(data){
		$("#ListarProductos").html(data);
		//$('#tablaProducto td:nth-child(3),#tablaProducto th:nth-child(3)').hide();
		//$('#tablaProducto td:nth-child(4),#tablaProducto th:nth-child(4)').hide();
		}
	});
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
        <p> Unidad Productiva:<b>  </b> <a  href="index.php" > << Volver a Vista de Unidad Productiva </a> </p>
        <p  style="clear:both; height:20px"> </p>
        <?php // include_once("./menu_up.php");?>
      </div>
      <div id="contenido">
        <div id="contenidoDatos">
          <table class="tablaSeparador" >
            <tr>
              <td style="text-align:left"><h4> Productos</h4></td>
              <td style="text-align:right"><a href="index_interno.php?accion=NuevoProducto" title="A&ntilde;adir un Familiar"> Añadir Producto</a></td>
            </tr>
          </table>
          <div id="ListarProductos"></div>
          <div id="Actulizar_Productos"></div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>