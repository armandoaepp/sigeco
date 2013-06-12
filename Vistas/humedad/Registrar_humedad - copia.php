<div id="divRegistrar_humedad">
  <form id="frmRegistrar_humedad" name="frmRegistrar_humedad" method="post" action="<?php echo $accionf;?>">
    <fieldset>
      <legend> Nuevo Humedad</legend>
      <p>
      <!--  <label for="HumedadId_">HumedadId : </label>-->
        <input type="hidden" name="HumedadId_" id="HumedadId_" value=""/>
      </p>
      <p>
        <label for="HumedadLibreTara_">Kg. Libre de Tara : </label>
        <input type="text" name="HumedadLibreTara_" id="HumedadLibreTara_" value=""/>
        kg</p>
      <p>
        <label for="HumedadDescuentoHumedad_">Total Cantidad Dsc. Humedad : </label>
        <input type="text" name="HumedadDescuentoHumedad_" id="HumedadDescuentoHumedad_" value=""/>
        kg</p>
      <p>
        <label for="HumedadKgNetos_">Kg. Netos : </label>
        <input type="text" name="HumedadKgNetos_" id="HumedadKgNetos_" value=""/>
        kg</p>
      <p>
        <label for="HumedadImporteBruto_">Importe Bruto : </label>
        <input type="text" name="HumedadImporteBruto_" id="HumedadImporteBruto_" value=""/>
        S/.</p>
      <p>
        <label for="HumedadImporteDescuento_">Total a Descontar : </label>
        <input type="text" name="HumedadImporteDescuento_" id="HumedadImporteDescuento_" value=""/>
        S/.</p>
      <p>
        <label for="HumedadImporteTotal_">Total a Pagar: </label>
        <input type="text" name="HumedadImporteTotal_" id="HumedadImporteTotal_" value=""/>
        S/.</p>
      <p>
     <!--   <label for="AcopioId_">AcopioId : </label>-->
        <input type="hidden" name="AcopioId_" id="AcopioId_" value=""/>
      </p>
      <div class="botones">
        <button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button>
        <button  type="button" id="btnCancelar" onclick="linkCancelarHumedad();return false;"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button>
      </div>
    </fieldset>
  </form>
</div>
