<?php session_start();if(!isset($_SESSION["login"]))  header("Location:../../login.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SIGECO - APESI: Detalle de Acopio</title>
<!-- Utilidades Generales  -->
<script src="../js/jquery-1.8.3.min.js"></script>
<link href="../css/contenedor.css" rel="stylesheet" type="text/css" />
<link href="../css/menu.css" rel="stylesheet" type="text/css" />
<link href="../css/submenu.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_tabla.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_unidadproductiva_interno.css" rel="stylesheet" type="text/css" />
<!--UI de Jquery -->
<link  type="text/css" href="../css/ui-lightness/jquery-ui-1.9.2.custom.css" rel="stylesheet">
<script type="text/javascript" src="../js/jquery-ui-1.8.23.custom.min.js"></script>
<!--Calendario: Modificar el estilo calendario y convertir a es  -->
<script src="../js/jquery.ui.datepicker-es.js"></script>
<link href="../css/estilo_calendario.css" rel="stylesheet" type="text/css" />
<!-- Estilo FRM Normales-->
<link href="../css/estilo_frms.css" rel="stylesheet" type="text/css" />
<!--Estilo para la Lista Separadar-->
<link href="../css/estilo_Li_Separador.css" rel="stylesheet" type="text/css" />


<style>
.ocultar {
	display: none;
}
#frmAcopio {
	text-align: center !important;
	margin-bottom: 5px;
}
#divActualizar_acopio {
	position: relative;
}
#contenedorFrms {
	margin: 0 auto;
	height: 100%;
}
#frmHumedad {
	float: left;
}
#frmRendimiento {
	float: right;
}
#frmHumedad, #frmRendimiento {
	width: 49%;
	height: 100%;
}
.link {
	text-align: right;
	padding-right: 5px 10px 0 10px;
	border-bottom: 1px solid #666666;
	font-weight: bold;
	color: #006600;
}
</style>
</head>
<body>
<?php 
		
	if(isset($_GET["id"])){
		if(!is_numeric($_GET["id"])) $_GET["id"]=0;
		$_SESSION['idAcopio']=$_GET["id"];// registrar el id de Acopio
		include_once("../acopio/Controlador_acopio.php");
		$rptamo=CBuscar_acopio($_GET["id"]);
		$AcopioId=$rptamo["cuerpo"][0]["AcopioId"];
		$AcopioFecha=$rptamo["cuerpo"][0]["AcopioFecha"];
		$AcopioNSacos=$rptamo["cuerpo"][0]["AcopioNSacos"];
		$AcopioPesoBruto=$rptamo["cuerpo"][0]["AcopioPesoBruto"];
		$AcopioHumedadEntregada=$rptamo["cuerpo"][0]["AcopioHumedadEntregada"];
		$AcopioHumedadRequerida=$rptamo["cuerpo"][0]["AcopioHumedadRequerida"];
		$AcopioPrecioQuintal=$rptamo["cuerpo"][0]["AcopioPrecioQuintal"];
		$AcopioTara=$rptamo["cuerpo"][0]["AcopioTara"];
		$BaseId=$rptamo["cuerpo"][0]["BaseId"];
		$TipoCertificacionId=$rptamo["cuerpo"][0]["TipoCertificacionId"];
		$AcopioQuintalesNetos=$rptamo["cuerpo"][0]["AcopioQuintalesNetos"];
		$AcopioStatus=$rptamo["cuerpo"][0]["AcopioStatus"];
		$AcopioEstado=$rptamo["cuerpo"][0]["AcopioEstado"];
		$UnidadProductivaId=$rptamo["cuerpo"][0]["UnidadProductivaId"];
		$GuiaAcopioId=$rptamo["cuerpo"][0]["GuiaAcopioId"];
		
		$dataProductor=CProductor_UnidadProductiva_Acopio($UnidadProductivaId);
		$ProductorId=$dataProductor["cuerpo"][0]["ProductorId"];
		$productorNombre=$dataProductor["cuerpo"][0]["Productor"];
		// FRM HUMEDAD
		include_once("../humedad/Controlador_humedad.php");
		$dataHumedad=CBuscar_Acopio_humedad($AcopioId);
		if(count($dataHumedad["cuerpo"])>0){
		 $HumedadId=$dataHumedad["cuerpo"][0]["HumedadId"];
		 $HumedadLibreTara=$dataHumedad["cuerpo"][0]["HumedadLibreTara"];
		 $HumedadDescuentoHumedad=$dataHumedad["cuerpo"][0]["HumedadDescuentoHumedad"];
		 $HumedadKgNetos=$dataHumedad["cuerpo"][0]["HumedadKgNetos"];
		 $HumedadImporteBruto=$dataHumedad["cuerpo"][0]["HumedadImporteBruto"];
		 $HumedadImporteDescuento=$dataHumedad["cuerpo"][0]["HumedadImporteDescuento"];
		 $HumedadImporteTotal=$dataHumedad["cuerpo"][0]["HumedadImporteTotal"];
		 //$AcopioId=$dataHumedad["cuerpo"][0]["AcopioId"];
		// $frmModalidad="frmActualizar_humedad";
		 $Modalidad="Cálculo de Humedad";
		}else{
			// $frmModalidad="frmRegistrar_humedad";
			 //$Modalidad="Nuevo";
			 $HumedadId="";
			 $HumedadLibreTara="";
			 $HumedadDescuentoHumedad="";
			 $HumedadKgNetos="";
			 $HumedadImporteBruto="";
			 $HumedadImporteDescuento="";
			 $HumedadImporteTotal="";
		}
		
	}
