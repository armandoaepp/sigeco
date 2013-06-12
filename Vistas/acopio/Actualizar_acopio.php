<!--<script src="../js/jquery-1.8.3.min.js"></script>-->
<script>
$(document).ready(function(e) {
	$("#AcopioNSacos_").keyup(CalcularTara);
	$("#AcopioNSacos_").focus(CalcularTara);
	$("#AcopioNSacos_").change(CalcularTara);
	
});
	
function CalcularTara(){
	$("#AcopioTara_").attr("value","");
	var numerosSacos=$("#AcopioNSacos_").val();
	tara=numerosSacos*0.2;
	tara= parseFloat(tara).toFixed(2);//redondeamos a dos decimales
	
	$("#AcopioTara_").attr("value",tara);	
};	
</script>
<?php 	
	 include_once("../cixfrm.php");
	 $frm = new CixFRM();
	 include_once("../tipocertificacion/Controlador_tipocertificacion.php");
	 include_once("../base/Controlador_base.php");
?>

<div id="divActualizar_acopio">
  <form id="frmActualizar_acopio" name="frmRegistrar_acopio" method="post" action="<?php echo $accionf;?>">
    <fieldset>
      <legend> Actualizar Acopio</legend>
      <input type="hidden" name="UnidadProductivaId_" id="UnidadProductivaId_" value="<?php echo $UnidadProductivaId;?>"/>
      <input type="hidden" name="AcopioId_" id="AcopioId_" value="<?php echo $AcopioId;?>"/>
      <p >
        <label >Productor / Socio:</label>
        <strong><?php echo  $productorNombre ;?></strong></p>
      <p>
        <label for="BaseId_">Base:</label>
        <select id="BaseId_" name="BaseId_" required="required" >
          <?php 	 
          
            $dataBase=CListar_base_UnidadadProductivaxProrductor($UnidadProductivaId);
             $selectbase=$frm->ImprimeCuerpoSelect($dataBase,"BaseId", "BaseNombre",$BaseId);
             echo $selectbase;
        ?>
        </select>
      </p>
      <p>
        <label for="TipoCertificacionId_">Tipo Certificación:</label>
        <select id="TipoCertificacionId_" name="TipoCertificacionId_" required="required">
          <?php 	 
  	$dataTC=CListadoSimple_tipocertificacion();
	 $selectTC=$frm->ImprimeCuerpoSelect($dataTC,"TipoCertificacionId", "TipoCertificacion",$TipoCertificacionId);
	 echo $selectTC;
	?>
        </select>
      </p>
      <p>
        <label for="AcopioStatus_">Status:</label>
        <select name="AcopioStatus_" id="AcopioStatus_">
          <option value="" style="color:#CCCCCC">Seleccionar</option>
          <option value="C0" <?php if($AcopioStatus=="C0")echo 'selected="selected"';?>  >C0</option>
          <option value="C1" <?php if($AcopioStatus=="C1")echo 'selected="selected"';?>  >C1</option>
          <option value="C2" <?php if($AcopioStatus=="C3")echo 'selected="selected"';?>  >C2</option>
          <option value="ORGANICO" <?php if($AcopioStatus=="ORGANICO")echo 'selected="selected"';?>  >ORGANICO</option>
        </select>
      </p>
      <p>
        <label for="AcopioNSacos_">N° Sacos:</label>
        <input type="number" name="AcopioNSacos_" id="AcopioNSacos_"  value="<?php echo $AcopioNSacos ;?>" required="required"/>
        &nbsp;&nbsp;&nbsp;&nbsp;</p>
      <p>
        <label for="AcopioPesoBruto_">Peso Bruto:</label>
        <input type="number" name="AcopioPesoBruto_" id="AcopioPesoBruto_"  step="any"  value="<?php echo $AcopioPesoBruto ;?>" required="required"/>
        kg</p>
      <p>
        <label for="AcopioHumedadEntregada_">Humedad Entregada</label>
        <input type="number" name="AcopioHumedadEntregada_" id="AcopioHumedadEntregada_" value="<?php echo $AcopioHumedadEntregada ;?>" />
        %</p>
      <p>
        <label for="AcopioHumedadRequerida_">Humedad Requerida:</label>
        <input type="number" name="AcopioHumedadRequerida_" id="AcopioHumedadRequerida_" value="<?php echo $AcopioHumedadRequerida ;?>"/>
        %</p>
      <p>
        <label for="AcopioPrecioQuintal_">Precio x Quintal:</label>
        <input type="text" name="AcopioPrecioQuintal_" id="AcopioPrecioQuintal_"   value="<?php echo $AcopioPrecioQuintal ;?>"/>
        &nbsp;&nbsp;&nbsp;&nbsp;</p>
      <p>
        <label for="AcopioTara_">Tara kg.:</label>
        <input type="text" name="AcopioTara_" id="AcopioTara_"  min="0" width="150" readonly="readonly" value="<?php echo $AcopioTara ;?>"/>
        &nbsp;&nbsp;&nbsp;&nbsp; </p>
      <div class="botones">
        <button type="submit" id="btActualizar"><img src="../images/guardar.png" title="Actualizar"/>Actualizar </button>
        <button  type="button" id="btnCancelar" onclick="linkCancelar(); return false;"><img src="../images/cancelar.png" title="Cancelar"/>Cancelar </button>
      </div>
    </fieldset>
  </form>
</div>
