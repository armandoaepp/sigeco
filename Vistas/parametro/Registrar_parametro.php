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
#frmRegistrar_parametro {
	width: 80% !important;
	max-width: 900px !important;
}
.tablaFms {
	width: 100%
}
#frmRegistrar_parametro input {
	width: 68% !important;
}
.divborder {
	border: 1px #999999 solid;
	height: 140px;
	width: 360px
}
</style>
<div id="divRegistrar_parametro">
  <form id="frmRegistrar_parametro" name="frmRegistrar_certificadocalidad" method="post" action="<?php echo $accionf;?>">
    <fieldset>
      <legend> Certificado Calidad :Taceo</legend>
      <table border="0" class="tablaFms">
        <tr>
          <td ><div class="divborder">
              <p>Granulometría</p>
              <p>
                <!--<label for="ParametroId_">ParametroId : </label>-->
                <input type="hidden" name="ParametroId_" id="ParametroId_" value="<?php echo $ParametroId;?>"/>
              </p>
              <p>
                <label for="ParametroGanulometria17_">17 - 18 : </label>
                <input type="text" name="ParametroGanulometria17_" id="ParametroGanulometria17_" value="<?php echo $ParametroGanulometria17;?>"/>
              %</p>
              <p>
                <label for="ParametroGanulometria15_">15 - 16 : </label>
                <input type="text" name="ParametroGanulometria15_" id="ParametroGanulometria15_" value="<?php echo $ParametroGanulometria15;?>"/>
              %</p>
            </div>
            
           </td>
          <td  ><div class="divborder">
              <p>Defectos</p>
              <p>
                <label for="ParametroDefectosPrimarios_">Primarios : </label>
                <input type="text" name="ParametroDefectosPrimarios_" id="ParametroDefectosPrimarios_" value="<?php echo $ParametroDefectosPrimarios;?>"/>
                %
              </p>
              <p>
                <label for="ParametroDefectosSecundario_">Secundarios : </label>
                <input type="text" name="ParametroDefectosSecundario_" id="ParametroDefectosSecundario_" value="<?php echo $ParametroDefectosSecundario;?>"/>
              %</p>
            </div></td>
         <td  >
              <!--<div class="divborder">
               <p>Muestra en Gramos  %</p>
              <p>
                <label for="ParametroMuestraExportable_">Exportable : </label>
                <input type="text" name="ParametroMuestraExportable_" id="ParametroMuestraExportable_" value="<?php echo $ParametroMuestraExportable;?>"/>
              %</p>
              <p>
                <label for="ParametroMuestraDescarte_">Descarte : </label>
                <input type="text" name="ParametroMuestraDescarte_" id="ParametroMuestraDescarte_" value="<?php echo $ParametroMuestraDescarte;?>"/>
              %</p>
              <p>
                <label for="ParametroMuestraImpureza_">Impureza : </label>
                <input type="text" name="ParametroMuestraImpureza_" id="ParametroMuestraImpureza_" value="<?php echo $ParametroMuestraImpureza;?>"/>
              %</p>
             
            </div>-->
             <p>
            <!--    <label for="AcopioId_">AcopioId : </label>-->
                <input type="hidden" name="AcopioId_" id="AcopioId_" value="<?php echo $AcopioId;?>"/>
              </p>
            </td>
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
