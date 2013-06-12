<style>
.tdtitulo {
	text-align: center;
	padding: 0;
	margin: 0;
	font-size: 20px
}
.tablaInterna {
	width: 100%;
	min-width: 250px
}
#frmRegistrar_certificadocalidad {
	width: 90% !important;
	max-width: 900px !important;
}
.tablaFms {
	width: 100%
}
#frmRegistrar_certificadocalidad  input{ width:50% !important;}
.border {
	border: 1px #999999 solid;
	height: 140px;
	width: 250px
}
</style>
<div id="divRegistrar_certificadocalidad">
  <form id="frmRegistrar_certificadocalidad" name="frmRegistrar_certificadocalidad" method="post" action="<?php echo $accionf;?>">
    <fieldset>
      <legend> Certificado Calidad : Análisis Físico</legend>
      <table border="0" class="tablaFms">
        <tr>
          <td ><p>
              <!--<label for="CertificadoCalidadId_">CertificadoCalidadId : </label>-->
              <input type="hidden" name="CertificadoCalidadId_" id="CertificadoCalidadId_" value="<?php echo $CertificadoCalidadId;?>"/>
            </p>
            
            <div class="border">
              <p>Variedad</p>
              <p>
                <label for="CertificadoCalidadVariedadTipica_">Tipica : </label>
                <input type="text" name="CertificadoCalidadVariedadTipica_" id="CertificadoCalidadVariedadTipica_" value="<?php echo $CertificadoCalidadVariedadTipica;?>"/>
              %</p>
              <p>
                <label for="CertificadoCalidadVariedadCaturra_">Caturra : </label>
                <input type="text" name="CertificadoCalidadVariedadCaturra_" id="CertificadoCalidadVariedadCaturra_" value="<?php echo $CertificadoCalidadVariedadCaturra;?>"/>
              %</p>
              <p>
                <label for="CertificadoCalidadVariedadBourbon_">Bourbon : </label>
                <input type="text" name="CertificadoCalidadVariedadBourbon_" id="CertificadoCalidadVariedadBourbon_" value="<?php echo $CertificadoCalidadVariedadBourbon;?>"/>
              %</p>
              <p>
                <label for="CertificadoCalidadVariedadCatimoro_">Catimoro : </label>
                <input type="text" name="CertificadoCalidadVariedadCatimoro_" id="CertificadoCalidadVariedadCatimoro_" value="<?php echo $CertificadoCalidadVariedadCatimoro;?>"/>
              %</p>
            </div>
            
            <!--<<p>
              label for="CertificadoCalidadVariedadTotal_">Total : </label>
              <input type="hidden" name="CertificadoCalidadVariedadTotal_" id="CertificadoCalidadVariedadTotal_" value="<?php echo $CertificadoCalidadVariedadTotal_;?>"/>
            </p>--></td>
          <td  ><div class="border">
              <p>Tipo de Secado</p>
              <p>
                <label for="CertificadoCalidadTipoSecadoAlSol_"> Al Sol : </label>
                <input type="text" name="CertificadoCalidadTipoSecadoAlSol_" id="CertificadoCalidadTipoSecadoAlSol_" value="<?php echo $CertificadoCalidadTipoSecadoAlSol;?>"/>
              %</p>
              <p>
                <label for="CertificadoCalidadTipoSecadoMecanico_"> Mecanico : </label>
                <input type="text" name="CertificadoCalidadTipoSecadoMecanico_" id="CertificadoCalidadTipoSecadoMecanico_" value="<?php echo $CertificadoCalidadTipoSecadoMecanico ;?>"/>
              %</p>
            </div>
            
            <!-- <p>
            <label for="CertificadoCalidadTipoSecadoTotal_">Secado Total : </label>
              <input type="hidden" name="CertificadoCalidadTipoSecadoTotal_" id="CertificadoCalidadTipoSecadoTotal_" value="<?php echo $CertificadoCalidadVariedadTipica;?>"/>
            </p>--></td>
          <td  ><div class="border">
              <p>&nbsp; </p>
              <p>
                <label for="CertificadoCalidadAltitud_">Altitud : </label>
                <input type="text" name="CertificadoCalidadAltitud_" id="CertificadoCalidadAltitud_" value="<?php echo $CertificadoCalidadAltitud;?>"/>
               m.s.n.m.</p>
              <p>
                <label for="CertificadoCalidadBajoSombra_">Bajo Sombra : </label>
                <input type="text" name="CertificadoCalidadBajoSombra_" id="CertificadoCalidadBajoSombra_" value="<?php echo $CertificadoCalidadBajoSombra;?>"/>
                %
              </p>
            </div>
            <p> 
              <!-- <label for="AcopioId_">AcopioId : </label>-->
              <input type="hidden" name="AcopioId_" id="AcopioId_" value="<?php echo $AcopioId;?>"/>
            </p></td>
        </tr>
        <tr>
          <td colspan="3"><div class="botones">
              <button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button>
              <button  type="button" id="btnCancelar" onclick="linkCertificadoCalidadCancelar(); return false ;"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button>
            </div></td>
        </tr>
      </table>
    </fieldset>
  </form>
</div>
