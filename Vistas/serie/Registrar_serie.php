<div id="divRegistrar_serie">
<form id="frmRegistrar_serie" name="frmRegistrar_serie" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Serie</legend>

<p><label for="SerieNumero_">Numero Serie: </label><input type="text" name="SerieNumero_" id="SerieNumero_"  maxlength="3"  required="required" value=""/></p>
<p><label for="SerieInicio_">Serie Numero Inicio : </label><input type="text" name="SerieInicio_" id="SerieInicio_" maxlength="6"  required="required"  value=""/></p>
<p><label for="SerieFin_">Serie Numero Fin : </label><input type="text" name="SerieFin_" id="SerieFin_"  maxlength="6"  required="required" value=""/></p>
<p><label for="SerieEstado_">Serie Estado : </label>
<select name="SerieEstado_" id="SerieEstado_"  >
<option value="">Seleccione</option>
  <option value="A">Activo</option>
  <option value="E">Inactivo</option>  
</select>


<!--<input type="text"  value=""/></p>
<p><p><label for="SerieFechaReg_">Serie Fecha Reg : </label><input type="text" name="SerieFechaReg_" id="SerieFechaReg_" value=""/></p><label for="SerieId_">SerieId : </label><input type="text" name="SerieId_" id="SerieId_" value=""/></p>
<p><label for="UsuarioId_">UsuarioId : </label><input type="text" name="UsuarioId_" id="UsuarioId_" value=""/></p>
<p><label for="PeriodoId_">PeriodoId : </label><input type="text" name="PeriodoId_" id="PeriodoId_" value=""/></p>
-->
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
<?php echo $rpta?>
</div>