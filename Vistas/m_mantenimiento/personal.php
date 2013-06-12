<?php  session_start();if(!isset($_SESSION["login"]))  header("Location:../../login.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>APESI:Pesonal</title>
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
<!-- Estilo para los Iconos de Exportar-->
<link href="../css/estilo_IconExportar.css" rel="stylesheet" type="text/css" />
<script src="../js/js_personal.js"></script>

</head>
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
              <td style="text-align:left; width:120px;"><h4> Lista de Personal </h4></td>
              <td style="text-align:left; "></td>
              <td align="right"><ul class="exportar">
                  <li><a href="../personal/index_ajax.php?accion=Exportar&tipo=excel" title="Exportar Excel"><img src="../images/icon_excel.png" alt="Exportar Excel" /></a> </li>
                  <!--<li><a href="../personal/index_ajax.php?accion=Exportar&tipo=pdf" title="Exportar PDF"><img src="../images/icon_pdf.png"  alt="Exportar Pdf" /></a> </li>-->
                  <li><a href="../personal/index_ajax.php?accion=Exportar&tipo=html" target="_blank" title="Exportar Html"> <img src="../images/icon_html.png" alt="Exportar Hmtl" /> </a> </li>
                  <li><a href="../personal/index_ajax.php?accion=Exportar&tipo=word" title="Exportar Word"> <img src="../images/icon_word.png" alt="Exportar Word" /> </a> </li>
                </ul></td>
              <td  align="right" width="150"><a href="#"  onclick="ModalPersonal(); return false;" title="Añadir Nuevo Personal"> Añadir  Personal</a></td>
            </tr>
          </table>
          <?php 	
				 include_once("../cixfrm.php");
				 $frm = new CixFRM();
				 $frmBuscar=$frm->frmBuscar("Buscar por DNI / Apellidos / Nombres");
				 echo $frmBuscar;
				?>
          <div id="ListarPersonal"></div>
          <div id="Modal_Personal"></div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>