<?php  session_start();
if(!isset($_SESSION["login"]))  header("Location:../../login.php");
 ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>APESI: Detalle de Parcela</title>
<link href="../css/contenedor.css" rel="stylesheet" type="text/css" />
<link href="../css/menu.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_tabla.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_unidadproductiva_interno.css" rel="stylesheet" type="text/css" />
<!--Ui de Jquery -->
<link  type="text/css" href="../css/ui-lightness/jquery-ui-1.9.2.custom.css" rel="stylesheet">
<script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.23.custom.min.js"></script>
<!--modificar el estilo de los Jdialogos y calendario -->
<script src="../js/jquery.ui.datepicker-es.js"></script>
<link href="../css/estilo_calendario.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_frmModal.css" rel="stylesheet" type="text/css" />
<!-- para validar el Formulario   -->
<link rel="stylesheet" href="../validar_frm/validationEngine.jquery.css" type="text/css"/>
<script src="../validar_frm/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8">	</script>
<script src="../validar_frm/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
$(document).ready(function() {	
	CargarCertificacacion();
	CargarProductosPrincipales();
	CargarCultivosAsociados();
	CargarGeoreferencia();	
	$("#Modal_Certificacion").dialog({
		autoOpen: false,
		title:"Certificacion ",
		width: 420,
		height: 350,
		modal: true 
	});	
	$("#Modal_ProductoPrincipal").dialog({
			autoOpen: false,
			title:"Cultivos Principales",
			width: 480,
			height: 330,
			modal: true 
		});			
	$("#Modal_CultivoAsociado").dialog({
		autoOpen: false,
		title:"Cultivos Asociado",
		width: 400,
		height: 190,
		modal: true 
	});		
	$("#Modal_Georeferencia").dialog({
		autoOpen: false,
		title:"Geo Referencia",
		width: 420,
		height: 250,
		modal: true 
	});	
	
	// Control Fito Sanitario 	
	$.fx.speeds._default = 1000;	
	$( "#MostrarDetalleControl" ).dialog({
				autoOpen: false,
				title:"Detalle de Control Fitosanitario",
				width: 400,
				height: 150,
				show: "blind",
				//hide: "explode"
	});		
				
});
	
// start certificacion 	
function CargarCertificacacion(){
	$.ajax({url:"../certificacion/index_ajax.php",data:{"accion":"Listar"},success: function(data){$("#ListarCertificacacion").html(data);
		$('#tablaCertificacion td:nth-child(3),#tablaCertificacion th:nth-child(3)').hide(); //Ocultar Idparcela
		}
	});
}
function EliminarCertificacion(id){
	var msg = confirm("Desea Eliminar el Registro?")
	if ( msg ) {
		$.ajax({
			url: '../certificacion/index_ajax.php',
			type: "GET",
			//type: "POST",
			data:{ "accion":"Eliminar","id":id},
			success: function(datos){
			alert(datos);
			CargarCertificacacion();				
			}
		});
	}
	return false;
}

function ModalCertificacion(id){			
		$.ajaxSetup({async:false});
		$.post("../certificacion/index_ajax.php",{"accion":"OpenModal","id":id},
		function(data) {$("#Modal_Certificacion").html(data);
			TextCalendario("CertificacionFechaEmision_");
			TextCalendario("CertificacionFechaVenci_");		
		});	
		$("#Modal_Certificacion").dialog("open");     
}
function RegistrarCertificacion(){
	var metodo;
	$("#frmRegistrar_certificacion").submit(function(){		
		metodo="&accion=Registrar";		
			$.ajax({
				url: '../certificacion/index_ajax.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(datos){				
					alert(datos);								
					$("#Modal_Certificacion").dialog("close" );
					CargarCertificacacion();	
				}
			});
			return false;// para que no recarge toda la pagina
		 });	
	
	}
function ActulizarCertificacion(){
	var metodo;
	$("#frmActualizar_certificacion").submit(function(){		
		metodo="&accion=Actualizar";
			$.ajax({
				url: '../certificacion/index_ajax.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(datos){				
					alert(datos);								
					$("#Modal_Certificacion").dialog("close" );
					CargarCertificacacion();	
				}
			});
			return false;// para que no recarge toda la pagina
	});	
}

// start productos principales

function CargarProductosPrincipales(){
	$.ajax({url:"../parceladetalle/index_ajax.php",data:{"accion":"Listar"},success: function(data){$("#ListarProductosPrincipales").html(data);
		$('#tablaProdcutosPrincipales td:nth-child(3),#tablaProdcutosPrincipales th:nth-child(3)').hide(); //Ocultar Idparcela
		}
	});
}

