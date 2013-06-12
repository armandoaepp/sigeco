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

<div id="divRegistrar_acopio">
  <form id="frmRegistrar_acopio" name="frmRegistrar_acopio" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaRegistrar_acopio">
      <tr>
        <td width="128" align="right">Productor / Socio:</td>
        <td colspan="3"><input type="hidden" name="UnidadProductivaId_" id="UnidadProductivaId_" value="<?php echo $UnidadProductivaId_;?>"/>
          <p id="ProductorNombre"><strong><?php echo  $ProductorNombre_;?></strong></p></td>
      </tr>
      <tr>
        <td align="right">Fecha:</td>
        <td colspan="3"><input type="text" name="AcopioFecha_" id="AcopioFecha_" value="<?php echo $AcopioFecha_;?>" readonly="readonly" /></td>
      </tr>
      <tr>
        <td align="right">Numero GA:</td>
        <td colspan="2"><input type="text" required="required" name="GuiaAcopioNumero_" id="GuiaAcopioNumero_" readonly="readonly" value=""/></td>
        <td width="138"><button type="button" onclick="generarGuiaAcopio();return false">Generar </button></td>
      </tr>
      <tr>
        <td align="right">Base:</td>
        <td colspan="3"><select id="BaseId_" name="BaseId_" required="required" >
            <?php 	 
          
            $dataBase=CListar_base_UnidadadProductivaxProrductor($UnidadProductivaId_);
             $selectbase=$frm->ImprimeCuerpoSelect($dataBase,"BaseId", "BaseNombre");
             echo $selectbase;
        ?>
          </select></td>
      </tr>
      <tr>
        <td align="right">Tipo Certificación:</td>
        <td colspan="3"><select id="TipoCertificacionId_" name="TipoCertificacionId_" required="required">
            <?php 	 
  	$dataTC=CListadoSimple_tipocertificacion();
	 $selectTC=$frm->ImprimeCuerpoSelect($dataTC,"TipoCertificacionId", "TipoCertificacion");
	 echo $selectTC;
	?>
          </select></td>
      </tr>
      <tr>
        <td align="right">Status:</td>
        <td colspan="3"><select name="AcopioStatus_" id="AcopioStatus_">
            <option value="" style="color:#CCCCCC">Seleccionar</option>
            <option value="C0">C0</option>
            <option value="C1">C1</option>
            <option value="C2">C2</option>
            <option value="ORGANICO">ORGANICO</option>
          </select></td>
      </tr>
      <tr>
        <td align="right">N° Sacos:</td>
        <td colspan="3"><input type="number" name="AcopioNSacos_" id="AcopioNSacos_"  value="" required="required"/></td>
      </tr>
      <tr>
        <td align="right">Peso Bruto:</td>
        <td colspan="3"><input type="number" name="AcopioPesoBruto_" id="AcopioPesoBruto_"  step="any" value="" required="required"/></td>
      </tr>
      <tr>
        <td align="right">Humedad Entregada:</td>
        <td colspan="3"><input type="number" name="AcopioHumedadEntregada_" id="AcopioHumedadEntregada_" value="" />
          %</td>
      </tr>
      <tr>
        <td align="right">Humedad Requerida:</td>
        <td colspan="3"><input type="number" name="AcopioHumedadRequerida_" id="AcopioHumedadRequerida_" value=""/>
          %</td>
      </tr>
      <tr>
        <td align="right">Precio x Quintal:</td>
        <td colspan="3"><input type="number" name="AcopioPrecioQuintal_" id="AcopioPrecioQuintal_" value=""/></td>
      </tr>
      <tr>
        <td align="right">Tara kg.:</td>
        <td colspan="3"><input type="text" name="AcopioTara_" id="AcopioTara_"  min="0" readonly="readonly"/></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td width="122"><button type="submit" id="btregistrar"><img src="../images/guardar.png" title="Registar"/>Registrar </button></td>
        <td colspan="2" align="left"><button  type="button" id="btnCancelar" onclick="Cancelar(); return false;"><img src="../images/cancelar.png" title="Cancelar"/>Cancelar </button></td>
      </tr>
    </table>
  </form>
</div>
