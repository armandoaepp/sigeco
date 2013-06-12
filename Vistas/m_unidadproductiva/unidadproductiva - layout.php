<?php 
session_start();/*
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
</head>
<style>
#cuerpoContenedor {
	margin: 8px;
	background: #FFFFFF;
	height: 100%;
	padding: 0px 0 10px 0;
}
#contenido {
	padding: 5px;
}
#contenidoDatos {
	padding: 5px;
}
#familiar {
	margin-top: 2px;
	text-align: center;
}
#ContenidoFamiliar {
	margin-top: 3px;
	padding: 2px;
	width: 98%;
}
.tablaSeparador {
 *border-collapse: collapse; /* IE7 and lower */
	border-spacing: 0;
	width: 99%;
}
.tablaSeparador tr td {
	border-bottom: 1px solid #999999;
}
h4{ color:#006633;}
</style>

<body>
<?php  
include_once "./Controlador_unidadproductiva.php";

	// Determina si (id) una variable está definida y no es NULL.
	if(isset($_GET["id"])){
		//session_start();
		$data = CDatosGenerales_unidadproductiva($_GET["id"]);
		$ProductorId = $data["cuerpo"][0]["ProductorId"];
        $UnidadProductivaId = $data["cuerpo"][0]["UnidadProductivaId"];
		$Productor = $data["cuerpo"][0]["Productor"];
        $Ubicacion = $data["cuerpo"][0]["Ubicacion"];
        $Telefonos = $data["cuerpo"][0]["Telefonos"];
        $ProductorEmail = $data["cuerpo"][0]["ProductorEmail"];		
        $AreaTotal = $data["cuerpo"][0]["Area Total"];
		
       	// iniciar una sesion para almacenar la Unidad Productiva
		//session_name('unidadProductiva');
		//session_start();
		$_SESSION["unidadProductiva"]= true;// para verificar que la session se halla iniciado
		$_SESSION["ProductorId"]= $ProductorId;
		$_SESSION["UnidadProductivaId"]= $UnidadProductivaId;
		
	}
		//verificamos si la variable de sesion (iniciarUP) esta iniciada 
	if($_SESSION["unidadProductiva"]==true){
		$data = CDatosGenerales_unidadproductiva($_SESSION["UnidadProductivaId"]);
		$ProductorId = $data["cuerpo"][0]["ProductorId"];
        $UnidadProductivaId = $data["cuerpo"][0]["UnidadProductivaId"];
		$Productor = $data["cuerpo"][0]["Productor"];
        $Ubicacion = $data["cuerpo"][0]["Ubicacion"];
        $Telefonos = $data["cuerpo"][0]["Telefonos"];
        $ProductorEmail = $data["cuerpo"][0]["ProductorEmail"];
        $AreaTotal = $data["cuerpo"][0]["Area Total"];
	}
       
	  
	 ?>
<div id="contenedor">
  <div id="superior">
    <div id="superiorIzquierda">
      <?php include_once("../superior_html.php");?>
    </div>
    <div id="superiorDerecha"> Usuario en Linea:
      <?php  echo $user ;?>
    </div>
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
              <td style="text-align:left"><h4> </h4></td>
              <td style="text-align:right"><a href="#" title="A&ntilde;adir un Familiar"> Editar</a></td>
            </tr>
          </table>
          <p><i> Ubicacion:</i> <?php echo $Ubicacion ?></p>
          <p><i> Telefonos:</i> <?php echo $Telefonos ?></p>
          <p><i> Email:</i> <?php echo $ProductorEmail ?></p>
          <p><i> Area Total:</i> <?php echo $AreaTotal ?></p>
        </div>
        <div id="familiar">
          <table class="tablaSeparador" >
            <tr>
              <td style="text-align:left"><h4> Mienbros de La Familia del Productos </h4></td>
              <td style="text-align:right"><a href="#" title="A&ntilde;adir un Familiar"> A&ntilde;adir</a></td>
            </tr>
          </table>
          <div id="ContenidoFamiliar">
            <?php
		  
		  		include_once "../familiar/Controlador_familiar.php"; 
				include_once "../cixphp.php"; 
				$cix=new CixPHP();				 
				$datafamiliar=CListar_familiar_productor($ProductorId);
				$Listar_familiar=$cix->ImprimeTable("tablazebra",$datafamiliar,"?","?");	
				
				 echo $Listar_familiar;  
		  ?>
          </div>
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