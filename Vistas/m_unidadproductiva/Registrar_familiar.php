<?php

//session_start();
// $IdProductor=9;

$IdProductor=$_SESSION["ProductorId"];
include_once "../educacion/Controlador_educacion.php";
?>

<!-- Script para cargar los calendarios  -->

<script src="../js/jquery.ui.datepicker-es.js"></script>
<script>
			
$(document).ready(function(){	
					
		$("#FamiliarFechaNac_" ).datepicker({
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
			
		
	});
		</script>

<div id="divRegistrar_familiar">
  <form id="frmRegistrar_familiar" name="frmRegistrar_familiar" method="post" action="index_interno.php?accion=rFamiliar">
    <table border="0" id="tablaRegistrar_familiar">
      <!--
<tr><td align="right">FamiliarId:</td><td><input type="text" name="FamiliarId_" id="FamiliarId_" value=""/></td></tr>
-->
      <tr>
        <td align="right">Apellidos:</td>
        <td colspan="2"><input type="text" name="FamiliarApellido_" id="FamiliarApellido_" class="validate[required] text-input"  value=""/></td>
      </tr>
      <tr>
        <td align="right">Nombres:</td>
        <td colspan="2"><input type="text" name="FamiliarNombre_" id="FamiliarNombre_"  class="validate[required] text-input" value=""/></td>
      </tr>
      <tr>
        <td align="right">Sexo:</td>
        <td align="center"><input name="FamiliarSexo_" class="validate[required] radio"  type="radio" value="M" />
          Masculino</td>
        <td align="center"><input name="FamiliarSexo_"  type="radio" value="F" class="validate[required] radio" />
          Femenino</td>
      </tr>
      <tr>
        <td align="right">FechaNac:</td>
        <td colspan="2"><input type="text" name="FamiliarFechaNac_"  id="FamiliarFechaNac_" value="" class="calendario"/></td>
      </tr>
      <tr>
        <td align="right">Parentesco:</td>
        <td colspan="2"><label for="FamiliarParentesco_"></label>
          <select name="FamiliarParentesco_" id="FamiliarParentesco_">
            <option value="Esposa">Esposa</option>
            <option value="Esposo" >Esposo</option>
            <option value="Hija" >Hija</option>
            <option value="Hijo" >Hijo</option>
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
		 $dataSelect = $cix->ImprimeCuerpoSelect($data,"EducacionId","EducacionNivel",-1);  
		 echo $dataSelect ;
			?>
          </select></td>
      </tr>
      <tr>
        <td align="right">Ocupacion:</td>
        <td colspan="2"><input type="text" name="FamiliarOcupacion_" id="FamiliarOcupacion_" value=""/></td>
      </tr>
      <tr>
        <td align="right"></td>
        <td><input type="submit" value="Registrar" name="btregistrar"></td>
        <td><input type="button" value="Cancelar"   onclick="Cancelar('dialogModal','frmRegistrar_familiar');"/></td>
      </tr>
      <tr>
        <td align="right" colspan="3"></td>
      </tr>
    </table>
  </form>
</div>