function ModalProductosPrincipales(id){			
		$.ajaxSetup({async:false});
		$.post("../parceladetalle/index_ajax.php",{"accion":"OpenModal","id":id},
		function(data) {$("#Modal_ProductoPrincipal").html(data);
			TextCalendario("ParcelaDetalleFechaSiembra_");
			//TextCalendario("CertificacionFechaVenci_");		
		});	
		$("#Modal_ProductoPrincipal").dialog("open");     
}
function RegistrarProductosPrincipales(){
	var metodo;
	$("#frmRegistrar_parceladetalle").submit(function(){		
		metodo="&accion=Registrar";		
		$.ajax({
			url: '../parceladetalle/index_ajax.php',
			type: "POST",
			data:$(this).serialize()+metodo,
			success: function(datos){
				//alert(datos);
				if(datos=="Ok"){
					alert("Datos Registrados Correctamente");
					$("#Modal_ProductoPrincipal").dialog("close" );
					CargarProductosPrincipales();
					
				}else{
				alert(datos);
					}				
												
					
			}
		});
		return false;// para que no recarge toda la pagina
	});	
}
function ActulizarProductosPrincipales(){
	var metodo;
	$("#frmActualizar_parceladetalle").submit(function(){		
		metodo="&accion=Actualizar";
			$.ajax({
				url: '../parceladetalle/index_ajax.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(datos){				
					//alert(datos);
					if(datos=="Ok"){
						alert("Registro Actualizado Correctamente Correctamente");						
						$("#Modal_ProductoPrincipal").dialog("close" );
						CargarProductosPrincipales();	
					}else{
						alert(datos);
					}	
				}
			});
			return false;// para que no recarge toda la pagina
	});	
}
function EliminarProductoPrincipal(id){
	var msg = confirm("Desea Eliminar el Registro?")
	if ( msg ) {
		$.ajax({
			url: '../parceladetalle/index_ajax.php',
			type: "GET",
			//type: "POST",
			data:{ "accion":"Eliminar","id":id},
			success: function(datos){
			alert(datos);
			CargarProductosPrincipales();				
			}
		});
	}
	return false;
}
// start cultivo asociado 

function CargarCultivosAsociados(){
	$.ajax({url:"../cultivoasociado/index_ajax.php",data:{"accion":"Listar"},success: function(data){$("#ListarCultivosAsociados").html(data);
		$('#tablaCultivoAsociado td:nth-child(3),#tablaCultivoAsociado th:nth-child(3)').hide(); //Ocultar Idparcela
		}
	});
}

function ModalCultivoAsociado(id){			
		$.ajaxSetup({async:false});
		$.post("../cultivoasociado/index_ajax.php",{"accion":"OpenModal","id":id},
		function(data) {$("#Modal_CultivoAsociado").html(data);
				//TextCalendario("CertificacionFechaVenci_");		
		});	
		$("#Modal_CultivoAsociado").dialog("open");     
}
function RegistrarCultivoAsociado(){
	var metodo;
	$("#frmRegistrar_cultivoasociado").submit(function(){		
		metodo="&accion=Registrar";		
		$.ajax({
			url: '../cultivoasociado/index_ajax.php',
			type: "POST",
			data:$(this).serialize()+metodo,
			success: function(datos){				
				alert(datos);								
				$("#Modal_CultivoAsociado").dialog("close" );
				CargarCultivosAsociados();	
			}
		});
		return false;// para que no recarge toda la pagina
	});	
}
function ActualizarCultivoAsociado(){
	var metodo;
	$("#frmActualizar_cultivoasociado").submit(function(){		
		metodo="&accion=Actualizar";		
		$.ajax({
			url: '../cultivoasociado/index_ajax.php',
			type: "POST",
			data:$(this).serialize()+metodo,
			success: function(datos){				
				alert(datos);								
				$("#Modal_CultivoAsociado").dialog("close" );
				CargarCultivosAsociados();	
			}
		});
		return false;// para que no recarge toda la pagina
	});	
}
function EliminarCultivoAsociado(id){
	var msg = confirm("Desea Eliminar el Registro?")
	if ( msg ) {
		$.ajax({
			url: '../cultivoasociado/index_ajax.php',
			type: "GET",
			//type: "POST",
			data:{ "accion":"Eliminar","id":id},
			success: function(datos){
			alert(datos);
			CargarCultivosAsociados();				
			}
		});
	}
	return false;
}
 //=:=_=:=
// Start Georeferencia 
 
