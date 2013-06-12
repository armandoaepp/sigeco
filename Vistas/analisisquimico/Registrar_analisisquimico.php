
<div id="divRegistrar_analisisquimico">
  <form id="frmRegistrar_analisisquimico" name="frmRegistrar_analisisquimico" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaRegistrar_analisisquimico">
      <tr>
        <td width="150" align="right">Fecha:</td>
        <td><input type="text" name="AnalisisQuimicoFecha_" id="AnalisisQuimicoFecha_" value=""/></td>
      </tr>
      <tr>
        <td align="right">Parcela </td>
        <td colspan="2"><label for="ParcelaId_"></label>
          <select name="ParcelaId_" id="ParcelaId_">
            <?php
	
	include_once "../parcela/Controlador_parcela.php"; 
	include_once "../cixphp.php"; 
	$cix=new CixPHP();
	$idUnidadP=$_SESSION["UnidadProductivaId"];				 
	$data=CListar_Parcela_xUnidadProductiva($idUnidadP);
	 $dataSelect = $cix->ImprimeCuerpoSelect($data,"ParcelaId","ParcelaNombre");  
		 echo $dataSelect ;
?>
          </select></td>
      </tr>
      <tr>
        <td align="right">Ph:</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoPh_" id="AnalisisQuimicoPh_" value=""/></td>
      </tr>
      <tr>
        <td align="right">Materia Orgánica del Suelo(MOS):</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoMateria_" id="AnalisisQuimicoMateria_" value=""/>
          %</td>
      </tr>
      <tr>
        <td align="right">Carbono total en el suelo(Ct):</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoCarbono_" id="AnalisisQuimicoCarbono_" value=""/>
          %</td>
      </tr>
      <tr>
        <td align="right">Nitrogeno total el el suelo(Nt):</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoNt_" id="AnalisisQuimicoNt_" value=""/>
          %</td>
      </tr>
      <tr>
        <td align="right">N (Nitrogeno):</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoN_" id="AnalisisQuimicoN_" value=""/>
          cmol(+).kg-1</td>
      </tr>
      <tr>
        <td align="right">Mo (Molibdeno):</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoMo_" id="AnalisisQuimicoMo_" value=""/>
          cmol(+).kg-1</td>
      </tr>
      <tr>
        <td align="right">K (Potasio):</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoK_" id="AnalisisQuimicoK_" value=""/>
          cmol(+).kg-1</td>
      </tr>
      <tr>
        <td align="right">Ca (Calcio):</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoCa_" id="AnalisisQuimicoCa_" value=""/>
          cmol(+).kg-1</td>
      </tr>
      <tr>
        <td align="right">Mg (Magnesio):</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoMg_" id="AnalisisQuimicoMg_" value=""/>
          cmol(+).kg-1</td>
      </tr>
      <tr>
        <td align="right">Na (Sodio):</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoNa_" id="AnalisisQuimicoNa_" value=""/>
          cmol(+).kg-1</td>
      </tr>
      <tr>
        <td align="right">Al (Aluminio):</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoAl_" id="AnalisisQuimicoAl_" value=""/>
          cmol(+).kg-1</td>
      </tr>
      <tr>
        <td align="right">Ácidez Intercambiable (H):</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoH_" id="AnalisisQuimicoH_" value=""/>
          cmol(+).kg-1</td>
      </tr>
      <tr>
        <td align="right">CID (Capacidad de intercambio catiónico):</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoCIC_" id="AnalisisQuimicoCIC_" value=""/>
          cmol(+).kg-1</td>
      </tr>
      <tr>
        <td align="right">P (Fósforo) Bray2:</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoP2_" id="AnalisisQuimicoP2_" value=""/>
          mg*kg-1</td>
      </tr>
      <tr>
        <td align="right">P (Fósforo) Olsen :</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoP_" id="AnalisisQuimicoP_" value=""/>
          mg*kg-1</td>
      </tr>
      <tr>
        <td align="right">Fe (Hierro):</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoFe_" id="AnalisisQuimicoFe_" value=""/>
          mg*kg-1</td>
      </tr>
      <tr>
        <td align="right">Mn (Manganeso):</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoMn_" id="AnalisisQuimicoMn_" value=""/>
          mg*kg-1</td>
      </tr>
      <tr>
        <td align="right">Boro:</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoBoro_" id="AnalisisQuimicoBoro_" value=""/>
          mg*kg-1</td>
      </tr>
      <tr>
        <td align="right">Zn (Zinc):</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoZn_" id="AnalisisQuimicoZn_" value=""/>
          mg*kg-1</td>
      </tr>
      <tr>
        <td align="right">Azufre:</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoAzufre_" id="AnalisisQuimicoAzufre_" value=""/>
          mg*kg-1</td>
      </tr>
      <tr>
        <td align="right">Cu (Cobre):</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoCu_" id="AnalisisQuimicoCu_" value=""/>
          mg*kg-1</td>
      </tr>
      <tr>
        <td align="right">Ar (Arcilla):</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoAr_" id="AnalisisQuimicoAr_" value=""/>
          %</td>
      </tr>
      <tr>
        <td align="right">L (Limo)</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoL_" id="AnalisisQuimicoL_" value=""/>
          %</td>
      </tr>
      <tr>
        <td align="right">A (Arena):</td>
        <td colspan="2"><input type="text" name="AnalisisQuimicoA_" id="AnalisisQuimicoA_" value=""/>
          %</td>
      </tr>
      <tr>
        <td align="right">Notas:</td>
        <td colspan="2"><textarea name="AnalisisQuimicoDescripcion_" id="AnalisisQuimicoDescripcion_" cols="45" rows="5"></textarea></td>
      </tr>     
      <tr>
        <td align="right" colspan="3"><?php //echo $rpta;?></td>
      </tr>
    </table>
    <center>
      &nbsp;&nbsp;
      <input type="submit" value=" Registrar " name="btregistrar">
      &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="button"  id="CancelarRegistro" value=" Cancelar " onclick="Cancelar('ModalAnalisisQuimico');" />
      &nbsp;&nbsp;
    </center>
  </form>
</div>
