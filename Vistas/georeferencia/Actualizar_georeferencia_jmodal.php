<div id="divActualizar_georeferencia">
  <form id="frmActualizar_georeferencia" name="frmRegistrar_georeferencia" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaActualizar_georeferencia">
      <tr>
        <td align="right">GeoReferenciaId:</td>
        <td><input type="text" name="GeoReferenciaId_" id="GeoReferenciaId_" value="<?php echo $GeoReferenciaId;?>"/></td>
      </tr>
      <tr>
        <td align="right">GeoReferenciaLatitud:</td>
        <td><input type="text" name="GeoReferenciaLatitud_" id="GeoReferenciaLatitud_" value="<?php echo $GeoReferenciaLatitud;?>"/></td>
      </tr>
      <tr>
        <td align="right">GeoReferenciaLongitud:</td>
        <td><input type="text" name="GeoReferenciaLongitud_" id="GeoReferenciaLongitud_" value="<?php echo $GeoReferenciaLongitud;?>"/></td>
      </tr>
      <tr>
        <td align="right">GeoReferenciaAltitud:</td>
        <td><input type="text" name="GeoReferenciaAltitud_" id="GeoReferenciaAltitud_" value="<?php echo $GeoReferenciaAltitud;?>"/></td>
      </tr>
      <tr>
        <td align="right">GeoReferenciaTipoGps:</td>
        <td><input type="text" name="GeoReferenciaTipoGps_" id="GeoReferenciaTipoGps_" value="<?php echo $GeoReferenciaTipoGps;?>"/></td>
      </tr>
      <tr>
        <td align="right">ParcelaId:</td>
        <td><input type="text" name="ParcelaId_" id="ParcelaId_" value="<?php echo $ParcelaId;?>"/></td>
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
