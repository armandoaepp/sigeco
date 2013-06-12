<?php session_start();if(!isset($_SESSION["login"]))  header("Location:../../login.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SIGECO - APESI:Acopio </title>
<!-- Utilidades Generales  -->
<script src="../js/jquery-1.8.3.min.js"></script>
<link href="../css/contenedor.css" rel="stylesheet" type="text/css" />
<link href="../css/menu.css" rel="stylesheet" type="text/css" />
<link href="../css/submenu.css"rel="stylesheet" type="text/css" />
<link href="../css/estilo_tabla.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_unidadproductiva_interno.css" rel="stylesheet" type="text/css" />
<!--UI de Jquery -->
<link  type="text/css" href="../css/ui-lightness/jquery-ui-1.9.2.custom.css" rel="stylesheet">
<script type="text/javascript" src="../js/jquery-ui-1.8.23.custom.min.js"></script>
<!--Calendario: Modificar el estilo calendario y convertir a es  -->
<script src="../js/jquery.ui.datepicker-es.js"></script>
<link href="../css/estilo_calendario.css" rel="stylesheet" type="text/css" />
<!-- Estilo FRM Normales-->
<link href="../css/estilo_formulario.css" rel="stylesheet" type="text/css" />
<!-- js para Acopio -->
<script  src="../js/js_acopio.js"></script>
<style>
.tabla td{text-align:center !important;}
#divbusqueda{ text-align:left !important}
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
        <p  style="clear:both; height:10px"> </p>
        <?php include_once("./submenu.php");?>
      </div>
      <div id="contenido">
        <div id="contenidoDatos">

      <div style="text-align:right ; padding-right:50px">
        <a  id="LinkListar" href="#"   >Listar</a> <a  id="LinkNuevo" href="#" >Nuevo</a> </div>
       <div id="Datos">
        <?php 	
		 include_once("../cixfrm.php");
		 $frm = new CixFRM();
		 $frmBuscar=$frm->frmBuscar("Buscar por Productor / NGA ");
		 echo $frmBuscar;
		?>
        <p style="clear:both;"></p>
        <div id="ListarAcopio"> </div>
      </div>
      <div id="divFrmNuevo"> 
     </div>
      <div id="NuevoAcopio" style="height:100%; margin-top:2px; border:#CCCCCC 1px solid;"></div>
      
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
