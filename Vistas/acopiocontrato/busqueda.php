<?php 
include_once("../tipocontrato/Controlador_tipocontrato.php");
//include_once("../periodo/Controlador_periodo.php");
include_once "../cixfrm.php";
 $cixfrm = new CixFRM();	

//include_once("../fecha.php");
?>
<style>
#Frm_BuscarAsignacion {
	width: 100% !important;
}


.tablaBuscar {
/* *border-collapse: collapse;  IE7 and lower */
	border-spacing: 0;
	width: 100%;
	border: solid #ccc 1px;
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	border-radius: 6px;
	-webkit-box-shadow: 0 1px 1px #ccc;
	-moz-box-shadow: 0 1px 1px #ccc;
	box-shadow: 0 1px 1px #ccc;
	font-size:13.5px;
}
.tablaBuscar td {
	border: 1px solid #ccc;
	width:100%
}
#Frm_BuscarAsignacion label {
	width: 100%;
	text-align: right;
	display:inline;
	font-weight:bold;
	margin:2px;
	
	
	}
#Frm_BuscarAsignacion input{
	height:22px;
	margin:2px
	}
#Frm_BuscarAsignacion label p{
	width:120px;
	
	}
#Frm_BuscarAsignacion select{
	height:24px;
	margin:2px;
	width:200px
}
</style>
<blockquote>
  <form id="Frm_BuscarAsignacion" name="form1" method="post">
    <table border="0" class="tablaBuscar">
      <tr>
        <td rowspan="2" style="width:100%!important; text-align:center; padding:3px;"><label >Calificacion de Catación</label></td>
        <td><label for="CatacionDesde_">Desde</label></td>
        <td><input type="text" name="CatacionDesde_" id="CatacionDesde_" tabindex="1" /></td>
        <td><label for="FechaEmbarque_"><p>Fecha de Embarque</p></label></td>
        <td><input type="date" name="FechaEmbarque_" id="FechaEmbarque_"  tabindex="3"/></td>
        <td><label for="TipoContratoId_"><p>Tipo de Contrato</p></label></td>
        <td>
            <select name="TipoContratoId_" id="TipoContratoId_" tabindex="5">
            <?php 		
				$dataContrato=CListar_tipocontrato();
				//TipoContratoId As 'TipoContratoId',TipoContrato As 'TipoContrato'
				$datcontratos= $cixfrm->ImprimeCuerpoSelect($dataContrato,"TipoContratoId","TipoContrato",0,false);  
				echo $datcontratos ;
			?>
            </select>
          </td>
      </tr>
      <tr>
        <td><label for="CatacionHasta_">Hasta</label></td>
        <td><input type="text" name="CatacionHasta_" id="CatacionHasta_" tabindex="2" /></td>
        <td><label for="Status_">Estatus</label></td>
        <td>
        <select name="Status_" id="Status_" tabindex="4">        
            <option value="" style="color:#CCCCCC">
            Seleccionar
            </option>
            <option value="C0">C0</option>
            <option value="C1">C1</option>
            <option value="C2">C2</option>
            <option value="ORGANICO">ORGANICO</option>
          </select>
          </td>
        <td colspan="2"><button type="submit" tabindex="6" name="btnBuscar" value="btnBuscar">Buscar</button></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </form>
</blockquote>
