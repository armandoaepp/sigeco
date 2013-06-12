<?php session_start();?>

 <script>
/*Iniciar los Calendarios */
   	$(document).ready(function(){					
		 ActulizarProductosPrincipales()		
		/*para inicar la validacion del frm */
		//jQuery("#frmRegistrar_productor").validationEngine('attach');			
	});
</script>

<div id="divActualizar_parceladetalle">
  <form  method="post" id="frmActualizar_parceladetalle" name="frmRegistrar_parceladetalle"  action="<?php echo $accionf;?>">
    <table border="0" id="tablaRegistrar_parceladetalle">
      <tr>
        <td colspan="3">
          <div>Plantar</div></td>
      </tr>
      <tr>
        <td width="139" align="right"> Fecha Siembra:</td>
        <td colspan="2"><input type="text" name="ParcelaDetalleFechaSiembra_" id="ParcelaDetalleFechaSiembra_"  class="calendario" value="<?php echo $ParcelaDetalleFechaSiembra;?>"/></td>
      </tr>
      <tr>
        <td align="right">Area:</td>
        <td colspan="2"><input type="number" name="ParcelaDetalleArea_" id="ParcelaDetalleArea_" value="<?php echo $ParcelaDetalleArea;?>" required="required"/> </td><td align="left">ha</td>
      </tr>
      <tr>
        <td align="right">Producto:</td>
        <td colspan="2"><select name="ProductoId_" id="ProductoId_" required="required">
            <?php 
		// Llenar el combo Tipo de Producto 
		
			$IdUnidadProductiva=$_SESSION["UnidadProductivaId"];
			include_once "../parceladetalle/Controlador_parceladetalle.php";
		$data= CListar_producto_Unidadproductiva($IdUnidadProductiva);	
		//$data= CListar_producto_Unidadproductiva(4);	
		include_once "../cixphp.php";
		$cix = new CixPHP();				
		 $dataSelect = $cix->ImprimeCuerpoSelect($data,"ProductoId","Producto",$ProductoId);  
		 echo $dataSelect ;
			?>
          </select></td>
      </tr>
      <tr>
        <td colspan="3"><div>Distancia de la Siembra</div></td>
      </tr>
      <tr>
        <td align="right">Distancia entre Surcos:</td>
        <td colspan="2"><input type="text" name="DistanciaSurcos_" id="DistanciaSurcos_" value="<?php echo $DistanciaSurcos;?>"/></td>
      </tr>
      <tr>
        <td align="right">Distancia entre Plantas:</td>
        <td colspan="2"><input type="text" name="DistanciaPlantas_" id="DistanciaPlantas_" value="<?php echo $DistanciaPlantas;?>"/></td>
      </tr>
      <tr>
        <td align="right">Tipo de Siembra:</td>
        <td colspan="2"><select name="TipoSiembra_" id="TipoSiembra_">
            <option <?php if($TipoSiembra=="Cuadro/Rectángulo") echo 'selected="selected"' ;?>  >Cuadro/Rectángulo</option>
            <option <?php if($TipoSiembra=="Triángulo") echo 'selected="selected"' ;?>>Triángulo</option>
            <option <?php if($TipoSiembra=="Tresbolillo") echo 'selected="selected"' ;?>>Tresbolillo</option>
            <option <?php if($TipoSiembra=="Linear") echo 'selected="selected"' ;?>>Linear</option>
          </select></td>
      </tr>
      <tr>
        <td align="right"><input type="hidden" name="ParcelaDetalleId_" id="ParcelaDetalleId_" value="<?php echo $ParcelaDetalleId ;?>"/></td>
       <td align="right"><input type="submit" value="Registrar" name="btregistrar"></td>
        <td><input type="button" value="Cancelar" onclick="Cancelar('Modal_ProductoPrincipal','frmActualizar_parceladetalle');"/></td>
      </tr>
    </table>
  </form>
</div>
