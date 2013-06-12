<?php session_start();
	include_once "../cixphp.php"; 
	$cix=new CixPHP();
	include_once "../fecha.php";
	
include_once "../parcela/Controlador_parcela.php"; 	
include_once "../analisisquimico/Controlador_analisisquimico.php";
	$rptamo=CBuscar_analisisquimico($_POST["id"]);	
	//$rptamo=CBuscar_analisisquimico(8);		
		//$LaborFecha=fechaFormatoPeru($_POST["LaborFecha_"]);	
					$AnalisisQuimicoId=$rptamo["cuerpo"][0]["AnalisisQuimicoId"];
					$AnalisisQuimicoFecha=fechaFormatoPeru($rptamo["cuerpo"][0]["AnalisisQuimicoFecha"]);
					$AnalisisQuimicoPh=$rptamo["cuerpo"][0]["AnalisisQuimicoPh"];
					$AnalisisQuimicoMateria=$rptamo["cuerpo"][0]["AnalisisQuimicoMateria"];
					$AnalisisQuimicoCarbono=$rptamo["cuerpo"][0]["AnalisisQuimicoCarbono"];
					$AnalisisQuimicoNt=$rptamo["cuerpo"][0]["AnalisisQuimicoNt"];
					$AnalisisQuimicoN=$rptamo["cuerpo"][0]["AnalisisQuimicoN"];
					$AnalisisQuimicoMo=$rptamo["cuerpo"][0]["AnalisisQuimicoMo"];
					$AnalisisQuimicoK=$rptamo["cuerpo"][0]["AnalisisQuimicoK"];
					$AnalisisQuimicoCa=$rptamo["cuerpo"][0]["AnalisisQuimicoCa"];
					$AnalisisQuimicoMg=$rptamo["cuerpo"][0]["AnalisisQuimicoMg"];
					$AnalisisQuimicoNa=$rptamo["cuerpo"][0]["AnalisisQuimicoNa"];
					$AnalisisQuimicoAl=$rptamo["cuerpo"][0]["AnalisisQuimicoAl"];
					$AnalisisQuimicoH=$rptamo["cuerpo"][0]["AnalisisQuimicoH"];
					$AnalisisQuimicoCIC=$rptamo["cuerpo"][0]["AnalisisQuimicoCIC"];
					$AnalisisQuimicoP2=$rptamo["cuerpo"][0]["AnalisisQuimicoP2"];
					$AnalisisQuimicoP=$rptamo["cuerpo"][0]["AnalisisQuimicoP"];
					$AnalisisQuimicoFe=$rptamo["cuerpo"][0]["AnalisisQuimicoFe"];
					$AnalisisQuimicoMn=$rptamo["cuerpo"][0]["AnalisisQuimicoMn"];
					$AnalisisQuimicoBoro=$rptamo["cuerpo"][0]["AnalisisQuimicoBoro"];
					$AnalisisQuimicoZn=$rptamo["cuerpo"][0]["AnalisisQuimicoZn"];
					$AnalisisQuimicoAzufre=$rptamo["cuerpo"][0]["AnalisisQuimicoAzufre"];
					$AnalisisQuimicoCu=$rptamo["cuerpo"][0]["AnalisisQuimicoCu"];
					$AnalisisQuimicoAr=$rptamo["cuerpo"][0]["AnalisisQuimicoAr"];
					$AnalisisQuimicoA=$rptamo["cuerpo"][0]["AnalisisQuimicoA"];
					$AnalisisQuimicoDescripcion=$rptamo["cuerpo"][0]["AnalisisQuimicoDescripcion"];
					$ParcelaId =$rptamo["cuerpo"][0]["ParcelaId"];
					$AnalisisQuimicoL=$rptamo["cuerpo"][0]["AnalisisQuimicoL"];
				
?>
<script>
/*Iniciar los Calendarios */
   	$(document).ready(function(){		
	$("#AnalisisQuimicoFecha1_" ).datepicker({
		showOn: "button",
		buttonImage: "../images/calendar.gif",
		buttonImageOnly: true,
		yearRange: "-80:+5",		
		changeMonth: true,
		changeYear: true,
		dateFormat: "dd/mm/yy",				
		}); 
		ActualizarAnalisisQuimico();
		
		// agregamos clases css a los text select textarea 
		 $("input[type=text],select").addClass("text ui-widget-content ui-corner-all widthInput");
		  $("textarea").addClass("text ui-widget-content ui-corner-all");
	});
	/*
function ActualizarAnalisisQuimico(){
	var metodo;
	$("#frmRegistrar_analisisquimico").submit(function(){
		
		//var datos=$(this).serialize();		
		//alert(datos);	
		metodo="&accion=Actualizar";
			$.ajax({
				url: '../analisisquimico/index_ajax.php',
				type: "POST",
				data:$(this).serialize()+metodo,
				success: function(datos){				
					alert(datos);
					//ConsultaDatos();				
					$( "#ActualizarAnalisis").dialog( "close" );
				}
			})
		 });	
	
	return false;
	}	*/

