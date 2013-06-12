<?php 
/*$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
		$ParcelaNombre=$rptamo["cuerpo"][0]["ParcelaNombre"];
		$ParcelaArea=$rptamo["cuerpo"][0]["ParcelaArea"];
		$UnidadProductivaId=$rptamo["cuerpo"][0]["UnidadProductivaId"];
		//$CertificacionId=$rptamo["cuerpo"][0]["CertificacionId"];
		$BaseId=$rptamo["cuerpo"][0]["BaseId"];
		$DistritoId=$rptamo["cuerpo"][0]["DistritoId"];
		$ParcelaCaserio=$rptamo["cuerpo"][0]["ParcelaCaserio"]
		$DistritoId=$rptamo["cuerpo"][0]["DistritoId"];		
		$ProvinciaId=$rptamo["cuerpo"][0]["ProvinciaId"];
		$DepartamentoId=$rptamo["cuerpo"][0]["DepartamentoId"];	
		*/;
?>
<title><?php $titulo ?></title>

<link  type="text/css" href="../css/estilo_formulario.css" rel="stylesheet">
<!-- para validar el Formulario   -->
<link rel="stylesheet" href="../validar_frm/validationEngine.jquery.css" type="text/css"/>
<script src="../validar_frm/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8">	</script>
<script src="../validar_frm/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$(document).ready(function(){
		// para activar la clase del menu
		$("#menu_interno #navi li").removeClass("selected");
		  $("#menu_interno #navi #parcela").addClass("selected");
		  
		/*para inicar la validacion del frm */
		jQuery("#frmRegistrar_parcela").validationEngine('attach');	
	 });
</script>


<script type="text/javascript" src="../js/jquery.jCombo.min.js"></script>
  <script type="text/javascript">
  var servicio="../servicios/";
	$(document).ready(function(){
	$("#departamento").jCombo(servicio+"s_jCombos.php?metodo=ListarDepartamento&id=27", { selected_value : '<?php print($DepartamentoId); ?>' } );
    $("#provincia").jCombo(servicio+"s_jCombos.php?metodo=ListarProvincia&id=", { 
					parent: "#departamento", 
					parent_value: '<?php print($DepartamentoId); ?>', 
					selected_value: '<?php print($ProvinciaId); ?>' 
				});		
    $("#distrito").jCombo(servicio+"s_jCombos.php?metodo=ListarDistritos&id=", { 
					parent: "#provincia", 
					parent_value: '<?php print($ProvinciaId); ?>', 
					selected_value: '<?php print($DistritoId); ?>' 
				});
	
});
</script> 
<div id="divRegistrar_parcela">
  <form id="frmRegistrar_parcela" name="frmRegistrar_parcela" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaRegistrar_parcela">
      <tr>
        <td align="right">ParcelaId:</td>
        <td><input type="text" name="ParcelaId_" id="ParcelaId_"    value="<?php echo $ParcelaId?>"/></td>
      </tr>
      <tr>
        <td align="right">Nombre de la Parcela:</td>
        <td><input type="text"  name="ParcelaNombre_" id="ParcelaNombre_" value="<?php echo $ParcelaNombre?>" class="validate[required] text-input"/></td>
      </tr>
      <tr>
        <td align="right">Area Total:</td>
        <td><input type="text" alt="requerido" name="ParcelaArea_" id="ParcelaArea_" value="<?php echo $ParcelaArea?>" class="validate[required] text-input"/></td>
      </tr>
      <tr>
        <td colspan="2" align="right"><div align="left">Ubicación</div></td>
      </tr>
      <tr>
        <td align="right">Departamento</td>
        <td><select name="departamento" id="departamento">
          </select></td>
      </tr>
      <tr>
        <td align="right">Provincia</td>
        <td><select name="provincia" id="provincia">
          </select></td>
      </tr>
      <tr>
        <td align="right">DistritoId:</td>
        <td><select name="DistritoId_"  id="distrito" class="validate[required]" >
          </select></td>
      </tr>
      <tr>
        <td align="right">Caserio:</td>
        <td><input type="text" name="ParcelaCaserio_" id="ParcelaCaserio_" value="<?php echo $ParcelaCaserio?>"/></td>
      </tr>
      <tr>
        <td align="right">Base:</td>
        <td><select name="BaseId_"  id="BaseId_" class="validate[required]" >
         <?php 
	// Llenar el combo Grado de Instruccion 
		include_once "../base/Controlador_base.php"; 
		$data=CListadoSimple_base();
		//$data=$eneducacion->ListadoSimple_educacion();
		
		include_once "../cixphp.php";
		$cix = new CixPHP();						
		 $dataSelect = $cix->ImprimeCuerpoSelect($data,"BaseId","BaseNombre",$BaseId);  
		 echo $dataSelect ;
			
			?>
          </select></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td><input type="button" onclick="location.href='parcela.php'"  value="Cancelar"/>       <input type="submit" value="Registrar" name="btregistrar" /> </td>
      </tr>
    </table>
  </form>
</div>
