<div id="divActualizar_proceso">
  <form id="frmActualizar_proceso" name="frmRegistrar_proceso" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaActualizar_proceso">
      <tr>
        <td align="right">ProcesoId:</td>
        <td><input type="text" name="ProcesoId_" id="ProcesoId_" value="<?php echo $ProcesoId;?>"/></td>
      </tr>
      <tr>
        <td align="right">ProcesoDespulpadora:</td>
        <td><input type="text" name="ProcesoDespulpadora_" id="ProcesoDespulpadora_" value="<?php echo $ProcesoDespulpadora;?>"/></td>
      </tr>
      <tr>
        <td align="right">ProcesoTanqueTina:</td>
        <td><input type="text" name="ProcesoTanqueTina_" id="ProcesoTanqueTina_" value="<?php echo $ProcesoTanqueTina;?>"/></td>
      </tr>
      <tr>
        <td align="right">ProcesoCompostera:</td>
        <td><input type="text" name="ProcesoCompostera_" id="ProcesoCompostera_" value="<?php echo $ProcesoCompostera;?>"/></td>
      </tr>
      <tr>
        <td align="right">ProcesoTiempoRecoleccion:</td>
        <td><input type="text" name="ProcesoTiempoRecoleccion_" id="ProcesoTiempoRecoleccion_" value="<?php echo $ProcesoTiempoRecoleccion;?>"/></td>
      </tr>
      <tr>
        <td align="right">ProcesoTiempoFermentacion:</td>
        <td><input type="text" name="ProcesoTiempoFermentacion_" id="ProcesoTiempoFermentacion_" value="<?php echo $ProcesoTiempoFermentacion;?>"/></td>
      </tr>
      <tr>
        <td align="right">ProcesoTipoFermentacion:</td>
        <td><input type="text" name="ProcesoTipoFermentacion_" id="ProcesoTipoFermentacion_" value="<?php echo $ProcesoTipoFermentacion;?>"/></td>
      </tr>
      <tr>
        <td align="right">ProcesoNumeroLavado:</td>
        <td><input type="text" name="ProcesoNumeroLavado_" id="ProcesoNumeroLavado_" value="<?php echo $ProcesoNumeroLavado;?>"/></td>
      </tr>
      <tr>
        <td align="right">ProcesoTiempoSecado:</td>
        <td><input type="text" name="ProcesoTiempoSecado_" id="ProcesoTiempoSecado_" value="<?php echo $ProcesoTiempoSecado;?>"/></td>
      </tr>
      <tr>
        <td align="right">ProcesoDescripcion:</td>
        <td><input type="text" name="ProcesoDescripcion_" id="ProcesoDescripcion_" value="<?php echo $ProcesoDescripcion;?>"/></td>
      </tr>
      <tr>
        <td align="right">TipoSeleccionId:</td>
        <td><input type="text" name="TipoSeleccionId_" id="TipoSeleccionId_" value="<?php echo $TipoSeleccionId;?>"/></td>
      </tr>
      <tr>
        <td align="right">TipoSecadoId:</td>
        <td><input type="text" name="TipoSecadoId_" id="TipoSecadoId_" value="<?php echo $TipoSecadoId;?>"/></td>
      </tr>
      <tr>
        <td align="right">ProcesoPozoInorganico:</td>
        <td><input type="text" name="ProcesoPozoInorganico_" id="ProcesoPozoInorganico_" value="<?php echo $ProcesoPozoInorganico;?>"/></td>
      </tr>
      <tr>
        <td align="right">ProcesoPozoMiel:</td>
        <td><input type="text" name="ProcesoPozoMiel_" id="ProcesoPozoMiel_" value="<?php echo $ProcesoPozoMiel;?>"/></td>
      </tr>
      <tr>
        <td align="right">UnidadProductivaId:</td>
        <td><input type="text" name="UnidadProductivaId_" id="UnidadProductivaId_" value="<?php echo $UnidadProductivaId;?>"/></td>
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
