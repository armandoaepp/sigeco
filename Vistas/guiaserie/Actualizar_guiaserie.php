<div id="divActualizar_guiaserie">
<form id="frmActualizar_guiaserie" name="frmRegistrar_guiaserie" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Guiaserie</legend>
<p><label for="GuiaSerieId_">GuiaSerieId : </label><input type="text" name="GuiaSerieId_" id="GuiaSerieId_" value="<?php echo $GuiaSerieId;?>"/></p>
<p><label for="GuiaSerieNumero_">GuiaSerieNumero : </label><input type="text" name="GuiaSerieNumero_" id="GuiaSerieNumero_" value="<?php echo $GuiaSerieNumero;?>"/></p>
<p><label for="GuiaSerieEstado_">GuiaSerieEstado : </label><input type="text" name="GuiaSerieEstado_" id="GuiaSerieEstado_" value="<?php echo $GuiaSerieEstado;?>"/></p>
<p><label for="SerieId_">SerieId : </label><input type="text" name="SerieId_" id="SerieId_" value="<?php echo $SerieId;?>"/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>