<div id="divActualizar_serie">
<form id="frmActualizar_serie" name="frmRegistrar_serie" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Serie</legend>

<p><label for="SerieNumero_">Serie Numero : </label><input type="text" name="SerieNumero_" id="SerieNumero_" maxlength="3"  required="required"  value="<?php echo $SerieNumero;?>"/></p>
<p><label for="SerieInicio_">Serie Numero Inicio : </label><input type="text" name="SerieInicio_" id="SerieInicio_" maxlength="6"  required="required"  value="<?php echo $SerieInicio;?>"/></p>
<p><label for="SerieFin_">Serie Numero Fin : </label><input type="text" name="SerieFin_" id="SerieFin_" maxlength="6"  required="required"  value="<?php echo $SerieFin;?>"/></p>
<p><label for="SerieEstado_">SerieEstado : </label>
<select name="SerieEstado_" id="SerieEstado_"  >
<option value="">Seleccione</option>
  <option value="A" <?php if($SerieEstado=="A")echo ' selected="selected"';?> >Activo</option>
  <option value="E" <?php if($SerieEstado=="E")echo ' selected="selected"';?> >Inactivo</option>  
</select>
</p>

<!--
<input type="text" name="SerieEstado_" id="SerieEstado_" value="<?php echo $SerieEstado;?>"/>
<p><label for="SerieId_">SerieId : </label><input type="text" name="SerieId_" id="SerieId_" value="<?php echo $SerieId;?>"/></p>
<p><label for="SerieFechaReg_">SerieFechaReg : </label><input type="text" name="SerieFechaReg_" id="SerieFechaReg_" value="<?php echo $SerieFechaReg;?>"/></p>
<p><label for="UsuarioId_">UsuarioId : </label><input type="text" name="UsuarioId_" id="UsuarioId_" value="<?php echo $UsuarioId;?>"/></p>
<p><label for="PeriodoId_">PeriodoId : </label><input type="text" name="PeriodoId_" id="PeriodoId_" value="<?php echo $PeriodoId;?>"/></p>

-->

<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>