</script>
<style>
.widthInput {
	width: 200px;		
	font-size: 14px;
	color: #3a3a3a;	
}
</style>

<form id="frmActualizar_analisisquimico" name="frmRegistrar_analisisquimico" method="post" action="">
  <table border="0" id="tablaRegistrar_analisisquimico">
   <tr>
      <td width="156" align="right">Codigo:</td>
      <td width="167"><input type="text" name="AnalisisQuimicoId_"  value="<?php echo $AnalisisQuimicoId;?>"
       id="AnalisisQuimicoId_" /> </td>
    </tr>
    <tr>
      <td width="156" align="right">Fecha:</td>
      <td width="167"><input type="text" name="AnalisisQuimicoFecha_"  value="<?php echo $AnalisisQuimicoFecha;?>"
       class="text ui-widget-content ui-corner-all" id="AnalisisQuimicoFecha1_"/> </td>
    </tr>
    <tr>
      <td align="right">Parcela </td>
      <td colspan="2"><select name="ParcelaId_" id="ParcelaId_" >
          <?php
	
	
	$idUnidadP=$_SESSION["UnidadProductivaId"];				 
	$data=CListar_Parcela_xUnidadProductiva($idUnidadP);
	 $dataSelect = $cix->ImprimeCuerpoSelect($data,"ParcelaId","ParcelaNombre",$ParcelaId );  
		 echo $dataSelect ;