?>
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
      <div style="background:#ebffe0;border-bottom: 1px solid #CCCCCC;"> Detalle de Acopio - Productor :<b> <?php echo $productorNombre;?></b> <a href="acopio.php" title="Acopio"> << Volver a Acopio</a>
        <p  style="clear:both; height:10px"> </p>
        <?php include_once("./submenu.php");?>
      </div>
      <div id="contenido">
        <div id="contenidoDatos">
          <div id="frmAcopio" class="margenes">
            <div class="link" > <a id="linkEditar" href="#" >Editar</a> <a id="linkCancelar" href="#"  class="ocultar" >Cancelar</a> </div>
            <?php $accionf="";
			include_once("../acopio/Actualizar_acopio.php");?>
          </div>
          <div id="contenedorFrms" class="margenes">
            <div id="frmHumedad">
              <div class="link" > <a id="linkEditarHumedad" href="#" >Editar</a> <a id="linkCancelarHumedad" href="#"  class="ocultar" >Cancelar</a> </div>
              <?php include_once("../humedad/Registrar_humedad.php");?>
            </div>
            <div id="frmRendimiento">
              <div class="link" > <a id="linkEditarRendimiento" href="#" >Editar</a> <a id="linkCancelarRendimiento" href="#"  class="ocultar" >Cancelar</a> </div>
              <div id="Rendimiento">
                <?php //include_once("../rendimiento/Registrar_rendimiento.php");?>
              </div>
            </div>
            <p class="clear"></p>
          </div>
          <div id="Trazabalidad">
            <ul class="listaLink">
              <li class="liTitulo"> Trazabilidad </li>
              <li class="liEditar" ><a id="linkTrazabilidadEdtitar" href="#" >Editar</a></li>
              <li  class="liCancelar" > <a id="linkTrazabilidadCancelar" href="#"  >Cancelar</a></li>
            </ul>
            <div id="MTrazabilidad"> </div>
          </div>
          <div id="CertificadoCalidad">
            <ul class="listaLink">
              <li class="liTitulo"> Certificado de Calidad </li>
              <li class="liEditar" ><a id="linkCertificadoCalidadEdtitar" href="#" >Apreciación</a></li>
              <li class="liCancelar" ><a id="linkCertificadoCalidadCancelar" href="#" >Cancelar</a></li>
            </ul>
            <div id="DatosCertificadoCalidad"> </div>
          </div>
          <div id="Taceo">
            <ul class="listaLink">
              <li class="liTitulo"> Taceo </li>
              <li class="liEditar" ><a id="linkTaceoEdtitar" href="#" >Tacéo</a></li>
              <li class="liCancelar"><a id="linkTaceoCancelar" href="#" >Cancelar</a></li>
            </ul>
            <div id="DatosTaceo"> </div>
          </div>
          <div id="ParamentrosCalidad">
            <ul class="listaLink">
              <li class="liTitulo"> Parámetros de Calidad </li>
              <li class="liEditar" ><a id="linkParametroEdtitar" href="#" >Parámetros</a></li>
              <li class="liCancelar"><a id="linkParametroCancelar" href="#" >Cancelar</a></li>
            </ul>
            <div id="DatosParametro"> </div>
          </div>
          <div id="EstadoAcopio">
            <ul class="listaLink">
              <li class="liTitulo"> Estado De Acopio </li>
            </ul>
            <div id="DatosEstadoAcopio"> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- js para Acopio -->
<script  src="../js/js_acopio_detalle.js"></script>
</body>
</html>
