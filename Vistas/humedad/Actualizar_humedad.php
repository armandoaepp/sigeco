<div id="divActualizar_humedad">
<form id="frmActualizar_humedad" name="frmRegistrar_humedad" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Humedad</legend>
<p><label for="HumedadId_">HumedadId : </label><input type="text" name="HumedadId_" id="HumedadId_" value="<?php echo $HumedadId;?>"/></p>
<p><label for="HumedadLibreTara_">HumedadLibreTara : </label><input type="text" name="HumedadLibreTara_" id="HumedadLibreTara_" value="<?php echo $HumedadLibreTara;?>"/></p>
<p><label for="HumedadDescuentoHumedad_">HumedadDescuentoHumedad : </label><input type="text" name="HumedadDescuentoHumedad_" id="HumedadDescuentoHumedad_" value="<?php echo $HumedadDescuentoHumedad;?>"/></p>
<p><label for="HumedadKgNetos_">HumedadKgNetos : </label><input type="text" name="HumedadKgNetos_" id="HumedadKgNetos_" value="<?php echo $HumedadKgNetos;?>"/></p>
<p><label for="HumedadImporteBruto_">HumedadImporteBruto : </label><input type="text" name="HumedadImporteBruto_" id="HumedadImporteBruto_" value="<?php echo $HumedadImporteBruto;?>"/></p>
<p><label for="HumedadImporteDescuento_">HumedadImporteDescuento : </label><input type="text" name="HumedadImporteDescuento_" id="HumedadImporteDescuento_" value="<?php echo $HumedadImporteDescuento;?>"/></p>
<p><label for="HumedadImporteTotal_">HumedadImporteTotal : </label><input type="text" name="HumedadImporteTotal_" id="HumedadImporteTotal_" value="<?php echo $HumedadImporteTotal;?>"/></p>
<p><label for="AcopioId_">AcopioId : </label><input type="text" name="AcopioId_" id="AcopioId_" value="<?php echo $AcopioId;?>"/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>