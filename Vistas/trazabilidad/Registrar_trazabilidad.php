<div id="divRegistrar_trazabilidad">
  <form id="frmRegistrar_trazabilidad" name="frmRegistrar_trazabilidad" method="post" action="<?php echo $accionf;?>">
    <fieldset>
      <legend> Nuevo Trazabilidad</legend>
      <p>
        <label for="TrazabilidadId_">TrazabilidadId : </label>
        <input type="text" name="TrazabilidadId_" id="TrazabilidadId_" value=""/>
      </p>
      <p>
        <label for="TrazabilidadParcela_">Parcela : </label>
        <input type="text" name="TrazabilidadParcela_" id="TrazabilidadParcela_" value=""/>
      </p>
      <p>
        <label for="ParcelaId_">ParcelaId : </label>
        <input type="text" name="ParcelaId_" id="ParcelaId_" value=""/>
      </p>
      <p>
        <label for="AcopioId_">AcopioId : </label>
        <input type="text" name="AcopioId_" id="AcopioId_" value=""/>
      </p>
      <div class="botones">
        <button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button>
        <button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button>
      </div>
    </fieldset>
  </form>
</div>
