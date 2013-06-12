<?php 
session_start();
if(!isset($_SESSION["login"]))  header("Location:../../login.php");
//  echo "<META HTTP-EQUIV = REFRESH CONTENT='2 ;URL=../../login.php'>";	
$user=$_SESSION["usuario"];	
 

  include_once "./Controlador_unidadproductiva.php";
	// Determina si (id) una variable está definida y no es NULL.	
	if(isset($_GET["id"])){
		if(!is_numeric($_GET["id"])) $_GET["id"]=0;
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
		$_SESSION["Productor"]= $Productor;
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SIGECO-APESI: Datos Generales</title>

<!--Ui de Jquery -->
<link  type="text/css" href="../css/ui-lightness/jquery-ui-1.9.2.custom.css" rel="stylesheet">
<script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.23.custom.min.js"></script>
<!--modificar el estilo de los Jdialogos y calendario -->
<link href="../css/estilo_calendario.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_frmModal.css" rel="stylesheet" type="text/css" />
<!-- para validar el Formulario   -->
<link rel="stylesheet" href="../validar_frm/validationEngine.jquery.css" type="text/css"/>
<script src="../validar_frm/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8">	</script>
<script src="../validar_frm/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<!--estilos generales de la plantilla-->
<link href="../css/contenedor.css" rel="stylesheet" type="text/css" />
<link href="../css/menu.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_tabla.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_unidadproductiva_interno.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$(document).ready(function(){
	CagarDatosGenerales();
 //  $("#menu_interno #navi #datoGenerales").addClass("selected");
   	// ventana modal Actualizar 	
		
  });

	$(function(){		
		// ventana modal Nuevo 			
		$("#dialogModal" ).dialog({
			autoOpen: false,
			modal:true,
			width: 400				
		});
		// abrir la venta modal Nuevo
		$('#nuevofamiliar').on('click',function(){
		  $("#dialogModal" ).dialog('open');
		   return false;
		});
		$("#Actulizar_Familiar").dialog({
			autoOpen: false,
			title:"Actulizar Familiar ",
			height: 350,
			width: 400,
			modal: true
	    });
		
	});

function CagarDatosGenerales(){
	//alert("consultar datos");
	$.ajax({url:"Listar_datosGenerales.php",success: function(data){$("#ContenidoFamiliar").html(data);}
	});
	
}
 function Eliminar(id){
	var msg = confirm("Desea Eliminar el Registro?")
	if ( msg ) {
		$.ajax({
			url: '../familiar/index_ajax.php',
			type: "GET",
			data: "accion=Eliminar&id="+id,
			success: function(datos){
			alert(datos);
			CagarDatosGenerales();				
			}
		});
	}
	return false;
}

function Modificar(id){			
		$.ajaxSetup({async:false});
		$.post("../familiar/index_ajax.php",{"accion":"Mactualizar","id":id},
		function(data) {$("#Actulizar_Familiar").html(data);});	
		$("#Actulizar_Familiar").dialog("open");     
}
function ActualizarFamiliar(){
	var metodo;
	$("#frmActualizar_familiar").submit(function(){		
		metodo="&accion=Actualizar";
			$.ajax({
				url: '../familiar/index_ajax.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(datos){				
					alert(datos);								
					$( "#Actulizar_Familiar").dialog( "close" );
					CagarDatosGenerales();	
				}
			});
			return false;// para que no recarge toda la pagina
		 });	
	
	}

</script>
<script src="../js/js_modal.js" type="text/javascript" ></script>
<style>
#familiar {
	margin-top: 2px;
	text-align: center;
}
#ContenidoFamiliar {
	margin-top: 3px;
	padding: 2px;
	width: 98%;
}
#cuerpoContenedor {
	margin: 8px;
	background: #FFFFFF;
	height: 100%;
	padding: 0 0 10px 0;
}
</style>
</head>
<body>
<div id="contenedor"> 
  <!--Start superior-->
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
  <!-- Start Cuerpo-->
  <div id="cuerpo">
    <div id="cuerpoContenedor">
      <div style="background:#ebffe0;border-bottom: 1px solid #CCCCCC; height:100%;">
        <p> Unidad Productiva:<b> <?php echo $Productor ?> </b> <a  href="unidadproductiva.php" > << Volver a Vista de Unidad Productiva </a> </p>
      <p  style="clear:both; height:20px"> </p>
        <?php include_once("./menu_up.php");?>
      </div>
      <!-- Start Contenido -->
      <div id="contenido"> 
        <!--contenidoDatos -->
        <div id="contenidoDatos">
          <table class="tablaSeparador" >
            <tr>
              <td style="text-align:left"><h4> </h4></td>
              <td style="text-align:right"><a href="index_interno.php?accion=Mactualizar_up" title="A&ntilde;adir un Familiar"> Editar</a></td>
            </tr>
          </table>
          <p><i> Ubicacion:</i> <?php echo $Ubicacion ?></p>
          <p><i> Telefonos:</i> <?php echo $Telefonos ?></p>
          <p><i> Email:</i> <?php echo $ProductorEmail ?></p>
          <p><i> Area Total:</i> <?php echo $AreaTotal ?></p>
        </div>
        <!-- familiar-->
        <div id="familiar">
          <table class="tablaSeparador" >
            <tr>
              <td style="text-align:left"><h4> Mienbros de La Familia del Productor </h4></td>
              <td style="text-align:right"><a href="#" id="nuevofamiliar" title="A&ntilde;adir un Familiar"> A&ntilde;adir</a></td>
            </tr>
          </table>
          <div id="ContenidoFamiliar"> </div>
        </div>
        <!-- --> 
      </div>
      <!-- End Contenido --> 
    </div>
    <!-- End cuerpoContenedor --> 
  </div>
  <!-- End cuerpo --> 
</div>
<div id="dialogModal" title="Nuevo Familiar">
  <?php include_once "./Registrar_familiar.php";?>
</div>
<div id="Actulizar_Familiar"> </div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#menu_interno #navi li").removeClass("selected");
	    $("#menu_interno #navi #datosGenerales").addClass("selected");
		/*$("#cssmenu ul li").removeClass("selected");
	    $("#cssmenu ul #m_unidadproductiva").addClass("selected");*/
	 });
</script>
</body>
</html>
