<?php  session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>APESI:<?php echo $titulo; ?></title>
<link href="../css/contenedor.css" rel="stylesheet" type="text/css" />
<link href="../css/menu.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_tabla.css" rel="stylesheet" type="text/css" />
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
<?php  
include_once "./Controlador_unidadproductiva.php";

	 ?>

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
     <p> Unidad Productiva:<b> <?php echo $Productor ?>  </b>
     <a  href="index.php" >  << Volver a Vista de Unidad Productiva </a>
     
     </p>
        <p  style="clear:both; height:20px"> </p>
        <?php include_once("./menu_up.php");?>
      </div>
     
      <div id="datosGenerales">
        
      </div>
      <div id="certificacion">
      
      </div>
      
    </div>
  </div>
</div>
</body>
</html>