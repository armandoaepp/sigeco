<script type="text/javascript">
  function CargarCombos(){
	  var servicio="../servicios/";
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
				
		$("#ProductorFechaIngreso_,#ProductorFechaNac_" ).datepicker({
		showOn: "button",
		buttonImage: "../images/calendar.gif",
		buttonImageOnly: true,
		yearRange: "-80:+5",		
		changeMonth: true,
		changeYear: true,
		dateFormat: "dd/mm/yy",				
		}); 
		/*para inicar la validacion del frm */
		jQuery("#frmRegistrar_productor").validationEngine('attach');	
  }
<!--	$(document).ready(function(){  });
-->
</script>
<?php 	include_once "../../Modelado/Modelo_educacion.php";  ?>

<div class="separador">Productor </div>
<div style="width:500px">
<form id="frmRegistrar_productor" name="frmRegistrar_productor"  method="post" action="<?php echo $accionf;?>" >
  <table width="750" border="0" id="tablaRegistrar_productor">
    <tr>
      <td width="148" align="right">Id:</td>
      <td colspan="3"><input type="text" name="ProductorId_" id="ProductorId_"  disabled="disabled" value=""/></td>
    </tr>
    <tr>
      <td align="right">Nombre:</td>
      <td colspan="3"><input type="text" alt="requerido" name="ProductorNombre_" id="ProductorNombre" value="" class="validate[required] text-input"  /></td>
    </tr>
    <tr>
      <td align="right">Apellido Paterno:</td>
      <td colspan="3"><input type="text" alt="requerido" name="ProductorApellidoPat_" id="ProductorApellidoPat_" value="" class="validate[required] text-input" /></td>
    </tr>
    <tr>
      <td align="right">Apellido Materno:</td>
      <td colspan="3"><input type="text" alt="requerido" name="ProductorApellidoMat_" id="ProductorApellidoMat_" value="" class="validate[required] text-input"  /></td>
    </tr>
    <tr>
      <td align="right">Dni:</td>
      <td colspan="3"><input type="text" alt="requerido" name="ProductorDni_" id="ProductorDni_" title="Ingresar DNI " value="" class="validate[required,custom[integer],minSize[8],maxSize[8]] text-input"  maxlength="8"/></td>
    </tr>
    <tr >
      <td align="right" >Fecha Ingreso:</td>
      <td colspan="3"><input  alt="requerido" name="ProductorFechaIngreso_"  id="ProductorFechaIngreso_"  class="validate[required] text-input datepicker calendario"   /></td>
    </tr>
    <tr>
      <td align="right">Fecha Nac:</td>
      <td colspan="3"><input alt="requerido" name="ProductorFechaNac_"  id="ProductorFechaNac_"  class="validate[required] text-input datepicker calendario" /></td>
    </tr>
    <tr>
      <td align="right">Estado Civil:</td>
      <td colspan="3"><input type="text" name="ProductorEstadoCivil_" id="ProductorEstadoCivil_" value="" class="validate[required] text-input"/></td>
    </tr>
    <tr>
      <td align="right">Grado De Instrucci&oacute;n:</td>
      <td colspan="3"><select title="requerido"  name="EducacionId_" id="EducacionId_" class="validate[required]" >
          <?php 

	// Llenar el combo Grado de Instruccion 
		$eneducacion=new Clase_educacion();
		$data=$eneducacion->ListadoSimple_educacion();
		 	  try{
		 			$cantele=count($data["cuerpo"]);
				if($cantele>0){
				for($i=0;$i<$cantele;$i++){
					echo '<option value="'.$data["cuerpo"][$i]["EducacionId"].'">'.$data["cuerpo"][$i]["EducacionNivel"].'</option>'; 
					}
				}
				
			}catch(exception $e){return $e->getMessage();}?>
        </select></td>
    </tr>
    <tr>
      <td align="right">Profesi&oacute;n:</td>
      <td colspan="3"><input type="text" name="ProductorProfesion_" id="ProductorProfesion_" value=""/></td>
    </tr>
    <tr>
      <td align="right" class="chkradio">Sexo:</td>
      <td colspan="3"><input name="ProductorSexo_" class="validate[required] radio" type="radio" value="M" />
        Masculino
        <input name="ProductorSexo_" type="radio" value="F" class="validate[required] radio" />
        Femenino
        </label></td>
    </tr>
    <tr>
      <td align="right">Direccion:</td>
      <td colspan="3"><input type="text"  name="ProductorDireccion_" id="ProductorDireccion_" value=""/></td>
    </tr>
    <tr>
      <td colspan="4"><div class="separador">Ubicaci&oacute;n </div></td>
    </tr>
    <tr>
      <td align="right">Departamento:</td>
      <td colspan="3"><select name="departamento" id="departamento">
        </select></td>
    </tr>
    <tr>
      <td align="right">Provincia:</td>
      <td colspan="3"><select name="provincia" id="provincia">
        </select></td>
    </tr>
    <tr>
      <td align="right">Distrito:</td>
      <td colspan="3"><select name="DistritoId_"  id="distrito" class="validate[required]" >
        </select></td>
    </tr>
    <tr>
      <td colspan="4"><div class="separador">Como Puede Ser Contactado </div></td>
    </tr>
    <tr>
      <td align="right">Email:</td>
      <td colspan="3"><input type="text" name="ProductorEmail_" id="ProductorEmail_" value=""  class="validate[required,custom[email]] text-input"/></td>
    </tr>
    <tr>
      <td align="right">Tel&eacute;fono Fijo:</td>
      <td colspan="3"><input type="text" name="TelefonoFijo_" id="TelefonoFijo_" value=""/></td>
    </tr>
    <tr>
      <td align="right">Tel&eacute;fono M&oacute;vil:</td>
      <td colspan="3"><input type="text" name="TelefonoMovil_" id="TelefonoMovil_" value=""/>
        M&aacute;s de uno? Por favor, sep&aacute;relos con una coma ( , ).</td>
    </tr>
    <tr>
      <td align="right">Nota:</td>
      <td><textarea name="UnidadProductivaComentario_"id="UnidadProductivaComentario_"  cols="50" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right"><button type="submit"  id="btregistrar"><img src="../images/guardar.png" title="Registar"/>Registrar </button></td>
      <td><button  type="button" id="btnCancelar" onclick="Cancelar(); return false;"><img src="../images/cancelar.png" title="Cancelar"/>Cancelar </button></td>
    </tr>
  </table>
</form>
</div>