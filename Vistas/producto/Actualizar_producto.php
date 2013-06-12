<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php $titulo ?></title>


<!-- para validar el Formulario   -->
<link rel="stylesheet" href="../validar_frm/validationEngine.jquery.css" type="text/css"/>
<script src="../validar_frm/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8">	</script>
<script src="../validar_frm/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$(document).ready(function(){
		// para activar la clase del menu
		$("#menu_interno #navi li").removeClass("selected");
		  $("#menu_interno #navi #producto").addClass("selected");
		  
		/*para inicar la validacion del frm */
		jQuery("#frmRegistrar_producto").validationEngine('attach');	
		ActualizarProductos();
	 });
</script>

<style>
.chk label {
	width:28px;
	float: left;
	margin: 13px;
	/*padding: 2PX;*/
	font-size: 9px;
	/*font-weight: bold;*/
	text-align: center;
	
}
#divRegistrar_producto {
	margin-top: 10px;
	padding-top: 5px;
	position: relative;
}
.tablas tr td {
	font-size:10px !important;
	}
</style>
</head>
<?php include_once "../tipoproducto/Controlador_tipoproducto.php";?>
<body>
<div id="divfrmActualizar_producto">
  <form id="frmActualizar_producto" name="frmActualizar_producto" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaRegistrar_producto"  class="tablas" width="100%">
      <tr>
        <td width="170" align="right">Tipo de Producto:</td>
        <td colspan="3" align="left"><select name="TipoProductoId_" id="TipoProductoId_" class="validate[required]" >
            <?php 
		// Llenar el combo Tipo de Producto 	
		$data=CListadoSimple_tipoproducto();		
		include_once "../cixphp.php";
		$cix = new CixPHP();							
		 $dataSelect = $cix->ImprimeCuerpoSelect($data,"TipoProductoId","TipoProducto",$TipoProductoId);  
		 echo $dataSelect ;
			
			?>
          </select></td>
      </tr>
      <tr>
        <td align="right">Variedad:</td>
        <td colspan="3"><input type="text"  name="ProductoVariedad_"  id="ProductoVariedad_"  value="<?php echo $ProductoVariedad;?>" class="validate[required] text-input" /></td>
      </tr>
      <tr>
        <td align="right">&Aacute;rea:</td>
        <td colspan="3"><input type="text" name="ProductoArea_" id="ProductoArea_" value="<?php echo $ProductoArea;?>" class="validate[required] text-input"  />
        ha</td>
      </tr>
      <tr>
        <td align="right">Producci&oacute;n Anual Esperada:</td>
        <td colspan="3"><input type="text" name="ProductoProduccionAnual_" id="ProductoProduccionAnual_" value="<?php echo $ProductoProduccionAnual;?>" />
        kg</td>
      </tr>
      <tr>
        <td align="right">Mes(es) de la Afloraci&oacute;n:</td>
        <td colspan="4" class="chk">
        <?php 				
		$mes=explode(',', $ProductoMesAfloracion);
		$cantidad=count($mes);
		$Enero="";
		$Febrero="";
		$Marzo="";
		$Abril="";
		$Mayo="";
		$Junio="";
		$Julio="";
		$Agosto="";
		$Setiembre="";
		$Octubre="";
		$Noviembre="";
		$Diciembre="";
		//echo "Cantidad es :".$cantidad;
		for($i=0;$i <$cantidad ;$i++){
			//echo "Mes de $i:".$mes[$i-1]."<br>";
			$dato=$mes[$i-1];
			switch(trim($dato)){		
				case "Enero":
					$Enero=trim($dato);
				break;
				case "Febrero":
					$Febrero=trim($dato);
				break;
				case "Marzo":
					$Marzo=trim($dato);
				break;
				case "Abril":
					$Abril=trim($dato);
				break;
				case "Mayo":
					$Mayo=trim($dato);
				break;
				case "Junio":
					$Junio=trim($dato);
				break;
				case "Julio":
					$Julio=trim($dato);
				break;	
				case "Agosto":
					$Agosto=trim($dato);
				break;
				case "Setiembre":
					$Setiembre=trim($dato);
				break;
				case "Octubre":
					$Octubre=trim($dato);
				break;
				case "Noviembre":
					$Noviembre=trim($dato);
				break;
				case "Diciembre":
					$Diciembre=trim($dato);
				break;
			
			}
		}
		?>
        <label for="enero">
            <input type="checkbox" name="ProductoMesAfloracion_chk[]" <?php if($Enero=="Enero")echo 'checked="checked"';?> id="enero" value="Enero" />
            Enero </label>
          <label for="febrero">
            <input type="checkbox"  <?php if($Febrero=="Febrero")echo 'checked="checked"';?> name="ProductoMesAfloracion_chk[]" id="febrero" value="Febrero"  />
            Febrero </label>
          <label for="marzo">
            <input type="checkbox" <?php if($Marzo=="Marzo")echo 'checked="checked"';?>  name="ProductoMesAfloracion_chk[]" id="marzo" value="Marzo" />
            Marzo </label>
          <label for="abril">
            <input type="checkbox"  <?php if($Abril=="Abril")echo 'checked="checked"';?> name="ProductoMesAfloracion_chk[]" id="abril" value="Abril"  />
            Abril </label>
          <label for="mayo">
            <input type="checkbox"  <?php if($Mayo=="Mayo")echo 'checked="checked"';?>  name="ProductoMesAfloracion_chk[]" id="mayo" value="Mayo" />
            Mayo </label>
          <label for="junio">
            <input type="checkbox"  <?php if($Junio=="Junio")echo 'checked="checked"';?>  name="ProductoMesAfloracion_chk[]" id="junio" value="Junio"  />
            Junio </label>
          <label for="julio">
            <input type="checkbox"  <?php if($Julio=="Julio")echo 'checked="checked"';?>  name="ProductoMesAfloracion_chk[]" id="julio"  value="Julio" />
            Julio </label>
          <label for="agosto">
            <input type="checkbox"  <?php if($Agosto=="Agosto")echo 'checked="checked"';?> name="ProductoMesAfloracion_chk[]" id="agosto" value="Agosto"  />
            Agosto </label>
          <label for="setiembre">
            <input type="checkbox"  <?php if($Setiembre=="Setiembre")echo 'checked="checked"';?>  name="ProductoMesAfloracion_chk[]" id="setiembre" value="Setiembre"  />
            Setiembre </label>
          <label for="octubre">
            <input type="checkbox"  <?php if($Octubre=="Octubre")echo 'checked="checked"';?>  name="ProductoMesAfloracion_chk[]" id="octubre" value="Octubre"  />
            Octubre </label>
          <label for="noviembre">
            <input type="checkbox"  <?php if($Noviembre=="Noviembre")echo 'checked="checked"';?> name="ProductoMesAfloracion_chk[]" id="noviembre" value="Noviembre"  />
            Noviembre </label>
          <label for="diciembre">
            <input type="checkbox"  <?php if($Diciembre=="Diciembre")echo 'checked="checked"';?>  name="ProductoMesAfloracion_chk[]" id="diciembre" value="Diciembre"  />
            Diciembre </label></td>
      </tr>
      <tr>
        <td align="right">Mes(es) de la Cosecha:</td>
        <td colspan="4" class="chk">
          <?php 				
		$mes=explode(',', $ProductoMesCosecha);
		$cantidad=count($mes);
		$Enero="";
		$Febrero="";
		$Marzo="";
		$Abril="";
		$Mayo="";
		$Junio="";
		$Julio="";
		$Agosto="";
		$Setiembre="";
		$Octubre="";
		$Noviembre="";
		$Diciembre="";
		//echo "Cantidad es :".$cantidad;
		for($i=0;$i <$cantidad ;$i++){
			//echo "Mes de $i:".$mes[$i-1]."<br>";
			$dato=$mes[$i-1];
			switch(trim($dato)){		
				case "Enero":
					$Enero=trim($dato);
				break;
				case "Febrero":
					$Febrero=trim($dato);
				break;
				case "Marzo":
					$Marzo=trim($dato);
				break;
				case "Abril":
					$Abril=trim($dato);
				break;
				case "Mayo":
					$Mayo=trim($dato);
				break;
				case "Junio":
					$Junio=trim($dato);
				break;
				case "Julio":
					$Julio=trim($dato);
				break;	
				case "Agosto":
					$Agosto=trim($dato);
				break;
				case "Setiembre":
					$Setiembre=trim($dato);
				break;
				case "Octubre":
					$Octubre=trim($dato);
				break;
				case "Noviembre":
					$Noviembre=trim($dato);
				break;
				case "Diciembre":
					$Diciembre=trim($dato);
				break;
			
			}
		}
		?>
        <label for="enero1">
            <input type="checkbox"  <?php if($Enero=="Enero") echo'checked="checked"' ; ?>  name="ProductoMesCosecha_chk[]" id="enero1" value="Enero" />
            Enero </label>
          <label for="febrero1">
            <input type="checkbox" <?php if($Febrero=="Febrero") echo'checked="checked"' ; ?>  name="ProductoMesCosecha_chk[]"id="febrero1" value="Febrero"  />
            Febrero </label>
          <label for="marzo1">
            <input type="checkbox" <?php if($Marzo=="Marzo") echo'checked="checked"' ; ?>  name="ProductoMesCosecha_chk[]" id="marzo1" value="Marzo" />
            Marzo </label>
          <label for="abril1">
            <input type="checkbox" <?php if($Abril=="Abril") echo'checked="checked"' ; ?>  name="ProductoMesCosecha_chk[]" id="abril1" value="Abril"  />
            Abril </label>
          <label for="mayo1">
            <input type="checkbox" <?php if($Mayo=="Mayo") echo'checked="checked"' ; ?>  name="ProductoMesCosecha_chk[]" id="mayo1" value="Mayo" />
            Mayo </label>
          <label for="junio1">
            <input type="checkbox" <?php if($Junio=="Junio") echo'checked="checked"' ; ?>  name="ProductoMesCosecha_chk[]" id="junio1" value="Junio"  />
            Junio </label>
          <label for="julio1">
            <input type="checkbox" <?php if($Julio=="Julio") echo'checked="checked"' ; ?>  name="ProductoMesCosecha_chk[]" id="julio1"  value="Julio" />
            Julio </label>
          <label for="agosto1">
            <input type="checkbox" <?php if($Agosto=="Agosto") echo'checked="checked"' ; ?>  name="ProductoMesCosecha_chk[]" id="agosto1" value="Agosto"  />
            Agosto </label>
          <label for="setiembre1">
            <input type="checkbox"<?php if($Setiembre=="Setiembre") echo'checked="checked"' ; ?>  name="ProductoMesCosecha_chk[]" id="setiembre1" value="Setiembre"  />
            Setiembre </label>
          <label for="octubre1">
            <input type="checkbox" <?php if($Octubre=="Octubre") echo'checked="checked"' ; ?>  name="ProductoMesCosecha_chk[]" id="octubre1" value="Octubre"  />
            Octubre </label>
          <label for="noviembre1">
            <input type="checkbox" <?php if($Noviembre=="Noviembre") echo'checked="checked"' ; ?> name="ProductoMesCosecha_chk[]" id="noviembre1" value="Noviembre"  />
            Noviembre </label>
          <label for="diciembre1">
            <input type="checkbox" <?php if($Diciembre=="Diciembre") echo'checked="checked"' ; ?>  name="ProductoMesCosecha_chk[]" id="diciembre1" value="Diciembre"  />
            Diciembre </label></td>
      </tr>
      <tr>
        <td align="right">Nota:</td>
        <td colspan="3"><textarea name="ProductoDescripcion_"  id="ProductoDescripcion_"  cols="50" rows="5"><?php echo $ProductoDescripcion;?></textarea></td>
      </tr>
      <tr>
        <td ><input type="hidden" name="ProductoId_" id="ProductoId_" value="<?php echo $ProductoId;?>" /></td>
        <td width="255"  align="right"><input type="submit" value="Registrar" name="btregistrar2" /></td>
        <td width="223"  align="right"><input type="button" value="Cancelar"  onclick="Cancelar('Actulizar_Productos','frmActualizar_producto');"/></td>
        <td width="546">&nbsp;</td>
      </tr>
     
    </table>
  </form>
</div>

</body>
</html>