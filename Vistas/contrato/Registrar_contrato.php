<!-- para el chosen -->
<link rel="stylesheet" href="../js/chosen/Source/chosen.css" />
<style>
.lineaInputs {
	display: inline-block;
}
.lineaInputs input {
	width: 30%;
}
</style>
<?php
include_once "../cixfrm.php";
 $cixfrm = new CixFRM();	
include_once("../cliente/Controlador_cliente.php");
include_once("../tipocontrato/Controlador_tipocontrato.php");


?>
<div id="divRegistrar_contrato">
  <form id="frmRegistrar_contrato" name="frmRegistrar_contrato" method="post" action="<?php echo $accionf;?>">
    <fieldset>
      <legend> Nuevo Contrato</legend>
      <!--   <p>
        <label for="ContratoId_">ContratoId : </label>
        <input type="text" name="ContratoId_" id="ContratoId_" value=""/>
      </p>-->
      <p>
        <label for="ClienteId_">Cliente : </label>
        <select name="ClienteId_" data-placeholder="Buscar Apellido Nombres" style="width:68%;" class="chzn-select" id="ClienteId_" required="required"  >
          <?php 
		
		$data=CBuscar_Nombres_cliente();		
	    $dataSelect = $cixfrm->ImprimeCuerpoSelect($data,"ClienteId","ClienteNombre",0,true);  
		 echo $dataSelect ;
		?>
        </select>
        <a href="#" id="NuevoCliente" onclick="ModalCliente();return false;">Nuevo</a> </p>
      <p>
        <label for="TipoContratoId_">Tipo Contrato : </label>
        <select name="TipoContratoId_" id="TipoContratoId_" required="required" style="width:69%;"   >
          <?php 
		
		$dataTC=CListadoSimple_tipocontrato();	
	    $dataTipoContrato = $cixfrm->ImprimeCuerpoSelect($dataTC,"TipoContratoId","TipoContrato",0);  
		 echo $dataTipoContrato ;
		?>
        </select>
      </p>
      <p>
        <label for="ContratoNumero_">Codigo/Numero : </label>
        <input type="text" name="ContratoNumero_" id="ContratoNumero_" value=""/>
      </p>
      <p>
        <label for="ContratoCantidadSacos_">Cantidad Sacos : </label>
        <input type="number" name="ContratoCantidadSacos_" id="ContratoCantidadSacos_" value="" step="any" required="required"/>
      </p>
      <p >
        <label for="ContratoKGxSaco_">KG x Saco : </label>
        <input type="number" name="ContratoKGxSaco_" id="ContratoKGxSaco_" value="" step="any" required="required"/>
      </p>
      <p  class="lineaInputs">
        <label for="ContratoPuntajeDesde_">Puntaje de Catación : </label>
        <input type="number" name="ContratoPuntajeDesde_"   id="ContratoPuntajeDesde_"  placeholder="Desde" value="" step="any" required="required"/>
        -
        <input type="number" name="ContratoPuntajeHasta_" id="ContratoPuntajeHasta_" placeholder="Hasta" value="" step="any" required="required"/>
      </p>
      <!--  <p>
        <label for="ContratoFecha_">Fecha : </label>
        <input type="text" name="ContratoFecha_" id="ContratoFecha_" value=""/>
      </p>-->
      <p>
        <label for="ContratoFechaEmbarque_">Fecha Embarque : </label>
        <input type="date" name="ContratoFechaEmbarque_" id="ContratoFechaEmbarque_" value=""/>
      </p>
      <p>
        <label for="ContratoStatus_">Status : </label>
        <input type="text" name="ContratoStatus_" id="ContratoStatus_" value=""/>
      </p>
      <p>
        <label for="ContratoPosicion_">Posición : </label>
        <input type="text" name="ContratoPosicion_" id="ContratoPosicion_" value=""/>
      </p>
      <p>
        <label for="ContratoPrecioBolsa_">Precio Bolsa : </label>
        <input type="number" name="ContratoPrecioBolsa_" id="ContratoPrecioBolsa_" value="" step="any"/>
      </p>
      <p>
        <label for="ContratoNumeroFactura_">Numero Factura : </label>
        <input type="text" name="ContratoNumeroFactura_" id="ContratoNumeroFactura_" value=""/>
      </p>
      <p>
        <label for="ContratoValorFod_">Valor Fod : </label>
        <input type="text" name="ContratoValorFod_" id="ContratoValorFod_" value=""/>
      </p>
      <p>
        <label for="ContratoPuertoEmbarque_">Puerto Embarque : </label>
        <input type="text" name="ContratoPuertoEmbarque_" id="ContratoPuertoEmbarque_" value=""/>
      </p>
      <p>
        <label for="ContratoPuertoDestino_">Puerto Destino : </label>
        <input type="text" name="ContratoPuertoDestino_" id="ContratoPuertoDestino_" value=""/>
      </p>
      <p>
        <label for="ContratoHumedad_">Humedad : </label>
        <input type="text" name="ContratoHumedad_" id="ContratoHumedad_" value=""/>
      </p>
      <!--    <p>
        <label for="ContratoCantidadQuintales_">Cantidad Quintales : </label>
        <input type="number" name="ContratoCantidadQuintales_" id="ContratoCantidadQuintales_" value="" step="any"/>
      </p>
      <p>
        <label for="ContratoToneladas_">Toneladas : </label>
        <input type="number" name="ContratoToneladas_" id="ContratoToneladas_" value="" step="any"/>
      </p>-->
      <p>
        <label for="ContratoNotas_">Notas : </label>
        <textarea  name="ContratoNotas_" id="ContratoNotas_" ></textarea>
      </p>
      <!--   <p>
        <label for="ContratoEstado_">Estado : </label>
        <input type="text" name="ContratoEstado_" id="ContratoEstado_" value=""/>
      </p>--> 
      
      <!--  <p>
        <label for="PeriodoId_">PeriodoId : </label>
        <input type="text" name="PeriodoId_" id="PeriodoId_" value=""/>
      </p>-->
      <div class="botones">
        <button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png"/>Registrar </button>
        <button  type="button" id="btnCancelar" onclick="Cancelar();return false;"><img src="../imgcixphp/ico_cancelar.png"/>Cancelar </button>
      </div>
    </fieldset>
  </form>
  <script src="../js/chosen/Source/mootools-yui-compressed.js"></script> 
  <script src="../js/chosen/Source/mootools-more-1.4.0.1.js"></script> 
  <script src="../js/chosen/Source/chosen.min.js"></script> 
  <script src="../js/chosen/Source/Locale.es-ES.Chosen.js"></script> 
  <script> $$(".chzn-select").chosen(); $$(".chzn-select-deselect").chosen({allow_single_deselect:true}); </script> 
</div>