function CargarGeoreferencia(){
	$.ajax({url:"../georeferencia/index_ajax.php",data:{"accion":"Listar"},success: function(data){$("#ListarGeoreferencia").html(data);
		
		}
	});
}
function ModalGeoreferencia(id){		
		$.ajaxSetup({async:false});		
		$.post("../georeferencia/index_ajax.php",{"accion":"OpenModal","id":id},
		//$.post("../georeferencia/Actualizar_georeferencia.php",{id:id},
		function(data) {$("#Modal_Georeferencia").html(data);});	
		$("#Modal_Georeferencia").dialog("open");		   
}
function ActualizarGeoreferencia(){
	var metodo;
	$("#frmActualizar_georeferencia").submit(function(){		
		metodo="&accion=Actualizar";
			$.ajax({
				url: '../georeferencia/index_ajax.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(rptadatos){				
					alert(rptadatos);								
					$( "#Modal_Georeferencia").dialog( "close" );
					CargarGeoreferencia();	
				}
			});
			return false;// para que no recarge toda la pagina
		 });	
	
	}	
	
//=:=_=:=
// Control Fitosanitario 
function RegistrarControlFitosanitario(){
	var metodo;
	$("#frmRegistrar_controlfitosanitario").submit(function(){		
		metodo="&accion=Registrar";		
			$.ajax({
				url: '../controlfitosanitario/index_ajax.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(datos){				
					alert(datos);								
					$("#RegistrarControlFitosanotario").dialog("close" );
					CargarTablaDetalleLaboresCulturales();	
				}
			});
			return false;// para que no recarge toda la pagina
		 });	
}
//=:=_=:=
//generales
function Cancelar(contenedor, frmModal){
	$("#"+contenedor).dialog("close");
	$("#"+frmModal)[0].reset();
}	

function TextCalendario(idtext){
	$("#"+idtext).datepicker({
		showOn: "button",
		buttonImage: "../images/calendar.gif",
		buttonImageOnly: true,
		yearRange: "-80:+5",		
		changeMonth: true,
		changeYear: true,
		dateFormat: "dd/mm/yy",				
	}); 
}
// control fito Sanitario
function MotrarDetalleFitosanitario(id){			
	$.ajaxSetup({async:false});
	$.post("../controlfitosanitario/index_ajax.php",{"accion":"ListarDetalleControl","id":id},
	function(data) {$("#MostrarDetalleControl").html(data);		
	});	
	$("#MostrarDetalleControl").dialog("open"); 
	    
}

</script>
<script src="../js/js_LaborCultural.js" type="text/javascript" charset="utf-8"></script>
<style>
#cuerpoContenedor {
	margin: 8px;
	background: #FFFFFF;
	height: 100%;
	padding: 0px 0 10px 0;
}
ul {
	margin: 0;
	padding: 0;
}
.classAdd {
	list-style-image: url(../images/add.gif);
	width: 40px;
	float: right;
}
.classEditar {
	list-style-image: url(../images/edit.gif);
	width: 40px;
	float: right;
}
li a {
	text-decoration: underline;
}
li a:link, a:visited, a:active {
	color: #006600;
}
li a:hover {
	color: #00CC33;
}
.MargenSeparar {
	margin-top: 5px;
}
h3 {
	text-align: center;
}
.border {
	border: #999999 solid 1px;
}

/*para cualquier typo*/
#TipoLaborCultural{
	 width:95%;
	}
#LaboresCulturales{	 
		text-align:center;	
		margin:0 auto 0 auto; 
}
 #LaboresCulturales div{
	 text-align:center;	
	margin:0 auto 0 auto; 
	width:450px;		
}

</style>
</head>
<body>
<?php  
  include_once "../parcela/Controlador_parcela.php"; 
  include_once "../cultivoasociado/Controlador_cultivoasociado.php"; 
  include_once "../tipolabor/Controlador_tipolabor.php"; 
  include_once "../labor/Controlador_labor.php"; 
  include_once "../certificacion/Controlador_certificacion.php"; 
    include_once "../georeferencia/Controlador_georeferencia.php"; 
  include_once "../cixphp.php"; 
  $cix=new CixPHP();
  
	$idparacela=$_SESSION["ParcelaId"];//$_GET["idP"];	
	$idProductor=$_SESSION["ProductorId"];
	$idUnidadP=$_SESSION["UnidadProductivaId"];	 
	// para darle la Accion al Formulario de labores para poder Regisrar para el Jquery js_laboresculturaes
   // $AccionLabor="RegistrarLabor";
	 ?>
