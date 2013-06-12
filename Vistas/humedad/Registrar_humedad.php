<div id="div_humedad">

<form id="frmRegistrar_humedad" name="frmRegistrar_humedad" method="post" action="<?php echo $accionf;?>">
<!--<form id="<?php echo $frmModalidad;?>" name="<?php echo $frmModalidad;?>" method="post" action="<?php echo $accionf;?>">-->
    <fieldset>
      <legend> <?php echo  $Modalidad;?> </legend>
      <p>
      <!--  <label for="HumedadId_">HumedadId : </label>-->
        <input type="hidden" name="HumedadId_" id="HumedadId_" value="<?php echo $HumedadId ;?>"/>
      </p>
      <p>
        <label for="HumedadLibreTara_">Kg. Libre de Tara : </label>
        <input type="text" name="HumedadLibreTara_" id="HumedadLibreTara_" value="<?php echo $HumedadLibreTara ;?>"/>
        kg</p>
      <p>
        <label for="HumedadDescuentoHumedad_">Total Cantidad Dsc. Humedad : </label>
        <input type="text" name="HumedadDescuentoHumedad_" id="HumedadDescuentoHumedad_" value="<?php echo $HumedadDescuentoHumedad ;?>"/>
        kg</p>
      <p>
        <label for="HumedadKgNetos_">Kg. Netos : </label>
        <input type="text" name="HumedadKgNetos_" id="HumedadKgNetos_" value="<?php echo $HumedadKgNetos ;?>"/>
        kg</p>
      <p>
        <label for="HumedadImporteBruto_">Importe Bruto : </label>
        <input type="text" name="HumedadImporteBruto_" id="HumedadImporteBruto_" value="<?php echo $HumedadImporteBruto ;?>"/>
        S/.</p>
      <p>
        <label for="HumedadImporteDescuento_">Total a Descontar : </label>
        <input type="text" name="HumedadImporteDescuento_" id="HumedadImporteDescuento_" value="<?php echo $HumedadImporteDescuento ;?>"/>
        S/.</p>
      <p>
        <label for="HumedadImporteTotal_">Total a Pagar: </label>
        <input type="text" name="HumedadImporteTotal_" id="HumedadImporteTotal_" value="<?php echo $HumedadImporteTotal ;?>"/>
        S/.</p>
    <!--  <p>
        <label for="AcopioId_">AcopioId : </label>
       <input type="hidden" name="AcopioId_" id="AcopioId_" value="<?php echo $AcopioId ;?>"/>
      </p> -->
      <div class="botones">
        <button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/> Registrar</button>
        <button  type="button" id="btnCancelar" onclick="linkCancelarHumedad();return false;"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button>
      </div>
    </fieldset>
  </form>
</div>
