<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Apesi-<?php echo $titulo;?> </title>
<link href="../css/contenedor.css" rel="stylesheet" type="text/css" />
<link href="../css/menu.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_tabla.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_frms.css" rel="stylesheet" type="text/css" />
</head>

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
  <?php include_once("../m_mantenimiento/menu_mantenimiento.php");?>
</div>
<div id="cuerpo">
  <div id="cuerpoContenedor">
    <h4 style="text-align:center;"><?php echo $titulo;?></h4>
    <div style="text-align:right ; padding-right:50px"> <a href="?accion=Listar">Listar</a> <a href="?accion=Nuevo">Nuevo</a> </div>
    <?php @include_once($contenido);?>
  </div>
</div>
</body>
</html>