<div id="divActualizar_pais">
<form id="frmActualizar_pais" name="frmRegistrar_pais" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Pais</legend>
<p><label for="PaisId_">PaisId : </label><input type="text" name="PaisId_" id="PaisId_" value="<?php echo $PaisId;?>"/></p>
<p><label for="PaisNombre_">PaisNombre : </label><input type="text" name="PaisNombre_" id="PaisNombre_" value="<?php echo $PaisNombre;?>"/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>