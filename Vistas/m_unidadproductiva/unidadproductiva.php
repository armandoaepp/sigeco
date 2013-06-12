<?php session_start(); if(!isset($_SESSION["login"]))  header("Location:../../login.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SIGECO: Unidad Productiva</title>
<link href="../css/contenedor.css" rel="stylesheet" type="text/css" />
<link href="../css/menu.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_tabla.css" rel="stylesheet" type="text/css" />
<!--Ui de Jquery -->
<link  type="text/css" href="../css/ui-lightness/jquery-ui-1.9.2.custom.css" rel="stylesheet">
<script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.23.custom.min.js"></script>
<!-- para validar el Formulario   -->
<link rel="stylesheet" href="../validar_frm/validationEngine.jquery.css" type="text/css"/>
<script src="../validar_frm/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8">	</script>
<script src="../validar_frm/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<!-- modificar las clase del calendario (STILOS CSS)  -->
<script src="../js/jquery.ui.datepicker-es.js"></script>
<link  type="text/css" href="../css/estilo_calendario.css" rel="stylesheet">
<!--Estilo FRM -->
<link href="../css/estilo_frmModal.css" rel="stylesheet" type="text/css" />
<!--jCombo CON JQUERY-->
<script type="text/javascript" src="../js/jquery.jCombo.min.js"></script>
<!--js funciones propias de la unidad productiva -->
<script type="text/javascript" src="../js/js_unidadProductiva.js"></script>

</head>
<style>
a {
	font-size: 14px;
	font-weight: bold
}
</style>
<body>
<div id="contenedor">
  <div id="superior">
    <div id="superiorIzquierda">
      <?php include_once("../superior_html.php");?>
    </div>
    <div id="superiorDerecha"> Usuario en Linea:
      <?php  echo $_SESSION["usuario"];?>
      &nbsp; | &nbsp; <a href="../cerrar_sesion.php">Cerrar Sesión</a> </div>
    <div class="clear"></div>
    <?php include_once("../menu.php");?>
  </div>
  <div id="cuerpo">
    <div id="cuerpoContenedor">
      <h4 style="text-align:center;">Unidades Productivas</h4>
      <div style="text-align:right ; padding-right:50px"><!--<a  id="LinkListar" href="#"   onclick="CargarUnidadProductiva();return false;">Listar</a> --> 
        <!--  <a  id="LinkListar" href="#"   onclick="CargarUnidadProductiva();return false;">Listar</a> --> 
        <a  id="LinkListar" href="#"   >Listar</a> <a  id="LinkNuevo" href="#" >Nuevo</a> </div>
      <div id="Datos">
        <?php 	
		 include_once("../cixfrm.php");
		 $frm = new CixFRM();
		 $frmBuscar=$frm->frmBuscar("Buscar por Apellidos Nombres");
		 echo $frmBuscar;
		?>
        <p class="clear"></p>
        <div id="ListarUndidaProductiva"> </div>
      </div>
      <div id="divFrmNuevo"> </div>
    </div>
  </div>
</div>
</body>
</html>