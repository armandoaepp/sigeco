<div id="divRegistrar_proceso">
  <?php 
include_once "../tiposecado/Controlador_tiposecado.php";
include_once "../tiposeleccion/Controlador_tiposeleccion.php";
include_once "../cixphp.php";
		$cix = new CixPHP();
		//$ProcesoTiempoRecoleccion="23:00";

?>
  <form id="frmRegistrar_proceso" name="frmRegistrar_proceso" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaRegistrar_proceso">
      <tr>
        <td align="right">Máquina Despulpadora:</td>
        <td><input type="checkbox" name="ProcesoDespulpadora_" id="ProcesoDespulpadora_" <?php echo $ProcesoDespulpadora;?>/>
        </td>
      </tr>
      <tr>
        <td align="right">Tanque Tina:</td>
        <td><input type="checkbox" name="ProcesoTanqueTina_" id="ProcesoTanqueTina_"   <?php echo $ProcesoTanqueTina;?>/>
        </td>
      </tr>
      <tr>
        <td align="right">Compostera:</td>
        <td><input type="checkbox" name="ProcesoCompostera_" id="ProcesoCompostera_"  <?php echo $ProcesoCompostera;?>/>
         </td>
      </tr>
      <tr>
        <td align="right">Tiempo pasado entre Recolección y Procesamiento:</td>
        <td><input type="number" name="ProcesoTiempoRecoleccion_" id="ProcesoTiempoRecoleccion_" value="<?php echo $ProcesoTiempoRecoleccion;?>"/>
          [h]</td>
      </tr>
      <tr>
        <td align="right">Tiempo de Fermentación:</td>
        <td><input type="number" name="ProcesoTiempoFermentacion_" id="ProcesoTiempoFermentacion_" value="<?php echo $ProcesoTiempoFermentacion;?>"/>
          [h]</td>
      </tr>
      <tr>
        <td align="right">Tipo de Fermentación:</td>
        <td>
          <select name="ProcesoTipoFermentacion_" id="ProcesoTipoFermentacion_">
            <option value=""></option>
            <option  value="Anaeróbica" <?php echo $Anaeróbica;?>>Anaeróbica</option>
            <option value="Aeróbica" <?php echo $Aeróbica;?>>Aeróbica</option>
          </select></td>
      </tr>
      <tr>
        <td align="right">Cuantas veces ha sido Lavado:</td>
        <td><input type="text" name="ProcesoNumeroLavado_" id="ProcesoNumeroLavado_" value="<?php echo $ProcesoNumeroLavado;?>"/></td>
      </tr>
      <tr>
        <td align="right">TipoSecado:</td>
        <td><select name="TipoSecadoId_" id="TipoSecadoId_">
            <?php 
		// Llenar el combo 			
		$data=CListadoSimple_tiposecado();				 	
		 $dataSelect = $cix->ImprimeCuerpoSelect($data,"TipoSecadoId","TipoSecado",$TipoSecadoId);  
		 echo $dataSelect ;
			?>
         
          </select></td>
      </tr>
      <tr>
        <td align="right">Tiempo de Secado:</td>
        <td><input type="number" name="ProcesoTiempoSecado_" id="ProcesoTiempoSecado_" value="<?php echo $ProcesoTiempoSecado;?>"/>
          [h]</td>
      </tr>
      <tr>
        <td align="right">Tipo de Seleccion:</td>
        <td><select name="TipoSeleccionId_" id="TipoSeleccionId_">
            <?php 
		// Llenar el combo 			
		$data=CListadoSimple_tiposeleccion();	 				 	
		 $dataSelect = $cix->ImprimeCuerpoSelect($data,"TipoSeleccionId","TipoSeleccion",$TipoSeleccionId);  
		 echo $dataSelect ;
			?>
          </select></td>
      </tr>
      <tr>
        <td align="right"><div align="left">Gestión Ambiental</div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">Pozo de Desechos Inorgánicos:</td>
        <td><input type="checkbox" name="ProcesoPozoInorganico_" id="ProcesoPozoInorganico_" <?php echo $ProcesoPozoInorganico;?> /></td>
      </tr>
      <tr>
        <td align="right">Pozo de Aguas Mieles:</td>
        <td><input type="checkbox" name="ProcesoPozoMiel_" id="ProcesoPozoMiel_" <?php echo $ProcesoPozoMiel;?> /></td>
      </tr>
      <tr>
        <td align="right">Nota:</td>
        <td><textarea name="ProcesoDescripcion_" id="ProcesoDescripcion_" cols="45" rows="5"><?php echo $ProcesoDescripcion;?></textarea></td>
      </tr>
      <tr>
        <td align="right">
        <input type="hidden" name="ProcesoId_" id="ProcesoId_" value="<?php echo $ProcesoId;?>" /></td>
        <td><input type="submit" value="Registrar" name="btregistrar" />
          <a href="#" id="Cancelar_proceso">Cancelar</a></td>
      </tr>
      <tr>
        <td align="right" colspan="2"><?php echo $rpta;?></td>
      </tr>
    </table>
  </form>
</div>
