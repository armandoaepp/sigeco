<?php
	session_start();
		  
  include_once "./Controlador_parcela.php"; 
  include_once "../cixajax.php"; 
  $cix=new CixAJAX();
	$idUnidadP=$_SESSION["UnidadProductivaId"];				 
	$data=CListarParcela($idUnidadP);
	//$data=CListarParcela(3);				
          ?>

<table border="0"  id="tablaParcela"class="tablazebra">
  <tr>
    <th width="8%" >Eliminar</th>
    <th >Nº</th>
    <th  >ParcelaId</th>
    <th >Nombre</th>
    <th >Area</th>
    <th  >Productos</th>
    <th >GPS</th>
  </tr>
  <?php 
	$cantele = count($data["cuerpo"]);
	if ($cantele > 0) {
		//$ir="d_parcela.php";
		$ir="index_interno.php";
		for ($i = 0;$i < $cantele;$i++) {
			$idParcela=$data["cuerpo"][$i][0];
			//$url =' onclick="document.location=\''.$ir.'?idP='.$idParcela.'\'" ';
			$url =' onclick="document.location=\''.$ir.'?accion=DetalleParcela&idP='.$idParcela.'\'" ';
	?>
  <tr>
    <td><a href="#"  onClick="Eliminar('<?php echo $idParcela; ?>'); return false" ><img src="../imgcixphp/delete.gif" width="16" title="Eliminar" height="16"/></td>
    <td<?php echo $url ;?>><?php echo $i+1 ;?></td>
    <td<?php echo $url ;?>><?php echo $idParcela ;?></td>
    <td<?php echo $url ;?>><?php echo $data["cuerpo"][$i][1] ;?></td>
    <td<?php echo $url ;?>><?php echo $data["cuerpo"][$i][2] ;?></td>
    <td<?php echo $url ;?>><?php 
			   $dataProductos=CListar_parcela_productos($idUnidadP, $idParcela); 
			   $cantproductos = count($dataProductos["cuerpo"]);
			  // echo "cantproductos :: $cantproductos ";
			   $producto="";
            if ($cantproductos > 0) {
                for ($j = 0;$j < $cantproductos;$j++) {
					 $producto.=$dataProductos["cuerpo"][$j]["Producto"]."<br>";
					}				
				}
				echo  $producto ;
			   
			   ?></td>
    <td  align="center"><?php 
			   $dataGeo=CListar_parcela_georeferencia($idParcela); 
			   $CantidadGeo = count($dataGeo["cuerpo"]);
			  
			   $geo="";
            if ($CantidadGeo > 0) {
              	// $geo=$data["cuerpo"][0][0];
				echo '<img src="../images/icon_verde.png"  />';
				}else{echo '<img src="../images/icon_rojo.png"  />';}
				
				?></td>
  </tr>
  <?php 
				}
				
			}else{//solo si es k no hay datos
				$mensaje= "No se encuentran Ningun Dato Registrado "; 
			 echo '<tfoot><tr > <td colspan="6">&nbsp; '.$mensaje.' </td></tr></tfoot>';
				}
			  
			  ?>
</table>
