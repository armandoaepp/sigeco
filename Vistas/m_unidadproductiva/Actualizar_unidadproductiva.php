<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional//EN"           "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Actualizar Unidad productiva</title>
<link  type="text/css" href="../css/ui-lightness/jquery-ui-1.9.2.custom.css" rel="stylesheet">
<!-- modificar las clase del calendario  -->

<script src="../js/jquery-1.8.3.js"></script>
<script src="../js/jquery-ui-1.9.2.custom.js"></script>
<script src="../js/jquery.ui.datepicker-es.js"></script>
<link  type="text/css" href="../css/estilo_formulario.css" rel="stylesheet">
<!--
<script type="text/javascript" src="../js/js_combos.js"></script>
-->
<script type="text/javascript" src="../js/jquery.jCombo.min.js"></script>


  <script type="text/javascript">
  var servicio="../servicios/";
$(function() {
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
<!-- para validar el Formulario   -->
<link rel="stylesheet" href="../validar_frm/validationEngine.jquery.css" type="text/css"/>
<script src="../validar_frm/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8">	</script>
<script src="../validar_frm/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

<!-- Script para cargar los calendarios  -->
<script>
/*Iniciar los Calendarios */
   	$(document).ready(function(){		
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
		
	});
</script>
<!-- modificar las clase del calendario (STILOS CSS)  -->
<link  type="text/css" href="../css/estilo_calendario.css" rel="stylesheet">
<!-- para activar la clase select del menu -->
<script type="text/javascript">
$(document).ready(function(){
   $("#menu_interno #navi #datos").addClass("selected");
  });
  </script>
</head>
<body>
<?php 	include_once "../../Modelado/Modelo_educacion.php";  ?>
<!-- <div> A&ntilde; Nueva Unidad Productiva << Volver Vista de Unidad Productiva </div> -->
<form id="frmRegistrar_productor" name="frmRegistrar_productor" enctype="multipart/form-data" method="post" action="<?php echo $accionf;?>" >
  <div class="separador">Productor </div>
  <table width="750" border="0" id="tablaRegistrar_productor">
    <tr>
      <td width="148" align="right">Id:</td>
      <td colspan="3"><input type="text" name="ProductorId_" id="ProductorId_"  disabled="disabled" value=""/></td>
    </tr>
    <tr>
      <td align="right">Nombre:</td>
      <td colspan="3"><input type="text" alt="requerido" name="ProductorNombre_" id="ProductorNombre" value="<?php echo $ProductorNombre;?>" class="validate[required] text-input"  /></td>
    </tr>
    <tr>
      <td align="right">Apellido Paterno:</td>
      <td colspan="3"><input type="text" alt="requerido" name="ProductorApellidoPat_" id="ProductorApellidoPat_" value="<?php echo $ProductorApellidoPat;?>" class="validate[required] text-input" /></td>
    </tr>
    <tr>
      <td align="right">Apellido Materno:</td>
      <td colspan="3"><input type="text" alt="requerido" name="ProductorApellidoMat_" id="ProductorApellidoMat_" value="<?php echo $ProductorApellidoMat;?>" class="validate[required] text-input"  /></td>
    </tr>
    <tr>
      <td align="right">Dni:</td>
      <td colspan="3"><input type="text" alt="requerido" name="ProductorDni_" id="ProductorDni_" title="Ingresar DNI " value="<?php echo $ProductorDni;?>" class="validate[required,custom[integer],minSize[8],maxSize[8]] text-input"  maxlength="8"/></td>
    </tr>
    <tr >
      <td align="right" >Fecha Ingreso:</td>
      <td colspan="3"><input  alt="requerido" name="ProductorFechaIngreso_"  id="ProductorFechaIngreso_" value="<?php echo $ProductorFechaIngreso;?>" class="validate[required] text-input datepicker"   /></td>
    </tr>
    <tr>
      <td align="right">Fecha Nac:</td>
      <td colspan="3"><input alt="requerido" name="ProductorFechaNac_"  id="ProductorFechaNac_"  value="<?php echo $ProductorFechaNac;?>"  class="validate[required] text-input datepicker" /></td>
    </tr>
    <tr>
      <td align="right">Estado Civil:</td>
      <td colspan="3"><input type="text" name="ProductorEstadoCivil_" id="ProductorEstadoCivil_" value="<?php echo $ProductorEstadoCivil;?>" class="validate[required] text-input"/></td>
    </tr>
    <tr>
      <td align="right">Grado De Instrucci&oacute;n:</td>
      <td colspan="3"><select title="requerido"  name="EducacionId_" id="EducacionId_" class="validate[required]" >
        <?php 
	// Llenar el combo Grado de Instruccion 
		$eneducacion=new Clase_educacion();
		$data=$eneducacion->ListadoSimple_educacion();
		
		include_once "../cixphp.php";
		$cix = new CixPHP();				
		 $dataSelect = $cix->ImprimeCuerpoSelect($data,"EducacionId","EducacionNivel",$EducacionId);  
		 echo $dataSelect ;
			
			?>
            
        </select></td>
    </tr>
    <tr>
      <td align="right">Profesi&oacute;n:</td>
      <td colspan="3"><input type="text" name="ProductorProfesion_" id="ProductorProfesion_"  value=" <?php echo $ProductorProfesion;?> "/></td>
    </tr>
    <tr>
      <td align="right">Sexo:</td>
      <td colspan="3">
      <?php 
	
	    $chkM="";
		$chkF="";
	  if($ProductorSexo=="M"){
		  $chkM="checked";
		  } if($ProductorSexo=="F"){
		  $chkF="checked";
		  }
			 
			 ?>
      <input name="ProductorSexo_" class="validate[required] radio" <?php echo  $chkM ; ?> type="radio" value="M" />
        Masculino
        <input name="ProductorSexo_" <?php echo  $chkF ; ?> type="radio" value="F" class="validate[required] radio" />
        Femenino
        </label></td>
    </tr>
    <tr>
      <td align="right">Direccion:</td>
      <td colspan="3"><input type="text"  name="ProductorDireccion_" id="ProductorDireccion_" value="<?php echo $ProductorDireccion;?>"/></td>
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
      <td colspan="3"><input type="text" name="ProductorEmail_" id="ProductorEmail_" value="<?php echo $ProductorEmail;?>" class="validate[required,custom[email]] text-input"/></td>
    </tr>
    <tr>
      <td align="right">Tel&eacute;fono Fijo:</td>
      <td colspan="3"><input type="text" name="TelefonoFijo_" id="TelefonoFijo_" value="<?php echo $TelefonoFijo;?>"/></td>
    </tr>
    <tr>
      <td align="right">Tel&eacute;fono M&oacute;vil:</td>
      <td colspan="3"><input type="text" name="TelefonoMovil_" id="TelefonoMovil_" value="<?php echo $TelefonoMovil;?>" />
        M&aacute;s de uno? Por favor, sep&aacute;relos con una coma ( , ).</td>
    </tr>
    <tr>
      <td align="right">Nota:</td>
      <td><textarea name="UnidadProductivaComentario_"id="UnidadProductivaComentario_"  cols="" rows="5"   ><?php echo $UnidadProductivaComentario;?></textarea></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td width="147"><input type="submit" value="Registrar" name="btregistrar" /></td>
      <td width="185"><input type="button" value="Cancelar" onclick="location.href='datosGenerales.php';"/></td>
      <td width="282">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" colspan="4"><?php echo $rpta;?></td>
    </tr>
    <tr>
      <td colspan="4"><div id="error"></div></td>
    </tr>
  </table>
</form>

</div>
</body>
</html>
