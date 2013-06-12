<script>
/*Iniciar los Calendarios */
   	$(document).ready(function(){		
	ActualizarGeoreferencia();
		 //$("input[type=text],select").addClass("text ui-widget-content ui-corner-all widthInput");
		
	});
	</script>

<form id="frmActualizar_georeferencia" name="frmRegistrar_georeferencia" method="post" action="<?php echo $accionf;?>">
  <table border="0" id="tablaActualizar_georeferencia">
    <tr>
      <td width="146" align="right">Codigo:</td>
      <td colspan="2"><input type="hidden" name="GeoReferenciaId_" id="GeoReferenciaId_" value="<?php echo $GeoReferenciaId;?>"/> <p style="color:#999999"><?php echo $modalidad ?></p></td>
    </tr>
    <tr>
      <td align="right">Geo Referencia Latitud:</td>
      <td colspan="2"><input type="text" name="GeoReferenciaLatitud_" id="GeoReferenciaLatitud_" value="<?php echo $GeoReferenciaLatitud;?>"/></td>
    </tr>
    <tr>
      <td align="right">Geo Referencia Longitud:</td>
      <td colspan="2"><input type="text" name="GeoReferenciaLongitud_" id="GeoReferenciaLongitud_" value="<?php echo $GeoReferenciaLongitud;?>"/></td>
    </tr>
    <tr>
      <td align="right">Geo Referencia Altitud:</td>
      <td colspan="2"><input type="text" name="GeoReferenciaAltitud_" id="GeoReferenciaAltitud_" value="<?php echo $GeoReferenciaAltitud;?>"/></td>
    </tr>
    <tr>
      <td align="right">Geo Referencia Tipo Gps:</td>
      <td colspan="2"><input type="text" name="GeoReferenciaTipoGps_" id="GeoReferenciaTipoGps_" value="<?php echo $GeoReferenciaTipoGps;?>"/></td>
    </tr>
    <!-- 
   <tr>
      <td align="right">ParcelaId:</td>
      <td colspan="2"><input type="text" name="ParcelaId_" id="ParcelaId_" value="<?php //echo $ParcelaId;?>"/></td>
    </tr>
    -->
    <tr>
      <td></td>
      <td align="right"><input type="submit" value="Registrar" name="btregistrar"></td>
        <td><input type="button" value="Cancelar" onclick="Cancelar('Modal_Georeferencia','frmActualizar_georeferencia');"/></td>
    </tr>
  </table>
</form>
