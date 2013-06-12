<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>*** APESI ***</title>
<link href="css/contenedor.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="contenedor">
  <div id="superior">
    <div id="superiorIzquierda">
      <?php include_once("superior_html.php");?>
    </div>
    <div id="superiorDerecha">
     Usuario En  Linea : Webmaster Apesi :) 
    </div>
    <div class="clear"></div>
    <?php include_once("menu.php");?>
  </div>
  <div id="cuerpo">
    <div id="cuerpoContenedor">
   	
    <?php @include_once($contenido);?>
     </div>
  </div>
</div>
</body>
</html>