<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional//EN"           "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Nuevo productor</title>
<link  type="text/css" href="../css/ui-lightness/jquery-ui-1.9.2.custom.css" rel="stylesheet">
<script src="../js/jquery-1.8.3.js"></script>
<script src="../js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="../js/js_provincia.js"></script>
<!--    -->

<!-- Script para cargar los calendarios  -->
<script>

   	$(document).ready(function(){		
	$("#ProductorFechaIngreso_,#ProductorFechaNac_" ).datepicker({
		showOn: "button",
		buttonImage: "../images/calendar.gif",
		buttonImageOnly: true,
		yearRange: "-80:+5",
		defaultDate: "+1w",
		changeMonth: true,
		changeYear: true,
		dateFormat: "dd/mm/yy",			
		monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul","Ago","Sept", "Oct", "Nov","Dic" ],
		dayNamesMin:["Do","Lu","Ma","Mi","Ju","Vi","Sa"],
		//numberOfMonths: 3,
		//showButtonPanel: true
			
		}); 
		$.datepicker.setDefaults($.datepicker.regional['es']);
		$.datepicker.addClass("calendario");
	});
</script>
<style>
calendario {
	font: 65.5% "Trebuchet MS", sans-serif;
	margin: 50px;
}	
body {
font: 75.5% "Trebuchet MS", sans-serif;
/*	margin: 50px;*/
}
	
</style>
</head>
<body>
<?php 	include_once "../../Modelado/Modelo_educacion.php";  ?>
<div> A&ntilde; Nueva Unidad Productiva << Volver Vista de Unidad Productiva </div>
<form id="frmRegistrar_productor" name="frmRegistrar_productor" enctype="multipart/form-data" method="post" action="" onsubmit="return validar('frmRegistrar_productor');" >
<div style="border-bottom: #003300 solid 1px">Productor </div>
  <table border="0" id="tablaRegistrar_productor">
    <tr>
      <td align="right">Id:</td>
      <td><input type="text" name="ProductorId_" id="ProductorId_"  disabled="disabled" value=""/></td>
    </tr>
    <tr>
      <td align="right">Nombre:</td>
      <td><input type="text" alt="requerido" name="ProductorNombre_" id="ProductorNombre" value="" title="Debe de Ingresar El Nombre" /></td>
    </tr>
    <tr>
      <td align="right">Apellido Paterno:</td>
      <td><input type="text" alt="requerido" name="ProductorApellidoPat_" id="ProductorApellidoPat_" value="" title="Debe de Ingresar el Apellido Parteno"/></td>
    </tr>
    <tr>
      <td align="right">Apellido Materno:</td>
      <td><input type="text" alt="requerido" name="ProductorApellidoMat_" id="ProductorApellidoMat_" value="" title="Debe de Ingresar el Apellido Marteno" /></td>
    </tr>
    <tr>
      <td align="right">Dni:</td>
      <td><input type="text" alt="requerido" name="ProductorDni_" id="ProductorDni_" title="Ingresar DNI " value=""/></td>
    </tr>
    <tr >
      <td align="right" >Fecha Ingreso:</td>
      <td>
      
      <input size="20" alt="requerido" name="ProductorFechaIngreso_"  id="ProductorFechaIngreso_"  title="Seleccione la Fecha de Ingreso del Productor"/>
      </td>
    </tr>
    <tr>
      <td align="right">Fecha Nac:</td>
      <td><input size="20" alt="requerido" name="ProductorFechaNac_"  id="ProductorFechaNac_" title="Seleccione la Fecha de Nacimento del Productor" /></td>
    </tr>
    <tr>
      <td align="right">Estado Civil:</td>
      <td><input type="text" name="ProductorEstadoCivil_" id="ProductorEstadoCivil_" value=""/></td>
    </tr>
    <tr>
      <td align="right">Profesion:</td>
      <td><input type="text" name="ProductorProfesion_" id="ProductorProfesion_" value=""/></td>
    </tr>
    <tr>
      <td align="right">Sexo:</td>
      <td><input type="text" name="Sexo_" id="ProductorSexo_" value=""/></td>
    </tr>
    <tr>
      <td align="right">Direccion:</td>
      <td><input type="text"  name="ProductorDireccion_" id="ProductorDireccion_" value=""/></td>
    </tr>
    <tr>
      <td align="right">Email:</td>
      <td><input type="text" name="ProductorEmail_" id="ProductorEmail_" value=""/></td>
    </tr>
    <tr>
      <td align="right">Foto:</td>
      <td><label for=""></label>
        <input name="imagen" type="file" id="imagen" value="" /></td>
    </tr>
    <tr>
      <td align="right">Grado De Instruccion:</td>
      <td><select title="requerido"  name="EducacionId_" id="EducacionId_" >
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
      <td align="right">Departamento:</td>
      <td><label for="departamento"></label>
        <select name="departamento" id="departamento">
        </select></td>
    </tr>
    <tr>
      <td align="right">Provincia:</td>
      <td><label for="provincia"></label>
        <select name="provincia" id="provincia">
        </select></td>
    </tr>
    <tr>
      <td align="right">Distrito:</td>
      <td><label for="distrito"></label>
        <select name="DistritoId_"  id="distrito">
        </select></td>
    </tr>
    <tr>
      <td align="right"><input type="submit" value="Registrar" name="btregistrar"></td>
      <td><input type="reset" value="Limpiar"/></td>
    </tr>
    <tr>
      <td align="right" colspan="2"><?php //echo $rpta;?></td>
    </tr>
    <tr>
      <td colspan="2"><div id="error"></div></td>
    </tr>
  </table>
</form>
<div id="divRespuesta"></div>
</div>
<script type="text/javascript" src="../js/validacion.js"></script>
</body>
</html>
