<?php   
try{	
include_once "Controlador_analisisquimico.php";
session_start();
	$idUnidadP=$_SESSION["UnidadProductivaId"];				 
	$rptamo=CLista_analisisquimico_xUnidadProductiva($idUnidadP);
$cantele=count($rptamo["cuerpo"]);
//echo "Count ::: $cantele ";
if($cantele>0){
	for($i=0;$i<$cantele;$i++){							 
		$AnalisisQuimicoId=$rptamo["cuerpo"][$i]["AnalisisQuimicoId"];
		$AnalisisQuimicoFecha=$rptamo["cuerpo"][$i]["AnalisisQuimicoFecha"];
		$AnalisisQuimicoPh=$rptamo["cuerpo"][$i]["AnalisisQuimicoPh"];
		$AnalisisQuimicoMateria=$rptamo["cuerpo"][$i]["AnalisisQuimicoMateria"];
		$AnalisisQuimicoCarbono=$rptamo["cuerpo"][$i]["AnalisisQuimicoCarbono"];
		$AnalisisQuimicoNt=$rptamo["cuerpo"][$i]["AnalisisQuimicoNt"];
		$AnalisisQuimicoN=$rptamo["cuerpo"][$i]["AnalisisQuimicoN"];
		$AnalisisQuimicoMo=$rptamo["cuerpo"][$i]["AnalisisQuimicoMo"];
		$AnalisisQuimicoK=$rptamo["cuerpo"][$i]["AnalisisQuimicoK"];
		$AnalisisQuimicoCa=$rptamo["cuerpo"][$i]["AnalisisQuimicoCa"];
		$AnalisisQuimicoMg=$rptamo["cuerpo"][$i]["AnalisisQuimicoMg"];
		$AnalisisQuimicoNa=$rptamo["cuerpo"][$i]["AnalisisQuimicoNa"];
		$AnalisisQuimicoAl=$rptamo["cuerpo"][$i]["AnalisisQuimicoAl"];
		$AnalisisQuimicoH=$rptamo["cuerpo"][$i]["AnalisisQuimicoH"];
		$AnalisisQuimicoCIC=$rptamo["cuerpo"][$i]["AnalisisQuimicoCIC"];	
		$AnalisisQuimicoP2=$rptamo["cuerpo"][$i]["AnalisisQuimicoP2"];
		$AnalisisQuimicoP=$rptamo["cuerpo"][$i]["AnalisisQuimicoP"];
		$AnalisisQuimicoFe=$rptamo["cuerpo"][$i]["AnalisisQuimicoFe"];
		$AnalisisQuimicoMn=$rptamo["cuerpo"][$i]["AnalisisQuimicoMn"];
		$AnalisisQuimicoBoro=$rptamo["cuerpo"][$i]["AnalisisQuimicoBoro"];
		$AnalisisQuimicoZn=$rptamo["cuerpo"][$i]["AnalisisQuimicoZn"];
		$AnalisisQuimicoAzufre=$rptamo["cuerpo"][$i]["AnalisisQuimicoAzufre"];
		$AnalisisQuimicoCu=$rptamo["cuerpo"][$i]["AnalisisQuimicoCu"];
		$AnalisisQuimicoAr=$rptamo["cuerpo"][$i]["AnalisisQuimicoAr"];
		$AnalisisQuimicoA=$rptamo["cuerpo"][$i]["AnalisisQuimicoA"];
		$AnalisisQuimicoDescripcion=$rptamo["cuerpo"][$i]["AnalisisQuimicoDescripcion"];
		$Parcela=$rptamo["cuerpo"][$i]["ParcelaNombre"];
		$AnalisisQuimicoL=$rptamo["cuerpo"][$i]["AnalisisQuimicoL"];
?>

<div id="DatosSuelo" style="height:100%; margin: 5px;  border-bottom:#CCCCCC 1px solid; padding:5px">
  <table id="tablaAnalisis" border="0" cellspacing="1" cellpadding="1" width="700">
    <tr>
      <td width="10%"><a href="#" title="Eliminar"  onClick="Eliminar(<?php echo  $AnalisisQuimicoId ;?>); return false" 
                   id="<?php echo  $AnalisisQuimicoId ;?>"><img  src="../images/delete.gif" alt="Eliminar"/></a> &nbsp; &nbsp; <a  title="Editar" href="javascript:Modificar(<?php echo $AnalisisQuimicoId;?>);" id="<?php echo  $AnalisisQuimicoId ;?>"> <img  src="../images/edit.gif" alt="Editar"/></a></td >
      <td width="15%"><p>Fecha</p></td>
      <td width="20%">&nbsp;:&nbsp;<?php  echo  $AnalisisQuimicoFecha ;?></td>
      <td width="15%"><p>Parcela</p></td>
      <td width="40%">&nbsp;:&nbsp;<?php echo  $Parcela  ;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p>L</p></td>
      <td>&nbsp;:&nbsp;
        <?php  if ($AnalisisQuimicoL>0)  echo  $AnalisisQuimicoL ;?></td>
      <td><p>Ph </p></td>
      <td>&nbsp;:&nbsp;
        <?php  if ($AnalisisQuimicoPh>0) echo  $AnalisisQuimicoPh ;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p>Materia </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoMateria>0) echo  $AnalisisQuimicoMateria ;?></td>
      <td><p>Carbono </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoCarbono>0)  echo  $AnalisisQuimicoCarbono ;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p>Nt </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoNt>0) echo  $AnalisisQuimicoNt ;?></td>
      <td><p>N </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoN>0) echo  $AnalisisQuimicoN ;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p>Mo </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoMo>0) echo  $AnalisisQuimicoMo ;?></td>
      <td><p>K </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoK>0) echo  $AnalisisQuimicoK  ;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p>Ca </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoCa>0) echo  $AnalisisQuimicoCa ;?></td>
      <td><p>Mg </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoMg>0) echo  $AnalisisQuimicoMg ;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p>Na </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoNa>0) echo  $AnalisisQuimicoNa ;?></td>
      <td><p>Al </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoAl>0) echo  $AnalisisQuimicoAl ;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p>H </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoH>0) echo  $AnalisisQuimicoH ;?></td>
      <td><p>CIC </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoCIC>0) echo  $AnalisisQuimicoCIC ;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p>P2 </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoP2>0) echo  $AnalisisQuimicoP2 ;?></td>
      <td><p>P </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoP>0) echo  $AnalisisQuimicoP ;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p>Fe </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoFe>0) echo  $AnalisisQuimicoFe ;?></td>
      <td><p>Mn </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoMn>0) echo  $AnalisisQuimicoMn ;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p>Boro </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoBoro>0) echo  $AnalisisQuimicoBoro ;?></td>
      <td><p>Zn </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoZn>0) echo  $AnalisisQuimicoZn ;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p>Azufre </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoAzufre>0) echo  $AnalisisQuimicoAzufre ;?></td>
      <td><p>Cu </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoCu>0) echo  $AnalisisQuimicoCu ;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p>Ar </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoAr>0) echo  $AnalisisQuimicoAr ;?></td>
      <td><p>A </p></td>
      <td>&nbsp;:&nbsp;
        <?php   if ($AnalisisQuimicoA>0) echo  $AnalisisQuimicoA ;?></td>
    </tr>
    <tr>
      <td></td>
      <td><p>Descripción</p></td>
      <td colspan="3">&nbsp;:&nbsp;
        <?php   echo  $AnalisisQuimicoDescripcion ;?></td>
    </tr>
  </table>
</div>
<?php 
		}
	}
	
}catch(exception $e){return $e->getMessage();}

?>
