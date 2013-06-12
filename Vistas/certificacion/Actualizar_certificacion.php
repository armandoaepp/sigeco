<script > 	
$(document).ready(function(){		
	ActulizarCertificacion();
});
</script>
<div id="divActualizar_certificacion">
  <form id="frmActualizar_certificacion" name="frmRegistrar_certificacion" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaRegistrar_certificacion">
      <tr>
        <td align="right">CertificacionId:</td>
        <td colspan="2"><?php echo $CertificacionId?><input type="hidden" name="CertificacionId_"  id="CertificacionId_" value="<?php echo $CertificacionId?>"/> </td>
      </tr>
      <tr>
        <td align="right">Tipo:</td>
        <td colspan="2"><select name="TipoCertificacionId_" id="TipoCertificacionId_">
            <?php 
	// Llenar el combo Grado de Instruccion 
		include_once "../tipocertificacion/Controlador_tipocertificacion.php"; 
		$data=CListadoSimple_tipocertificacion();
		include_once "../cixphp.php";
		$cix = new CixPHP();								
		 $dataSelect = $cix->ImprimeCuerpoSelect($data,"TipoCertificacionId","TipoCertificacion",$TipoCertificacionId);  
		 echo $dataSelect ;
			
			?>
          </select></td>
      </tr>
      <tr>
        <td align="right">Status:</td>
        <td colspan="2"><select name="CertificacionStatus_" id="CertificacionStatus_">
            <option <?php if($CertificacionStatus=="C0")echo 'selected="selected"' ; ?> value="C0">C0</option>
            <option <?php if($CertificacionStatus=="C1")echo 'selected="selected"' ; ?> value="C1">C1</option>
            <option <?php if($CertificacionStatus=="C2")echo 'selected="selected"' ; ?> value="C2">C2</option>
            <option <?php if($CertificacionStatus=="ORGANICO")echo 'selected="selected"' ; ?> value="ORGANICO">ORGANICO</option>
          </select></td>
      </tr>
      <tr>
        <td align="right">Emitido por :</td>
        <td colspan="2"><input type="text" name="CertificacionEmitido_" id="CertificacionEmitido_"  value="<?php echo $CertificacionEmitido?>"/></td>
      </tr>
      <tr>
        <td align="right">Fecha de Emisión:</td>
        <td colspan="2"><input type="text" name="CertificacionFechaEmision_" id="CertificacionFechaEmision_" class="calendario" value="<?php echo $CertificacionFechaEmision?>"/></td>
      </tr>
      <tr>
        <td align="right">Fecha de Vencimiento:</td>
        <td colspan="2"><input type="text" name="CertificacionFechaVenci_" id="CertificacionFechaVenci_" class="calendario" value="<?php echo $CertificacionFechaVenci?>"/></td>
      </tr>
      <tr>
        <td align="right">Número de Certificación:</td>
        <td colspan="2"><input type="text" name="CertificacionNumero_" id="CertificacionNumero_"  value="<?php echo $CertificacionNumero?>"/></td>
      </tr>
      <tr>
        <td align="right">Nota:</td>
        <td colspan="2"><!--<input type="text" name="CertificacionNota_" id="CertificacionNota_"  value="<?php echo $CertificacionNota?>"/>-->
        <textarea name="CertificacionNota_" id="CertificacionNota_" ><?php echo $CertificacionNota?></textarea>
        </td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td><input type="submit" value="Actualizar" name="btregistrar" /></td>
        <td><input type="button" value="Cancelar" onclick="Cancelar('Modal_Certificacion','frmActualizar_certificacion');"/></td>
      </tr>      
    </table>
  </form>
</div>