<div id="contenedor">
  <div id="superior">
    <div id="superiorIzquierda">
      <?php include_once("../superior_html.php");?>
    </div>
    <div id="superiorDerecha"> Usuario En  Linea :
      <?php  echo $_SESSION["usuario"];?>
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
              <td style="text-align:left"><h4> Parcelas : Datos Generales </h4></td>
              <td style="text-align:right"><a href="index_interno.php?accion=Mactualizar_par" title=""> Editar</a></td>
            </tr>
          </table>
          <!--Start datos generales de parcela-->
          <div id="parcela">
            <div style="padding:10px;">
              <?php 
              $dataParcela=CListar_datosGenerales_parcela($idparacela);		 
                 echo "<strong>Parcela    :</strong> ".$dataParcela["cuerpo"][0][0] . "<br />";
               echo "<strong>Areá Total :</strong> ".$dataParcela["cuerpo"][0][1] ." ha <br />";
               echo "<strong>Base       :</strong> ".$dataParcela["cuerpo"][0][2] . "<br />";
               echo "<strong>Ubicación  :</strong> ".$dataParcela["cuerpo"][0][3] . "<br />";
              ?>
            </div>
          </div>
          <!--Start Certificaciones-->
          <table class="tablaSeparador"  >
            <tr>
              <td style="text-align:left"><h4>Certificación </h4></td>
              <td style="text-align:right"><ul class="classAdd">
                  <li class='productosPrincipales'><a id="NuevoCertificacion" href="javascript:ModalCertificacion()"> Añadir</a></li>
                </ul></td>
            </tr>
          </table>
          <div id="ListarCertificacacion" class="MargenSeparar"> </div>
          <div id="Modal_Certificacion"></div>
          <!-- Start Cultivos Principales-->
          <table class="tablaSeparador" >
            <tr>
              <td style="text-align:left"><h4> Cultivos Principales </h4></td>
              <td style="text-align:right"><ul class="classAdd">
                  <li class='productosPrincipales'><a id="NuevoProductoPrincipal" onclick="ModalProductosPrincipales();return false;"> Añadir</a></li>
                </ul></td>
            </tr>
          </table>
          <div id="ListarProductosPrincipales" class="MargenSeparar"> </div>
          <div id="Modal_ProductoPrincipal"></div>
          <!--Start Cultivos Asociado -->
          <table class="tablaSeparador" >
            <tr>
              <td style="text-align:left"><h4> Cultivos Asociado </h4></td>
              <td style="text-align:right"><ul class="classAdd">
                  <li ><a id="NuevoCultivoAsociado" href="#" onclick="ModalCultivoAsociado();return false"> Añadir</a></li>
                </ul></td>
            </tr>
          </table>
          <div id="ListarCultivosAsociados" class="MargenSeparar" > </div>
          <div id="Modal_CultivoAsociado"></div>
          
          <!-- Start Georeferencia -->
          <div id="ListarGeoreferencia"> </div>
          <div id="Modal_Georeferencia"></div>
          <!-- Start Labores Culturales  -->
          <table class="tablaSeparador" >
            <tr>
              <td style="text-align:left"><h4> Labores Culturales </h4></td>
              <td style="text-align:right"></td>
            </tr>
          </table>
          <div style="width:200px;" class="MargenSeparar">
          <form>
          <select name="TipoLaborCultural" id="TipoLaborCultural"  >
            
              <?php 		// Llenar el combo Tipo de LaborCultural 
			
				$data=CListadoSimple_tipolabor_sinControl();							
				 $dataSelect = $cix->ImprimeCuerpoSelect($data,"TipoLaborId","TipoLabor",1);  
				 echo $dataSelect ;
			?>
            </select>
            </form>
          </div>
          <div id="LaboresCulturales" class="MargenSeparar  border">
            <div id="LaborPoda" >
              <h3>Poda</h3>
              <?php include_once("../labor/Registrar_labor_Poda.php");?>
            </div>
            <div id="LaborRiego">
              <h3> Riego</h3>
              <?php include_once("../labor/Registrar_labor_Riego.php");?>
            </div>
            <div id="LaborEnfermedad">
              <h3>Enfermedad</h3>
              <?php include_once("../labor/Registrar_labor_Enfermedad.php");?>
            </div>
            <div id="LaborPlaga">
              <h3> Plaga</h3>
              <?php include_once("../labor/Registrar_labor_Plaga.php");?>
            </div>
            <div id="LaborFertilizacion">
              <h3>Fertilización</h3>
              <?php include_once("../labor/Registrar_labor_Fertilizacion.php");?>
            </div>
            <div id="LaborControl">
              <h3> Control</h3>
              <?php //include_once("../labor/Registrar_labor_Riego.php");?>
            </div>
          </div>
          <div id="ListarDetalleLabioresCultruales"> </div>
          <div id="RegistrarControlFitosanotario"></div>
          <div id="MostrarDetalleControl"></div>
          <!--   --> 
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
		$("#menu_interno #navi li").removeClass("selected");		
	    $("#menu_interno #navi #parcela").addClass("selected");	
});
</script>
</body>
</html>