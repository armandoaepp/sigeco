<?php 
include_once "./Controlador_productor.php";
 	include_once "../../Modelado/Modelo_educacion.php";  
	 //$rptamo = CBuscar_productor(4);
	$rptamo = CBuscar_productor($_GET["id"]);
        $ProductorId = $rptamo["cuerpo"][0]["ProductorId"];
        $ProductorNombre = $rptamo["cuerpo"][0]["ProductorNombre"];
        $ProductorApellidoPat = $rptamo["cuerpo"][0]["ProductorApellidoPat"];
        $ProductorApellidoMat = $rptamo["cuerpo"][0]["ProductorApellidoMat"];
        $ProductorFechaIngreso = $rptamo["cuerpo"][0]["ProductorFechaIngreso"];
        $ProductorFechaNac = $rptamo["cuerpo"][0]["ProductorFechaNac"];
        $ProductorEstadoCivil = $rptamo["cuerpo"][0]["ProductorEstadoCivil"];
        $ProductorProfesion = $rptamo["cuerpo"][0]["ProductorProfesion"];
        $ProductorDni = $rptamo["cuerpo"][0]["ProductorDni"];
        $ProductorSexo = $rptamo["cuerpo"][0]["ProductorSexo"];
        $ProductorDireccion = $rptamo["cuerpo"][0]["ProductorDireccion"];
        $ProductorEmail = $rptamo["cuerpo"][0]["ProductorEmail"];
        $ProductorFoto = $rptamo["cuerpo"][0]["ProductorFoto"];
        $EducacionId = $rptamo["cuerpo"][0]["EducacionId"];
        $DistritoId = $rptamo["cuerpo"][0]["DistritoId"];
?>
<link  type="text/css" href="../css/ui-lightness/jquery-ui-1.9.2.custom.css" rel="stylesheet">
	<script src="../js/jquery-1.8.3.js"></script>
	<script src="../js/jquery-ui-1.9.2.custom.js"></script>
     <script src="../js/jquery-1.8.3.js"></script>
     <script type="text/javascript" src="../js/js_provincia.js"></script>
 
  
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
		
 
	});
</script>

<div id="divActualizar_productor">
  <form id="frmActualizar_productor" name="frmRegistrar_productor" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaActualizar_productor">
      <tr>
        <td align="right">Codigo:</td>
        <td><input type="text" name="ProductorId_" id="ProductorId_" value="<?php echo $ProductorId;?>"/></td>
      </tr>
      <tr>
        <td align="right">Nombre:</td>
        <td><input type="text" name="ProductorNombre_" id="ProductorNombre_" value="<?php echo $ProductorNombre;?>"/></td>
      </tr>
      <tr>
        <td align="right">Apellido Paterno:</td>
        <td><input type="text" name="ProductorApellidoPat_" id="ProductorApellidoPat_" value="<?php echo $ProductorApellidoPat;?>"/></td>
      </tr>
      <tr>
        <td align="right">Apellido Materno:</td>
        <td><input type="text" name="ProductorApellidoMat_" id="ProductorApellidoMat_" value="<?php echo $ProductorApellidoMat;?>"/></td>
      </tr>
      
      <!--
      <tr>
        <td align="right">Fecha Ingreso:</td>
        <td><input type="text" name="ProductorFechaIngreso_" id="ProductorFechaIngreso_" value="<?php //echo $ProductorFechaIngreso;?>"/></td>
      </tr>      
      <tr>
        <td align="right">Fecha Nacimiento:</td>
        <td><input type="text" name="ProductorFechaNac_" id="ProductorFechaNac_" value="<?php //echo $ProductorFechaNac;?>"/></td>
      </tr>
      -->
       <tr >
      <td align="right" >Fecha Ingreso:</td>
      <td><input size="20" alt="requerido" name="ProductorFechaIngreso_"  id="ProductorFechaIngreso_" value="<?php echo $ProductorFechaIngreso;?>" title="Seleccione la Fecha de Ingreso del Productor"/>
        </td>
    </tr>
    <tr>
      <td align="right">Fecha Nac:</td>
      <td><input size="20" alt="requerido" name="ProductorFechaNac_"  id="ProductorFechaNac_"  value="<?php echo $ProductorFechaNac;?>"  title="Seleccione la Fecha de Nacimento del Productor" />
      </td>
    </tr>
    
      <tr>
        <td align="right">Estado Civil:</td>
        <td><input type="text" name="ProductorEstadoCivil_" id="ProductorEstadoCivil_" value="<?php echo $ProductorEstadoCivil;?>"/></td>
      </tr>
      <tr>
        <td align="right">Profesion:</td>
        <td><input type="text" name="ProductorProfesion_" id="ProductorProfesion_" value="<?php echo $ProductorProfesion;?>"/></td>
      </tr>
      <tr>
        <td align="right">DNIi:</td>
        <td><input type="text" name="ProductorDni_" id="ProductorDni_" value="<?php echo $ProductorDni;?>"/></td>
      </tr>
      <tr>
        <td align="right">Sexo:</td>
        <td><input type="text" name="ProductorSexo_" id="ProductorSexo_" value="<?php echo $ProductorSexo;?>"/></td>
      </tr>
      <tr>
        <td align="right">Direccion:</td>
        <td><input type="text" name="ProductorDireccion_" id="ProductorDireccion_" value="<?php echo $ProductorDireccion;?>"/></td>
      </tr>
      <tr>
        <td align="right">Email:</td>
        <td><input type="text" name="ProductorEmail_" id="ProductorEmail_" value="<?php echo $ProductorEmail;?>"/></td>
      </tr>
      <tr>
        <td align="right">Foto:</td>
        <td><input type="text" name="ProductorFoto_" id="ProductorFoto_" value="<?php echo $ProductorFoto;?>"/></td>
      </tr>
      <tr>
        <td align="right">EducacionId:</td>
        <td><input type="text" name="EducacionId_" id="EducacionId_" value="<?php echo $EducacionId;?>"/></td>
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
					//echo '<option value="'.$data["cuerpo"][$i]["EducacionId"].'">'.$data["cuerpo"][$i]["EducacionNivel"].'</option>'; 
					//'<option value="'. $fila[0].'"'. if($ProductorId==$fila[0]) echo "selected"'>'.$fila[1].'</option>';
						?>
            <option value=" <?php echo $data["cuerpo"][$i]["EducacionId"] ?>" <? if($ProductorId==$data["cuerpo"][$i]["EducacionId"] ) echo "selected" ?>  >
            <?php  echo $data["cuerpo"][$i]["EducacionNivel"]; ?>
            </option>
            <?php
					}
				}
				
			}catch(exception $e){return $e->getMessage();}?>
          </select></td>
      </tr>
      <tr>
        <td align="right">Departamento:</td>
        <td><label for="departamento"></label>
          <select  name="departamento" id="departamento">
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
        <td align="right">DistritoId:</td>
        <td><input type="text" name="DistritoId_" id="DistritoId_" value="<?php echo $DistritoId;?>"/></td>
      </tr>
      <tr>
        <td align="right"><input type="submit" value="Actualizar" name="btActualizar"></td>
        <td></td>
      </tr>
      <tr>
        <td align="right" colspan="2"><?php echo $rpta;?></td>
      </tr>
    </table>
  </form>
</div>
