<div id="divRegistrar_guiaserie">
<form id="frmRegistrar_guiaserie" name="frmRegistrar_guiaserie" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Guiaserie</legend>
<p><label for="GuiaSerieId_">GuiaSerieId : </label><input type="text" name="GuiaSerieId_" id="GuiaSerieId_" value=""/></p>
<p><label for="GuiaSerieNumero_">GuiaSerieNumero : </label><input type="text" name="GuiaSerieNumero_" id="GuiaSerieNumero_" value=""/></p>
<p><label for="GuiaSerieEstado_">GuiaSerieEstado : </label><input type="text" name="GuiaSerieEstado_" id="GuiaSerieEstado_" value=""/></p>
<p><label for="SerieId_">SerieId : </label><input type="text" name="SerieId_" id="SerieId_" value=""/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>