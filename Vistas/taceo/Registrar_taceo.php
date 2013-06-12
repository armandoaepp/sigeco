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
#frmRegistrar_taceo {
	width: 80% !important;
	max-width: 900px !important;
}
.tablaFms {
	width: 100%
}
#frmRegistrar_taceo input {
	width: 68% !important;
}
.divborder1 {
	/*border: 1px #999999 solid;*/
	width: 98%;
	
}
.textArea{
	width:86%;
	height:35px;
	}
.label{
	width:12%
	}
</style>
<div id="divRegistrar_taceo">
  <form id="frmRegistrar_taceo" name="frmRegistrar_taceo" method="post" action="<?php echo $accionf;?>">
    <fieldset>
      <legend> Nuevo Taceo</legend>
      <table border="0" class="tablaFms">
        <tr>
     
          <td ><div class="divborder1">
              <p> 
                <!-- <label for="TaceoId_">TaceoId : </label>-->
                <input type="hidden" name="TaceoId_" id="TaceoId_" value="<?php echo $TaceoId ?>"/>
              </p>
              <p>
                <label for="TaceoFraganciaAroma_">Fragancia/Aroma : </label>
                <input type="text" name="TaceoFraganciaAroma_" id="TaceoFraganciaAroma_" value="<?php echo $TaceoFraganciaAroma ?>"/>
              </p>
              <p>
                <label for="TaceoSaborResidual_">Sabor Residual : </label>
                <input type="text" name="TaceoSaborResidual_" id="TaceoSaborResidual_" value="<?php echo $TaceoSaborResidual ?>"/>
              </p>
              <p>
                <label for="TaceoAcidez_">Acidez : </label>
                <input type="text" name="TaceoAcidez_" id="TaceoAcidez_" value="<?php echo $TaceoAcidez ?>"/>
              </p>
              <p>
                <label for="TaceoCuerpo_">Cuerpo : </label>
                <input type="text" name="TaceoCuerpo_" id="TaceoCuerpo_" value="<?php echo $TaceoCuerpo ?>"/>
              </p>
              <p>
                <label for="TaceoBalance_">Balance : </label>
                <input type="text" name="TaceoBalance_" id="TaceoBalance_" value="<?php echo $TaceoBalance ?>"/>
              </p>
              <p>
                <label for="TaceoDulsor_">Dulsor : </label>
                <input type="text" name="TaceoDulsor_" id="TaceoDulsor_" value="<?php echo $TaceoDulsor ?>"/>
              </p>
            </div></td>
          <td  ><div class="divborder1">
              <p>
                <label for="TaceoUniformidad_">Uniformidad : </label>
                <input type="text" name="TaceoUniformidad_" id="TaceoUniformidad_" value="<?php echo $TaceoUniformidad ?>"/>
              </p>
              <p>
                <label for="TaceoTazaLimpia_">Taza Limpia : </label>
                <input type="text" name="TaceoTazaLimpia_" id="TaceoTazaLimpia_" value="<?php echo $TaceoTazaLimpia ?>"/>
              </p>
              <p>
                <label for="TaceoPuntajeCatador_">Puntaje de Catador : </label>
                <input type="text" name="TaceoPuntajeCatador_" id="TaceoPuntajeCatador_" value="<?php echo $TaceoPuntajeCatador ?>" required="required"/>
              </p>
              <p>
                <label for="TaceoDefectos_">Defectos : </label>
                <input type="text" name="TaceoDefectos_" id="TaceoDefectos_" value="<?php echo $TaceoDefectos ?>"/>
              </p>
              <p>
                <label for="TaceoNumeroTazas_">Número Tazas : </label>
                <input type="text" name="TaceoNumeroTazas_" id="TaceoNumeroTazas_" value="<?php echo $TaceoNumeroTazas ?>"/>
              </p>
              <p>
                <label for="TaceoCatadopor_">Catado por : </label>
                <input type="text" name="TaceoCatadopor_" id="TaceoCatadopor_" value="<?php echo $TaceoCatadopor ?>"/>
              </p>
            </div></td>
        
        </tr>
        <tr>
          <td colspan="2"><div class="divborder1">
              <p>
                <label class="label" for="TaceoNotas_">Notas : </label>
                <textarea class="textArea" name="TaceoNotas_" id="TaceoNotas_" cols="45" rows="5"><?php echo $TaceoNotas ?></textarea>
              </p>
              <p> 
                <!--  <label for="AcopioId_">AcopioId : </label>-->
                <input type="hidden" name="AcopioId_" id="AcopioId_" value="<?php echo $AcopioId ?>"/>
              </p>
            </div>
            </td>
        </tr>
        <tr>
          <td colspan="2"><div class="botones">
              <button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button>
              <button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button>
            </div></td>
        </tr>
      </table>
    </fieldset>
  </form>
</div>
