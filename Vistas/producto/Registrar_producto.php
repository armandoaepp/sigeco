<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php $titulo ?></title>

<link  type="text/css" href="../css/estilo_formulario.css" rel="stylesheet">
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
	 });
</script>

<style>
.chk label {
	width: 40px;
	float: left;
	margin: 10px;
	padding: 2PX;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
}
#divRegistrar_producto {
	margin-top: 10px;
	padding-top: 5px;
	position: relative;
}
</style>
</head>
<?php include_once "../tipoproducto/Controlador_tipoproducto.php";?>
<body>
<div id="divRegistrar_producto"> 
  <form id="frmRegistrar_producto" name="frmRegistrar_producto" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaRegistrar_producto">
      <tr>
        <td width="172" align="right">Tipo de Producto:</td>
        <td colspan="3" align="left"><select name="TipoProductoId_" id="TipoProductoId_" class="validate[required]" >
            <?php 
		// Llenar el combo Tipo de Producto 	
		$data=CListadoSimple_tipoproducto();		
		include_once "../cixphp.php";
		$cix = new CixPHP();							
		 $dataSelect = $cix->ImprimeCuerpoSelect($data,"TipoProductoId","TipoProducto",0);  
		 echo $dataSelect ;
			
			?>
          </select></td>
      </tr>
      <tr>
        <td align="right">Variedad:</td>
        <td colspan="3"><input type="text" name="ProductoVariedad_" id="ProductoVariedad_"  class="validate[required] text-input" /></td>
      </tr>
      <tr>
        <td align="right">&Aacute;rea:</td>
        <td width="180"><input type="text" name="ProductoArea_" id="ProductoArea_" class="validate[required] text-input" /></td>
        <td colspan="2">ha</td>
      </tr>
      <tr>
        <td align="right">Producci&oacute;n Anual Esperada:</td>
        <td><input type="text" name="ProductoProduccionAnual_" id="ProductoProduccionAnual_" /></td>
        <td colspan="2">kg</td>
      </tr>
      <tr>
        <td align="right">Mes(es) de la Afloraci&oacute;n:</td>
        <td colspan="4" class="chk"><label for="enero">
            <input type="checkbox" name="ProductoMesAfloracion_chk[]" id="enero" value="Enero" />
            Enero </label>
          <label for="febrero">
            <input type="checkbox"name="ProductoMesAfloracion_chk[]"id="febrero" value="Febrero"  />
            Febrero </label>
          <label for="marzo">
            <input type="checkbox" name="ProductoMesAfloracion_chk[]" id="marzo" value="Marzo" />
            Marzo </label>
          <label for="abril">
            <input type="checkbox"name="ProductoMesAfloracion_chk[]" id="abril" value="Abril"  />
            Abril </label>
          <label for="mayo">
            <input type="checkbox"name="ProductoMesAfloracion_chk[]" id="mayo" value="Mayo" />
            Mayo </label>
          <label for="junio">
            <input type="checkbox" name="ProductoMesAfloracion_chk[]" id="junio" value="Junio"  />
            Junio </label>
          <label for="julio">
            <input type="checkbox" name="ProductoMesAfloracion_chk[]" id="julio"  value="Julio" />
            Julio </label>
          <label for="agosto">
            <input type="checkbox" name="ProductoMesAfloracion_chk[]" id="agosto" value="Agosto"  />
            Agosto </label>
          <label for="setiembre">
            <input type="checkbox" name="ProductoMesAfloracion_chk[]" id="setiembre" value="Setiembre"  />
            Setiembre </label>
          <label for="octubre">
            <input type="checkbox" name="ProductoMesAfloracion_chk[]" id="octubre" value="Octubre"  />
            Octubre </label>
          <label for="noviembre">
            <input type="checkbox" name="ProductoMesAfloracion_chk[]" id="noviembre" value="Noviembre"  />
            Noviembre </label>
          <label for="diciembre">
            <input type="checkbox" name="ProductoMesAfloracion_chk[]" id="diciembre" value="Diciembre"  />
            Diciembre </label></td>
      </tr>
      <tr>
        <td align="right">Mes(es) de la Cosecha:</td>
        <td colspan="4" class="chk"><label for="enero1">
            <input type="checkbox" name="ProductoMesCosecha_chk[]" id="enero1" value="Enero" />
            Enero </label>
          <label for="febrero1">
            <input type="checkbox"name="ProductoMesCosecha_chk[]"id="febrero1" value="Febrero"  />
            Febrero </label>
          <label for="marzo1">
            <input type="checkbox" name="ProductoMesCosecha_chk[]" id="marzo1" value="Marzo" />
            Marzo </label>
          <label for="abril1">
            <input type="checkbox"name="ProductoMesCosecha_chk[]" id="abril1" value="Abril"  />
            Abril </label>
          <label for="mayo1">
            <input type="checkbox"name="ProductoMesCosecha_chk[]" id="mayo1" value="Mayo" />
            Mayo </label>
          <label for="junio1">
            <input type="checkbox" name="ProductoMesCosecha_chk[]" id="junio1" value="Junio"  />
            Junio </label>
          <label for="julio1">
            <input type="checkbox" name="ProductoMesCosecha_chk[]" id="julio1"  value="Julio" />
            Julio </label>
          <label for="agosto1">
            <input type="checkbox" name="ProductoMesCosecha_chk[]" id="agosto1" value="Agosto"  />
            Agosto </label>
          <label for="setiembre1">
            <input type="checkbox" name="ProductoMesCosecha_chk[]" id="setiembre1" value="Setiembre"  />
            Setiembre </label>
          <label for="octubre1">
            <input type="checkbox" name="ProductoMesCosecha_chk[]" id="octubre1" value="Octubre"  />
            Octubre </label>
          <label for="noviembre1">
            <input type="checkbox" name="ProductoMesCosecha_chk[]" id="noviembre1" value="Noviembre"  />
            Noviembre </label>
          <label for="diciembre1">
            <input type="checkbox" name="ProductoMesCosecha_chk[]" id="diciembre1" value="Diciembre"  />
            Diciembre </label></td>
      </tr>
      <tr>
        <td align="right">Nota:</td>
        <td colspan="3"><textarea name="ProductoDescripcion_" id="ProductoDescripcion_"  rows="5"></textarea></td>
      </tr>
      <tr>
        <td ></td>
        <td align="right"><input type="submit" value="Registrar" name="btregistrar2" /></td>
        <td width="217" align="left"><input type="button" value="Cancelar" onclick="location.href='producto.php'"/></td>
        <td width="617" align="left">&nbsp;</td>
      </tr>
     
    </table>
  </form>
</div>

</body>
</html>