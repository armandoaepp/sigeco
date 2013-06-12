<script>
/*Iniciar los Calendarios */
   	$(document).ready(function(){					
		 RegistrarCultivoAsociado();		
		/*para inicar la validacion del frm */
		//jQuery("#frmRegistrar_productor").validationEngine('attach');			
	});
</script>

<div id="divRegistrar_cultivoasociado">
  <form id="frmRegistrar_cultivoasociado" name="frmRegistrar_cultivoasociado" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaRegistrar_cultivoasociado">
      <tr>
        <td align="right">Nombre:</td>
        <td colspan="2"><input type="text" name="CultivoAsociadoNombre_" id="CultivoAsociadoNombre_" class="validate[required] text-input" value=""/></td>
      </tr>
      <tr>
        <td align="right">Nota:</td>
        <td colspan="2">
          <textarea name="CultivoAsociadoNota_" id="CultivoAsociadoNota" cols="45" rows="5"></textarea></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td align="right"><input type="submit" value="Registrar" name="btregistrar"></td>
        <td><input type="button" value="Cancelar" onclick="Cancelar('Modal_CultivoAsociado','frmRegistrar_cultivoasociado');"/></td>
      </tr>
    </table>
  </form>
</div>
