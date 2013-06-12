<script>
/*Iniciar los Calendarios */
   	$(document).ready(function(){					
		 ActualizarCultivoAsociado();		
		/*para inicar la validacion del frm */
		//jQuery("#frmRegistrar_productor").validationEngine('attach');			
	});
</script>

<div id="divActualizar_cultivoasociado">
  <form id="frmActualizar_cultivoasociado" name="frmRegistrar_cultivoasociado" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaRegistrar_cultivoasociado">
      <tr>
        <td align="right">Nombre:</td>
        <td colspan="2"><input type="text" name="CultivoAsociadoNombre_" id="CultivoAsociadoNombre_" class="validate[required] text-input" value="<?php echo $CultivoAsociadoNombre;?>"/></td>
      </tr>
      <tr>
        <td align="right">Nota:</td>
        <td colspan="2">
          <textarea name="CultivoAsociadoNota_" id="CultivoAsociadoNota" cols="45" rows="5"><?php echo $CultivoAsociadoNota;?></textarea></td>
      </tr>
      <tr>
        <td align="right"><input type="hidden" name="CultivoAsociadoId_" id="CultivoAsociadoId_" value="<?php echo $CultivoAsociadoId;?>"/></td>
        <td align="right"><input type="submit" value="Actualizar" name="btactualizar"></td>
        <td><input type="button" value="Cancelar" onclick="Cancelar('Modal_CultivoAsociado','frmActualizar_cultivoasociado');"/></td>
      </tr>
    </table>
  </form>
</div>
