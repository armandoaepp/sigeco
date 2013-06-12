<div id="divRegistrar_guiaacopio">
<form id="frmRegistrar_guiaacopio" name="frmRegistrar_guiaacopio" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Guiaacopio</legend>
<p><label for="GuiaAcopioId_">GuiaAcopioId : </label><input type="text" name="GuiaAcopioId_" id="GuiaAcopioId_" value=""/></p>
<p><label for="GuiaAcopioNumero_">GuiaAcopioNumero : </label><input type="text" name="GuiaAcopioNumero_" id="GuiaAcopioNumero_" value=""/></p>
<p><label for="GuiaAcopioEstado_">GuiaAcopioEstado : </label><input type="text" name="GuiaAcopioEstado_" id="GuiaAcopioEstado_" value=""/></p>
<p><label for="UsuarioId_">UsuarioId : </label><input type="text" name="UsuarioId_" id="UsuarioId_" value=""/></p>
<p><label for="GuiaSerieId_">GuiaSerieId : </label><input type="text" name="GuiaSerieId_" id="GuiaSerieId_" value=""/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>