<?php 
session_start();
/*
if(!isset($_SESSION["login"]))
	{
	echo "Debe De Iniciar SESION ";
		echo "<META HTTP-EQUIV = REFRESH CONTENT='2 ;URL=../TipodeUsuario.php'>";
	}
	else
	{
		
	$user=$_SESSION["usuario"];	
	*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>APESI:<?php echo $titulo; ?></title>
<script src="../js/jquery-1.8.3.js"></script>
<link href="../css/contenedor.css" rel="stylesheet" type="text/css" />
<link href="../css/menu.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_tabla.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_unidadproductiva_interno.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="contenedor">
  <div id="superior">
    <div id="superiorIzquierda">
      <?php include_once("../superior_html.php");?>
    </div>
    <div id="superiorDerecha">   <?php include_once("../usuario_linea.php"); // echo $_SESSION["usuario"];?>
    </div>
    <div class="clear"></div>
    <?php include_once("../menu.php");?>
  </div>
  <div id="cuerpo">
    <div id="cuerpoContenedor">
      <div style="background:#ebffe0;border-bottom: 1px solid #CCCCCC;">
       <!-- <p> Unidad Productiva:<b>
          <?php //if(isset($_SESSION["Productor"])){ echo $_SESSION["Productor"];}    //$Productor ; ?>
          </b> <a  href="index.php" > << Volver a Vista de Unidad Productiva </a> </p>-->
        <p  style="clear:both; height:20px"> </p>
        <?php include_once("./menu_up.php");?>
      </div>
      <div id="contenido">
        <div id="contenidoDatos">
          <table class="tablaSeparador" >
            <tr>
              <td style="text-align:left"><h3><?php echo $titulo; ?> </h3></td>
              <td style="text-align:right"><a href="#" title="A&ntilde;adir un Familiar"> Editar</a></td>
            </tr>
          </table>
          <?php @include_once($contenido);?>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php 
//}
?>