?>
        </select></td>
    </tr>
    <tr>
      <td align="right">Ph:</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoPh_"  id="AnalisisQuimicoPh_"  value="<?php   if ($AnalisisQuimicoPh>0) echo $AnalisisQuimicoPh;?>"/></td>
    </tr>
    <tr>
      <td align="right">Materia Orgánica del Suelo(MOS):</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoMateria_" id="AnalisisQuimicoMateria_"  value="<?php   if ($AnalisisQuimicoMateria>0) echo $AnalisisQuimicoMateria;?>"/>
        %</td>
    </tr>
    <tr>
      <td align="right">Carbono total en el suelo(Ct):</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoCarbono_" id="AnalisisQuimicoCarbono_"  value="<?php   if ($AnalisisQuimicoCarbono>0) echo $AnalisisQuimicoCarbono;?>"/>
        %</td>
    </tr>
    <tr>
      <td align="right">Nitrogeno total el el suelo(Nt):</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoNt_" id="AnalisisQuimicoNt_"  value="<?php   if ($AnalisisQuimicoNt>0) echo $AnalisisQuimicoNt;?>"/>
        %</td>
    </tr>
    <tr>
      <td align="right">N (Nitrogeno):</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoN_" id="AnalisisQuimicoN_"  value="<?php   if ($AnalisisQuimicoN>0) echo $AnalisisQuimicoN;?>"/>
        cmol(+).kg-1</td>
    </tr>
    <tr>
      <td align="right">Mo (Molibdeno):</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoMo_" id="AnalisisQuimicoMo_"  value="<?php   if ($AnalisisQuimicoMo>0) echo $AnalisisQuimicoMo;?>"/>
        cmol(+).kg-1</td>
    </tr>
    <tr>
      <td align="right">K (Potasio):</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoK_" id="AnalisisQuimicoK_"  value="<?php   if ($AnalisisQuimicoK>0) echo $AnalisisQuimicoK;?>"/>
        cmol(+).kg-1</td>
    </tr>
    <tr>
      <td align="right">Ca (Calcio):</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoCa_" id="AnalisisQuimicoCa_"  value="<?php   if ($AnalisisQuimicoCa>0) echo $AnalisisQuimicoCa;?>"/>
        cmol(+).kg-1</td>
    </tr>
    <tr>
      <td align="right">Mg (Magnesio):</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoMg_" id="AnalisisQuimicoMg_"  value="<?php   if ($AnalisisQuimicoMg>0) echo $AnalisisQuimicoMg;?>"/>
        cmol(+).kg-1</td>
    </tr>
    <tr>
      <td align="right">Na (Sodio):</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoNa_" id="AnalisisQuimicoNa_"  value="<?php   if ($AnalisisQuimicoCa>0) echo $AnalisisQuimicoNa;?>"/>
        cmol(+).kg-1</td>
    </tr>
    <tr>
      <td align="right">Al (Aluminio):</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoAl_" id="AnalisisQuimicoAl_"  value="<?php   if ($AnalisisQuimicoNa>0) echo $AnalisisQuimicoAl;?>"/>
        cmol(+).kg-1</td>
    </tr>
    <tr>
      <td align="right">Ácidez Intercambiable (H):</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoH_" id="AnalisisQuimicoH_"  value="<?php   if ($AnalisisQuimicoH>0) echo $AnalisisQuimicoH;?>"/>
        cmol(+).kg-1</td>
    </tr>
    <tr>
      <td align="right">CID (Capacidad de intercambio catiónico):</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoCIC_" id="AnalisisQuimicoCIC_"  value="<?php   if ($AnalisisQuimicoCIC>0) echo $AnalisisQuimicoCIC;?>"/>
        cmol(+).kg-1</td>
    </tr>
    <tr>
      <td align="right">P (Fósforo) Bray2:</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoP2_" id="AnalisisQuimicoP2_"  value="<?php   if ($AnalisisQuimicoP2>0) echo $AnalisisQuimicoP2;?>"/>
        mg*kg-1</td>
    </tr>
    <tr>
      <td align="right">P (Fósforo) Olsen :</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoP_" id="AnalisisQuimicoP_"  value="<?php   if ($AnalisisQuimicoP>0) echo $AnalisisQuimicoP;?>"/>
        mg*kg-1</td>
    </tr>
    <tr>
      <td align="right">Fe (Hierro):</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoFe_" id="AnalisisQuimicoFe_"  value="<?php   if ($AnalisisQuimicoFe>0) echo $AnalisisQuimicoFe;?>"/>
        mg*kg-1</td>
    </tr>
    <tr>
      <td align="right">Mn (Manganeso):</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoMn_" id="AnalisisQuimicoMn_"  value="<?php   if ($AnalisisQuimicoMn>0) echo $AnalisisQuimicoMn;?>"/>
        mg*kg-1</td>
    </tr>
    <tr>
      <td align="right">Boro:</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoBoro_" id="AnalisisQuimicoBoro_"  value="<?php   if ($AnalisisQuimicoBoro>0) echo $AnalisisQuimicoBoro;?>"/>
        mg*kg-1</td>
    </tr>
    <tr>
      <td align="right">Zn (Zinc):</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoZn_" id="AnalisisQuimicoZn_"  value="<?php   if ($AnalisisQuimicoZn>0) echo $AnalisisQuimicoZn;?>"/>
        mg*kg-1</td>
    </tr>
    <tr>
      <td align="right">Azufre:</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoAzufre_" id="AnalisisQuimicoAzufre_"  value="<?php   if ($AnalisisQuimicoAzufre>0) echo $AnalisisQuimicoAzufre;?>"/>
        mg*kg-1</td>
    </tr>
    <tr>
      <td align="right">Cu (Cobre):</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoCu_" id="AnalisisQuimicoCu_"  value="<?php   if ($AnalisisQuimicoCu>0) echo $AnalisisQuimicoCu;?>"/>
        mg*kg-1</td>
    </tr>
    <tr>
      <td align="right">Ar (Arcilla):</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoAr_" id="AnalisisQuimicoAr_"  value="<?php   if ($AnalisisQuimicoAr>0) echo $AnalisisQuimicoAr;?>"/>
        %</td>
    </tr>
    <tr>
      <td align="right">L (Limo)</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoL_" id="AnalisisQuimicoL_"  value="<?php   if ($AnalisisQuimicoL>0) echo $AnalisisQuimicoL;?>"/>
        %</td>
    </tr>
    <tr>
      <td align="right">A (Arena):</td>
      <td colspan="2"><input type="text" name="AnalisisQuimicoA_" id="AnalisisQuimicoA_"  value="<?php   if ($AnalisisQuimicoA>0) echo $AnalisisQuimicoA;?>"/>
        %</td>
    </tr>
    <tr>
      <td align="right">Notas:</td>
      <td colspan="2"><textarea name="AnalisisQuimicoDescripcion_" id="AnalisisQuimicoDescripcion_" cols="45" rows="5"><?php   echo $AnalisisQuimicoDescripcion;?></textarea></td>
    </tr>
  </table>
  <center>
    &nbsp;&nbsp;
    <input type="submit" value=" Registrar " name="btregistrar">
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button"  id="CancelarRegistro" value=" Cancelar " onclick="Cancelar('ActualizarAnalisis');" />
    &nbsp;&nbsp;
  </center>
</form>
