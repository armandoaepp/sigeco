<?php  session_start(); if(!isset($_SESSION["login"]))  header("Location:../../login.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>SIGECO-APESI: : Parcelas</title>
<link href="../css/contenedor.css" rel="stylesheet" type="text/css" />
<link href="../css/menu.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_tabla.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
<link href="../css/estilo_unidadproductiva_interno.css" rel="stylesheet" type="text/css" />
<style>
#cuerpoContenedor {
	margin: 8px;
	background: #FFFFFF;
	height: 100%;
	padding: 0px 0 10px 0;
}
</style>
<script type="text/javascript">
    $(document).ready(function() {
		 CargarParcelas();
	 			
	    });
	
	
function CargarParcelas(){
			$.ajax({url:"../parcela/Listar_parcela_tabla.php",success: function(data){$("#ListarParcela").html(data);
			$('#tablaParcela td:nth-child(3),#tablaParcela th:nth-child(3)').hide(); //Ocultar Idparcela
			}
		});
	}
// no lo  Elimino solo se Desactiva :)
 function Eliminar(id){
		var msg = confirm("Desea Eliminar el Registro?")
		if ( msg ) {
			$.ajax({
				url: '../parcela/index_ajax.php',
				type: "GET",
				//type: "POST",
				data:{ "accion":"Eliminar","id":id},
				success: function(datos){
				alert(datos);
				CargarParcelas();				
				}
			});
		}
		return false;
	}	
</script>
</head>
<body>
<?php  
  include_once "../parcela/Controlador_parcela.php"; 
  include_once "../cixphp.php"; 
  $cix=new CixPHP();
	 ?>
<div id="contenedor">
  <div id="superior">
    <div id="superiorIzquierda">
      <?php include_once("../superior_html.php");?>
    </div>
    <div id="superiorDerecha">  <?php include_once("../usuario_linea.php"); // echo $_SESSION["usuario"];?>
    </div>
    <div class="clear"></div>
    <?php include_once("../menu.php");?>
  </div>
  <div id="cuerpo">
    <div id="cuerpoContenedor">
      <div style="background:#ebffe0;border-bottom: 1px solid #CCCCCC; height:100%;">
        <p> Unidad Productiva:<b> <?php echo $_SESSION["Productor"];?> </b> <a  href="unidadproductiva.php" > << Volver a Vista de Unidad Productiva </a> </p>
        <p  style="clear:both; height:20px"> </p>
        <?php include_once("./menu_up.php");?>
      </div>
      <div id="contenido">
        <div id="contenidoDatos">
          <table class="tablaSeparador" >
            <tr>
              <td style="text-align:left"><h4> Parcelas </h4></td>
              <td style="text-align:right"><a href="index_interno.php?accion=NuevoParcela" title="Añadir Nueva Parcela"> Añadir Parcela</a></td>
            </tr>
          </table>
          <div id="ListarParcela"> </div>
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