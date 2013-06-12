<?php session_start();

?>
<!-- Script para cargar los calendarios  -->
<!--
<link href="../css/smoothness/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.23.custom.min.js"></script>
<script src="../js/jquery.ui.datepicker-es.js"></script>
<link  type="text/css" href="../css/estilo_formulario.css" rel="stylesheet">

<script>
/*Iniciar los Calendarios */
   	$(document).ready(function(){		
	$("#ParcelaDetalleFechaSiembra" ).datepicker({
		showOn: "button",
		buttonImage: "../images/calendar.gif",
		buttonImageOnly: true,
		yearRange: "-80:+5",		
		changeMonth: true,
		changeYear: true,
		dateFormat: "dd/mm/yy",				
		}); 
		/*para inicar la validacion del frm */
		//jQuery("#frmRegistrar_productor").validationEngine('attach');	
		
	});
</script>

<link  type="text/css" href="../css/estilo_calendario.css" rel="stylesheet">
-->

<!-- modificar las clase del calendario (STILOS CSS)  -->

<div id="divRegistrar_parceladetalle">
  <form class='puForm' method="post" id="modalform" name="frmRegistrar_parceladetalle" action="index_interno.php?accion=RegistrarParceladetalle">
    <table border="0" id="tablaRegistrar_parceladetalle">
      <tr>
        <td colspan="3">
          <div>Plantar</div></td>
      </tr>
      <tr>
        <td width="139" align="right"> Fecha Siembra:</td>
        <td colspan="2"><input type="text" name="ParcelaDetalleFechaSiembra_" id="ParcelaDetalleFechaSiembra" value=""/></td>
      </tr>
      <tr>
        <td align="right">Area:</td>
        <td colspan="2"><input type="text" name="ParcelaDetalleArea_" id="ParcelaDetalleArea_" value=""/> </td><td align="left">ha</td>
      </tr>
      <tr>
        <td align="right">Producto:</td>
        <td colspan="2"><select name="ProductoId_" id="ProductoId_">
            <?php 
		// Llenar el combo Tipo de Producto 
		
			$IdUnidadProductiva=$_SESSION["UnidadProductivaId"];
			include_once "../parceladetalle/Controlador_parceladetalle.php";
		$data= CListar_producto_Unidadproductiva($IdUnidadProductiva);	
		//$data= CListar_producto_Unidadproductiva(4);	
		include_once "../cixphp.php";
		$cix = new CixPHP();				
		 $dataSelect = $cix->ImprimeCuerpoSelect($data,"ProductoId","Producto",0);  
		 echo $dataSelect ;
			?>
          </select></td>
      </tr>
      <tr>
        <td colspan="3"><div>Distancia de la Siembra</div></td>
      </tr>
      <tr>
        <td align="right">Distancia entre Surcos:</td>
        <td colspan="2"><input type="text" name="DistanciaSurcos_" id="DistanciaSurcos_" value=""/></td>
      </tr>
      <tr>
        <td align="right">Distancia entre Plantas:</td>
        <td colspan="2"><input type="text" name="DistanciaPlantas_" id="DistanciaPlantas_" value=""/></td>
      </tr>
      <tr>
        <td align="right">Tipo de Siembra:</td>
        <td colspan="2"><select name="TipoSiembra_" id="TipoSiembra_">
            <option>Cuadro/Rectángulo</option>
            <option>Triángulo</option>
            <option>Tresbolillo</option>
            <option>Linear</option>
          </select></td>
      </tr>
      <tr>
        <td align="right"><input type="hidden" name="ParcelaId_" id="ParcelaId_" value="<?php echo $_GET["idP"] ;?>"/></td>
        <td width="88" align="right"><input type="submit" value="Registrar" name="btregistrar" /></td>
        <td width="58"><input type="reset" value="Limpiar"/></td>
      </tr>
    </table>
  </form>
</div>
