<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQuery Combo</title>
<script type="text/javascript" src="script/jquery.js"></script>
<script type="text/javascript" src="script/jquery.jCombo.min.js"></script>
</head>
<body>
<h3>jCombo Example...</h3>
<form method="post" action="">

  <table>
    <tr>
      <td>Country</td>
      <td><select name="country" id="country">
        </select></td>
    </tr>
    <tr>
      <td>City</td>
      <td><select name="city" id="city">
        </select></td>
    </tr>
    <tr>
      <td>Zone</td>
      <td><select name="zone" id="zone">
        </select></td>
    </tr>
       <tr>
      <td>pais</td>
      <td><select name="pais" id="pais">
        </select></td>
    </tr>
  </table>
  
<select name="pais" id="pais"></select><br />
<?php 	include_once "../../Modelado/Modelo_educacion.php";  ?>
<!-- <div> A&ntilde; Nueva Unidad Productiva << Volver Vista de Unidad Productiva </div> -->
<form id="frmRegistrar_productor" name="frmRegistrar_productor"  method="post" action="" >
  <div class="separador">Productor </div>
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
      <td colspan="3"><input  alt="requerido" name="ProductorFechaIngreso_"  id="ProductorFechaIngreso_"  class="validate[required] text-input datepicker"   /></td>
    </tr>
    <tr>
      <td align="right">Fecha Nac:</td>
      <td colspan="3"><input alt="requerido" name="ProductorFechaNac_"  id="ProductorFechaNac_"  class="validate[required] text-input datepicker" /></td>
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
      <td align="right">Sexo:</td>
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
    <!--
    <tr>
      <td height="29" align="right">Foto:</td>
      <td colspan="3"><input name="imagen" type="file" id="imagen" value="" /></td>
    </tr>
    -->
    <tr>
      <td colspan="4"><div class="separador">Ubicaci&oacute;n </div></td>
    </tr>
    <tr>
      <td align="right">Departamento:</td>
      <td colspan="3"><select name="depa" id="depa">
        </select></td>
    </tr>
    <tr>
      <td align="right">Provincia:</td>
      <td colspan="3"><select name="prov" id="prov">
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
      <td><textarea name="UnidadProductivaComentario_"id="UnidadProductivaComentario_"  cols="" rows="5"></textarea></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td><input type="submit" value="Registrar" name="btregistrar" /></td>
      <td ><input type="reset" value="Limpiar"/></td>
      
    </tr>
    <tr>
      <td align="right" colspan="4"><?php echo $rpta;?></td>
    </tr>
    <tr>
      <td colspan="4"><div id="error"></div></td>
    </tr>
  </table>
</form>

  <script type="text/javascript">
$(function() {
	$("#country").jCombo("services/getCountries.php", { selected_value : '<?php print(27); ?>' } );
    $("#city").jCombo("services/getCities.php?id=", { 
					parent: "#country", 
					parent_value: '<?php print(27); ?>', 
					selected_value: '<?php print($city_id); ?>' 
				});		
    $("#zone").jCombo("services/getZones.php?id=", { 
					parent: "#city", 
					parent_value: '<?php print($city_id); ?>', 
					selected_value: '<?php print($zone_id); ?>' 
				});


	//$("#depa").jCombo("services/s_getDepartamentos.php?id=27", { selected_value : '<?php print(6); ?>'} );
	$("#depa").jCombo("services/s_jCombos.php?metodo=ListarDepartamento&id=27", { selected_value : '<?php print(6); ?>' } );
     $("#prov").jCombo("services/s_jCombos.php?metodo=ListarProvincia&id=", { 
					parent: "#depa", 
					parent_value: '<?php print(6); ?>', 
					selected_value: '<?php print(63); ?>' 
				});	/*
    $("#prov").jCombo("services/s_getProvincias.php?id=", { 
					parent: "#depa", 
					parent_value: '<?php print(6); ?>', 
					selected_value: '<?php print(63); ?>' 
				});		*/
  $("#distrito").jCombo("services/s_jCombos.php?metodo=ListarDistritos&id=", { 
					parent: "#prov", 
					parent_value: '<?php print(63); ?>', 
					selected_value: '<?php print(1); ?>' 
				});

	
});
</script> 

</body>
</html>