<script > 	
$(document).ready(function(){		
 RegistrarCertificacion(); 
});
</script>
<div id="divRegistrar_certificacion">
  <form id="frmRegistrar_certificacion" name="frmRegistrar_certificacion" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaRegistrar_certificacion">
      <tr>
        <td align="right"> CertificacionId:</td>
        <td colspan="2"><input type="text" name="CertificacionId_" id="CertificacionId_" value="Autogenrado" disabled="disabled" /></td>
      </tr>
      <tr>
        <td align="right">Tipo:</td>
        <td colspan="2"><select name="TipoCertificacionId_" id="TipoCertificacionId_">
         <?php 
	// Llenar el combo Grado de Instruccion 
		include_once "../tipocertificacion/Controlador_tipocertificacion.php"; 
		$data=CListadoSimple_tipocertificacion();
		//$data=$eneducacion->ListadoSimple_educacion();
		
		include_once "../cixphp.php";
		$cix = new CixPHP();								
		 $dataSelect = $cix->ImprimeCuerpoSelect($data,"TipoCertificacionId","TipoCertificacion",0);  
		 echo $dataSelect ;
			
			?>

          </select></td>
      </tr>
      <tr>
        <td align="right">Status:</td>
        <td colspan="2"><select name="CertificacionStatus_" id="CertificacionStatus_">
       	 <option value="C0">C0</option>
          <option value="C1">C1</option>
          <option value="C2">C2</option>
          <option value="ORGANICO">ORGANICO</option>
        </select></td>
      </tr>
      <tr>
        <td align="right">Emitido por :</td>
        <td colspan="2"><input type="text" name="CertificacionEmitido_" id="CertificacionEmitido_"  width="180"/></td>
      </tr>
      <tr>
        <td align="right">Fecha de Emisión:</td>
        <td colspan="2"><input type="text" name="CertificacionFechaEmision_" id="CertificacionFechaEmision_"  class="calendario"/></td>
      </tr>
      <tr>
        <td align="right">Fecha de Vencimiento:</td>
        <td colspan="2"><input type="text" name="CertificacionFechaVenci_" id="CertificacionFechaVenci_"class="calendario"/></td>
      </tr>
      <tr>
        <td align="right">Número de Certificación:</td>
        <td colspan="2"><input type="text" name="CertificacionNumero_" id="CertificacionNumero_" value=""/></td>
      </tr>
      <tr>
        <td align="right">Nota:</td>
        <td colspan="2"><!--<input type="text" name="CertificacionNota_" id="CertificacionNota_" value=""/>-->
        <textarea name="CertificacionNota_" id="CertificacionNota_" value="" ></textarea>
        </td>
      </tr>
      <tr>
        <td align="right"></td>
        <td><input type="submit" value="Registrar" name="btregistrar"></td>
        <td align="right"> <input type="button" value="Cancelar" onclick="Cancelar('Modal_Certificacion','frmRegistrar_certificacion');"/></td>
      </tr>
     
    </table>
 
<!--    <div style="display:block; float:left"><input type="submit" value="Registrar" name="btregistrar"> &nbsp; &nbsp;<input type="button" value="Cancelar" onclick="Cancelar('Modal_Certificacion','frmRegistrar_certificacion');"/></div>-->
  </form>
</div>
