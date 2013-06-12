<?php  session_start();if(!isset($_SESSION["login"]))  header("Location:../../login.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>SIGECO-APESI: : Procesamiento</title>
<link href="../css/contenedor.css" rel="stylesheet" type="text/css" />
<link href="../css/menu.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_tabla.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
<link href="../css/estilo_unidadproductiva_interno.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_ListaSeparador.css" rel="stylesheet" type="text/css" />

<script> 
$(document).ready(function(){ 
	 $("#ModalProcesamiento div").hide();
	 	
	 $("#EditarProcesamiento").click( function(){ 
	  	$("#ModalProcesamiento div").show();
		 	$("#VistaProceso").hide();	
	 });
	  $("#Cancelar_proceso").click( function(){ 
	  	$("#ModalProcesamiento div").hide();
		 	$("#VistaProceso").show();	
	 });	
	 
});	
	
</script>
<style>
#cuerpoContenedor {
	margin: 8px;
	background: #FFFFFF;
	height: 100%;
	padding: 0px 0 10px 0;
}
</style>
</head>
<body>

<div id="contenedor">
  <div id="superior">
    <div id="superiorIzquierda">
      <?php include_once("../superior_html.php");?>
    </div>
    <div id="superiorDerecha">  <?php include_once("../usuario_linea.php"); ?>
    </div>
    <div class="clear"></div>
    <?php include_once("../menu.php");?>
  </div>
  <div id="cuerpo">
    <div id="cuerpoContenedor">
      <div style="background:#ebffe0;border-bottom: 1px solid #CCCCCC;">
        <p> Unidad Productiva:<b> <?php echo $_SESSION["Productor"];?> </b> <a  href="unidadproductiva.php" > << Volver a Vista de Unidad Productiva </a> </p>
        <p  style="clear:both; height:20px"> </p>
        <?php include_once("./menu_up.php");?>
      </div>
      <div id="contenido">
        <div id="contenidoDatos">
          <table class="tablaSeparador" >
            <tr>
              <td style="text-align:left"><h4> Procesamiento: Datos Generales </h4></td>
              <td style="text-align:right"><ul class="classEditar">
                  <li ><a id="EditarProcesamiento" href="#"> Editar </a></li>
                </ul></td>
            </tr>
          </table>
          <?php  
			  include_once "../proceso/Controlador_proceso.php"; 
			  include_once "../cixphp.php"; 
			  $cix=new CixPHP();   	
		  
				 // PARA SACAR LOS DATOS Y ACTULIZAR
				$idUnidadP=$_SESSION["UnidadProductivaId"];	 
				$rptamo=Buscar_proceso_xUnidadProductiva($idUnidadP); // LE VOY A ENVIAR ID UNIDAD PRODUCTIVA PARA PODER FILTRAR
				if(count($rptamo["cuerpo"])==1){
					$ProcesoId=$rptamo["cuerpo"][0]["ProcesoId"];
					//echo "ProcesoId ::: ".$ProcesoId;
					if($rptamo["cuerpo"][0]["ProcesoDespulpadora"]=="SI")
					$ProcesoDespulpadora="checked"; 				
					if($rptamo["cuerpo"][0]["ProcesoTanqueTina"]=="SI")
					$ProcesoTanqueTina="checked";
					if($rptamo["cuerpo"][0]["ProcesoCompostera"]=="SI")
					$ProcesoCompostera="checked";						
					$ProcesoCompostera_p=$rptamo["cuerpo"][0]["ProcesoCompostera"];
					$ProcesoTanqueTina_p=$rptamo["cuerpo"][0]["ProcesoTanqueTina"];
					$ProcesoDespulpadora_p=$rptamo["cuerpo"][0]["ProcesoDespulpadora"];	
					$ProcesoTiempoRecoleccion=$rptamo["cuerpo"][0]["ProcesoTiempoRecoleccion"];
					$ProcesoTiempoFermentacion=$rptamo["cuerpo"][0]["ProcesoTiempoFermentacion"];
					$ProcesoTipoFermentacion=$rptamo["cuerpo"][0]["ProcesoTipoFermentacion"];
					$ProcesoNumeroLavado=$rptamo["cuerpo"][0]["ProcesoNumeroLavado"];
					$ProcesoTiempoSecado=$rptamo["cuerpo"][0]["ProcesoTiempoSecado"];
					$ProcesoDescripcion=$rptamo["cuerpo"][0]["ProcesoDescripcion"];
					$TipoSeleccionId=$rptamo["cuerpo"][0]["TipoSeleccionId"];
					$TipoSecadoId=$rptamo["cuerpo"][0]["TipoSecadoId"];
					$ProcesoPozoInorganico_p=$rptamo["cuerpo"][0]["ProcesoPozoInorganico"];
					$ProcesoPozoMiel_p=$rptamo["cuerpo"][0]["ProcesoPozoMiel"];
					
					if($ProcesoTipoFermentacion=="Anaeróbica")$Anaeróbica="selected";
					if($ProcesoTipoFermentacion=="Anaeróbica") $Anaeróbica="selected";
					
					if($rptamo["cuerpo"][0]["ProcesoPozoInorganico"]=="SI")
					$ProcesoPozoInorganico="checked";	
					if($rptamo["cuerpo"][0]["ProcesoPozoMiel"]=="SI")
					$ProcesoPozoMiel="checked";	
					
					$TipoSecado=$rptamo["cuerpo"][0]["TipoSecado"];
					 $TipoSeleccion=$rptamo["cuerpo"][0]["TipoSeleccion"] ;
					
					$accionf="index_interno.php?accion=ActualizarProceso";				
				
				}else {			
				//echo "ProcesoId  else::: ".$ProcesoId;	
					$ProcesoId="";
					$ProcesoDespulpadora="";
					$ProcesoTanqueTina="";
					$ProcesoCompostera="";
					$ProcesoTiempoRecoleccion="00:00";
					$ProcesoTiempoFermentacion="";
					$ProcesoTipoFermentacion="";
					$ProcesoNumeroLavado="";
					$ProcesoTiempoSecado="";
					$ProcesoDescripcion="";
					$TipoSeleccionId="";
					$TipoSecadoId="";
					$ProcesoPozoInorganico="";
					$ProcesoPozoMiel="";	
					$accionf="index_interno.php?accion=RegistrarProceso";
					}
		   ?>
          <div id="ModalProcesamiento" title="Procesamiento" style="border:#CCCCCC 1px solid">
            <?php 				
					include_once "../proceso/Registrar_proceso.php";
					$accionf="";
					?>
          </div>
          <div id="VistaProceso" style="height:400px">
            <?php				     
					echo "Máquina Despulpadora    							 : ".$ProcesoDespulpadora_p. "<br />";
					echo "Tanque Tina    									 : ".$ProcesoTanqueTina_p. "<br />";
					echo " Compostera  										 : ".$ProcesoCompostera_p. "<br />";
					echo "Tiempo pasado entre Recolección y Procesamiento    : ".$ProcesoTiempoRecoleccion. "<br />";
					echo "Tiempo Fermentación   							 : ".$ProcesoTiempoFermentacion. "<br />";
					echo "Tipo Fermentación   								 : ".$ProcesoTipoFermentacion. "<br />";
					echo "Número Lavado    									 : ".$ProcesoNumeroLavado. "<br />";
					echo "Tiempo Secado   									 : ".$ProcesoTiempoSecado. "<br />";					
					echo "Tipo Selección  									 : ".$TipoSeleccion. "<br />";
					echo "Tipo Secado   									 : ".$TipoSecado. "<br />";
					echo "Pozo Inorganico    								 : ".$ProcesoPozoInorganico_p. "<br />";
					echo "Pozo Miel    										 : ".$ProcesoPozoMiel_p. "<br />";		 
                    echo "Descripción   									 : ".$ProcesoDescripcion. "<br />";                     
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#menu_interno #navi li").removeClass("selected");
	    $("#menu_interno #navi #procesamiento").addClass("selected");
	 });
</script>
</body>
</html>