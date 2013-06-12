<?php

/*session_start();
$IdProductor=9;*/

//$IdProductor=$_SESSION["ProductorId"];
include_once "../educacion/Controlador_educacion.php";
?>
<div id="divRegistrar_familiar">
<form id="frmRegistrar_familiar" name="frmRegistrar_familiar" method="post" action="">
<table border="0" id="tablaRegistrar_familiar">
<!--
<tr><td align="right">FamiliarId:</td><td><input type="text" name="FamiliarId_" id="FamiliarId_" value=""/></td></tr>
-->
<tr><td align="right">Apellidos:</td><td><input type="text" name="FamiliarApellido_" id="FamiliarApellido_" value=""/></td></tr>
<tr><td align="right">Nombres:</td><td><input type="text" name="FamiliarNombre_" id="FamiliarNombre_" value=""/></td></tr>
<tr><td align="right">Sexo:</td><td>
<input name="FamiliarSexo_" class="validate[required] radio"  type="radio" value="M" />
        Masculino
        <input name="FamiliarSexo_"  type="radio" value="F" class="validate[required] radio" />
        Femenino
        </label>

</td></tr>
<tr><td align="right">FechaNac:</td><td><input type="text" name="FamiliarFechaNac_" id="FamiliarFechaNac_" value=""/></td></tr>
<tr><td align="right">Parentesco:</td><td><input type="text" name="FamiliarParentesco_" id="FamiliarParentesco_" value=""/></td></tr>
<tr><td align="right">Grado de Instruccion:</td><td>
<select title="requerido"  name="EducacionId_" id="EducacionId_" class="validate[required]" >
          <?php 

	// Llenar el combo Grado de Instruccion 
	
		$data=CListadoSimple_educacion ($IdProductor);
		  try{
		 		$cantele=count($data["cuerpo"]);
				if($cantele>0){
				for($i=0;$i<$cantele;$i++){
					echo '<option value="'.$data["cuerpo"][$i]["EducacionId"].'">'.$data["cuerpo"][$i]["EducacionNivel"].'</option>'; 
					}
				}
				
			}catch(exception $e){return $e->getMessage();}
			
			?>
            
        </select>
</td></tr>
<tr><td align="right">Ocupacion:</td><td><input type="text" name="FamiliarOcupacion_" id="FamiliarOcupacion_" value=""/></td></tr>


<tr><td align="right"><input type="submit" value="Registrar" name="btregistrar"></td><td><input type="reset" value="Limpiar"/></td></tr>
<tr><td align="right" colspan="2"></td></tr>
</table>
</form>
</div>