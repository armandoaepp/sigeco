<div id="divRegistrar_proyecto">
<form id="frmRegistrar_proyecto" name="frmRegistrar_proyecto" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Proyecto</legend>
<p><label for="Proyectoid_">Proyectoid : </label><input type="text" name="Proyectoid_" id="Proyectoid_" value=""/></p>
<p><label for="ProyectoNombre_">ProyectoNombre : </label><input type="text" name="ProyectoNombre_" id="ProyectoNombre_" value=""/></p>
<p><label for="ProyectoDescripcion_">ProyectoDescripcion : </label><input type="text" name="ProyectoDescripcion_" id="ProyectoDescripcion_" value=""/></p>
<p><label for="ProyectoFechaInicio_">ProyectoFechaInicio : </label><input type="text" name="ProyectoFechaInicio_" id="ProyectoFechaInicio_" value=""/></p>
<p><label for="ProyectoDuracion_">ProyectoDuracion : </label><input type="text" name="ProyectoDuracion_" id="ProyectoDuracion_" value=""/></p>
<p><label for="ProyectoFechaTermino_">ProyectoFechaTermino : </label><input type="text" name="ProyectoFechaTermino_" id="ProyectoFechaTermino_" value=""/></p>
<p><label for="ProyectoCoordinador_">ProyectoCoordinador : </label><input type="text" name="ProyectoCoordinador_" id="ProyectoCoordinador_" value=""/></p>
<p><label for="ProyectoNombreArchivo_">ProyectoNombreArchivo : </label><input type="text" name="ProyectoNombreArchivo_" id="ProyectoNombreArchivo_" value=""/></p>
<p><label for="ProyectoOrgFinancia_">ProyectoOrgFinancia : </label><input type="text" name="ProyectoOrgFinancia_" id="ProyectoOrgFinancia_" value=""/></p>
<p><label for="ProyectoMonto_">ProyectoMonto : </label><input type="text" name="ProyectoMonto_" id="ProyectoMonto_" value=""/></p>
<p><label for="ProyectoEstado_">ProyectoEstado : </label><input type="text" name="ProyectoEstado_" id="ProyectoEstado_" value=""/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>