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
	$("#departamento").jCombo(servicio+"s_jCombos.php?metodo=ListarDepartamento&id=27", { selected_value : '<?php print(6); ?>' } );
    $("#provincia").jCombo(servicio+"s_jCombos.php?metodo=ListarProvincia&id=", { 
					parent: "#departamento", 
					parent_value: '<?php print(6); ?>', 
					selected_value: '<?php print(63); ?>' 
				});		
    $("#distrito").jCombo(servicio+"s_jCombos.php?metodo=ListarDistritos&id=", { 
					parent: "#provincia", 
					parent_value: '<?php print(63); ?>', 
					selected_value: '<?php print(1); ?>' 
				});
	
});
</script> 
<div id="divRegistrar_parcela">
  <form id="frmRegistrar_parcela" name="frmRegistrar_parcela" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaRegistrar_parcela">
      <tr>
        <td align="right">ParcelaId:</td>
        <td><input type="text" name="ParcelaId_" id="ParcelaId_"  disabled="disabled" value=""/></td>
      </tr>
      <tr>
        <td align="right">Nombre de la Parcela:</td>
        <td><input type="text"  name="ParcelaNombre_" id="ParcelaNombre_" value="" class="validate[required] text-input"/></td>
      </tr>
      <tr>
        <td align="right">Area Total:</td>
        <td><input type="text" alt="requerido" name="ParcelaArea_" id="ParcelaArea_" value="" class="validate[required] text-input"/></td>
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
        <td><input type="text" name="ParcelaCaserio_" id="ParcelaCaserio_" value=""/></td>
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
		 $dataSelect = $cix->ImprimeCuerpoSelect($data,"BaseId","BaseNombre",0);  
		 echo $dataSelect ;
			
			?>
          </select></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td><input type="submit" value="Registrar" name="btregistrar" />          <input type="button" onclick="location.href='parcela.php'"  value="Cancelar"/></td>
      </tr>
    </table>
  </form>
</div>
