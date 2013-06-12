<?php  session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<title>APESI:<?php echo $titulo; ?></title>
<link href="../css/contenedor.css" rel="stylesheet" type="text/css" />
<link href="../css/menu.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_tabla.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="../js/jquery-1.8.3.js"></script>
<link href="../css/estilo_unidadproductiva_interno.css" rel="stylesheet" type="text/css" />
-->
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

</head>
<style>
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
    <div id="superiorDerecha"> Usuario En  Linea : Webmaster Apesi :) </div>
    <div class="clear"></div>
    <?php include_once("../menu.php");?>
  </div>
  <div id="cuerpo">
    <div id="cuerpoContenedor">
      <div style="background:#ebffe0;border-bottom: 1px solid #CCCCCC;">
        <p> Unidad Productiva:<b> <?php echo $Productor ?> </b> <a  href="index.php" > << Volver a Vista de Unidad Productiva </a> </p>
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
          
          <!--Nuevo Registro: div dond vamos a insertar el frm modal y luego lo abriremos con ajax-->
          <div id="ModalAnalisisQuimico" title="Nuevo Analisis">
            <p>
              <?php  
             //$accionf="index_interno.php?accion=RegistrarAnalisisQuimico";
                      $accionf="";
                    include_once "../analisisquimico/Registrar_analisisquimico.php";
                     $accionf="";
            ?>
            </p>
          </div>
          <!--ActualizarAnalisis: div dond vamos a insertar el frm modal y luego lo abriremos con ajax-->
          <div id="ActualizarAnalisis"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#menu_interno #navi li").removeClass("selected");
	    $("#menu_interno #navi #suelo").addClass("selected");
	 });
</script>
</body>
</html>