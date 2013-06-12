<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php 
//header("Content-Type: text/html;charset=utf-8");// para uniformizar los datos en json problemas de las tildes
	include_once "./Controlador_acopio.php"; 
	
	$data=CListar_acopio();
	$cantele=count($data["cuerpo"]);
	
	
?>
<table width="200" border="1">
  <tr>
    <th>AcopioId</th>
    <th>Fecha</th>
    <th>Productor</th>
    <th>Nº Guia</th>
    <th>Tipo</th>
    <th>Nº Sacos</th>
    <th>Kg Netos</th>
    <th>Humedad</th>
    <th>Rendimiento</th>
    <th>Precio Quintal</th>
    <th>Importe </th>
    <th>Calificación Catación</th>
    <th>Estado Estimación</th>
  </tr>
  <?php 

if($cantele>0){
	$verde='<img src="../images/icon_verde.png" width="20" height="20" alt="" />';
	$ambar='<img src="../images/icon_ambar.png" width="20" height="20" />';
	$rojo='<img src="../images/icon_rojo.png" width="20" height="20" />';
	for($i=0;$i<$cantele;$i++){	
		//AcopioId	AcopioFecha	Productor	GuiaAcopioNumero	AcopioStatus	AcopioNSacos	AcopioQuintalesNetos	AcopioHumedadEntregada	RendimientoPorcentaje	AcopioPrecioQuintal	HumedadImporteTotal	TaceoPuntajeCatador	EstadoAcopioSaldo
		$AcopioId=$data["cuerpo"][$i]["AcopioId"];
		$AcopioFecha=$data["cuerpo"][$i]["AcopioFecha"];
		$Productor=$data["cuerpo"][$i]["Productor"];
		$GuiaAcopioNumero=$data["cuerpo"][$i]["GuiaAcopioNumero"];
		$AcopioStatus=$data["cuerpo"][$i]["AcopioStatus"];		
		$AcopioNSacos=$data["cuerpo"][$i]["AcopioNSacos"];
		$AcopioQuintalesNetos=$data["cuerpo"][$i]["AcopioQuintalesNetos"];// kg netos		
		$AcopioHumedadEntregada=$data["cuerpo"][$i]["AcopioHumedadEntregada"];		
		$RendimientoPorcentaje=$data["cuerpo"][$i]["RendimientoPorcentaje"];			
		$AcopioPrecioQuintal=$data["cuerpo"][$i]["AcopioPrecioQuintal"];				
		$HumedadImporteTotal=$data["cuerpo"][$i]["HumedadImporteTotal"];		
		$TaceoPuntajeCatador=$data["cuerpo"][$i]["TaceoPuntajeCatador"];		
		$EstadoAcopioSaldo=$data["cuerpo"][$i]["EstadoAcopioSaldo"];
		$estado="";
		if($EstadoAcopioSaldo>100){$estado=$verde;}
		else if($EstadoAcopioSaldo>0){$estado=$ambar;}
		else{$estado=$rojo;}
?>
  <tr>
    <td><?php echo $AcopioId;?></td>
    <td><?php echo $AcopioFecha;?></td>
    <td><?php echo $Productor;?></td>
    <td><?php echo $GuiaAcopioNumero;?></td>
    <td><?php echo $AcopioStatus;?></td>
    <td><?php echo $AcopioNSacos;?></td>
    <td><?php echo $AcopioQuintalesNetos;?></td>
    <td><?php echo $AcopioHumedadEntregada;?></td>
    <td><?php echo $RendimientoPorcentaje;?></td>
    <td><?php echo $AcopioPrecioQuintal;?></td>
    <td><?php echo $HumedadImporteTotal;?></td>
    <td><?php echo $TaceoPuntajeCatador;?></td>    
    <td><?php echo $estado;?></td>
    
  </tr>
  <?php 
	}
}?>
</table>

</body>
</html>

