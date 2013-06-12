<?php 

include_once "../educacion/Controlador_educacion.php";
?>
<!-- Script para cargar los calendarios  -->

<script>			
$(document).ready(function(){	
					
		$("#FamiliarFechaNac1_" ).datepicker({
			showOn: "button",
			buttonImage: "../images/calendar.gif",
			buttonImageOnly: true,
			yearRange: "-80:+5",		
			changeMonth: true,
			changeYear: true,
			dateFormat: "dd/mm/yy",				
		}); 
		/*para inicar la validacion del frm */
		//  jQuery("#frmRegistrar_productor").validationEngine('attach');	
		ActualizarFamiliar();
		
	});
		</script>

<div id="divfrmActualizar_familiar">
  <form id="frmActualizar_familiar" name="frmActualizar_familiar" method="post" action="">
    <table border="0" id="tablaRegistrar_familiar">
      <tr>
        <td align="right">Apellidos:</td>
        <td colspan="2"><input type="text" name="FamiliarApellido_" id="FamiliarApellido_" class="validate[required] text-input"  value="<?php echo $FamiliarApellido;?>"/></td>
      </tr>
      <tr>
        <td align="right">Nombres:</td>
        <td colspan="2"><input type="text" name="FamiliarNombre_" id="FamiliarNombre_"  class="validate[required] text-input" value="<?php echo $FamiliarNombre;?>"/></td>
      </tr>
      <tr>
        <td align="right">Sexo:</td>
        <td align="center"><input name="FamiliarSexo_"  <?php if($FamiliarSexo=="M") echo 'checked="checked"'?>  class="validate[required] radio"   type="radio" value="M" />
          Masculino</td>
        <td align="center"><input name="FamiliarSexo_"   <?php if($FamiliarSexo=="F") echo 'checked="checked"'?>  type="radio" value="F" class="validate[required] radio" />
          Femenino</td>
      </tr>
      <tr>
        <td align="right">Fecha Nac:</td>
        <td colspan="2"><input type="text" name="FamiliarFechaNac_"  id="FamiliarFechaNac1_" value="<?php echo $FamiliarFechaNac;?>" class="calendario"/></td>
      </tr>
      <tr>
        <td align="right">Parentesco:</td>
        <td colspan="2"><label for="FamiliarParentesco_"></label>
          <select name="FamiliarParentesco_" id="FamiliarParentesco_">
            <option  <?php if($FamiliarParentesco=="Esposa") echo 'selected'?>  value="Esposa">Esposa</option>
            <option <?php if($FamiliarParentesco=="Esposo") echo 'selected'?>  value="Esposo" >Esposo</option>
            <option <?php if($FamiliarParentesco=="Hija") echo 'selected'?> value="Hija" >Hija</option>
            <option <?php if($FamiliarParentesco=="Hijo") echo 'selected'?> value="Hijo" >Hijo</option>
          </select></td>
      </tr>
      <tr>
        <td align="right">Grado de Instruccion:</td>
        <td colspan="2"><select title="requerido"   name="EducacionId_" id="EducacionId" class="chzn-select "  >
            <?php 
		// Llenar el combo Tipo de Producto 
			
		$data=CListadoSimple_educacion();		
		include_once "../cixphp.php";
		$cix = new CixPHP();				
		 $dataSelect = $cix->ImprimeCuerpoSelect($data,"EducacionId","EducacionNivel",$EducacionId);  
		 echo $dataSelect ;
			?>
          </select></td>
      </tr>
      <tr>
        <td align="right">Ocupacion:</td>
        <td colspan="2"><input type="text" name="FamiliarOcupacion_" id="FamiliarOcupacion_" value="<?php echo $FamiliarOcupacion;?>"/></td>
      </tr>
      <tr>
        <td align="right"><input  type="hidden" name="FamiliarId_" id="FamiliarId_" value="<?php echo $FamiliarId;?>"/></td>
        <td><input type="submit" value="Registrar" name="btregistrar"></td>
        <td><input type="button" value="Cancelar"   onclick="Cancelar('Actulizar_Familiar','frmActualizar_familiar');"></td>
      </tr>
    </table>
  </form>
</div>
