  <?php   session_start();
  			include_once "./Controlador_georeferencia.php"; 
  			$idparacela=$_SESSION["ParcelaId"];		  
			$dataGeo=CBuscar_georeferencia_xParcelaID($idparacela);
			$GeoReferenciaId="";
			$GeoReferenciaLatitud="";
			$GeoReferenciaLongitud="";
			$GeoReferenciaAltitud="";
			$GeoReferenciaTipoGps="";
			
			if(count($dataGeo["cuerpo"])>0){
			$GeoReferenciaId=$dataGeo["cuerpo"][0]["GeoReferenciaId"];
			$GeoReferenciaLatitud=$dataGeo["cuerpo"][0]["GeoReferenciaLatitud"];
			$GeoReferenciaLongitud=$dataGeo["cuerpo"][0]["GeoReferenciaLongitud"];
			$GeoReferenciaAltitud=$dataGeo["cuerpo"][0]["GeoReferenciaAltitud"];
			$GeoReferenciaTipoGps=$dataGeo["cuerpo"][0]["GeoReferenciaTipoGps"];
			//$ParcelaId=$dataGeo["cuerpo"][0]["ParcelaId"];
			}
			?>
  <table class="tablaSeparador" >
    <tr>
      <td style="text-align:left"><h4> Georeferencia </h4></td>
      <td style="text-align:right"><ul class="classEditar">
          <li ><a id="EditarGeoreferencia" href="javascript:ModalGeoreferencia(<?php echo $GeoReferenciaId;?>);"> Editar</a></li>
        </ul></td>
    </tr>
  </table>
  <?php 
		  
	echo "<p><strong>Latitud</strong>	: $GeoReferenciaLatitud</p>";
	echo "<p><strong>Longuitud</strong>	: $GeoReferenciaLongitud</p>";
	echo "<p><strong>ALtitud</strong>	: $GeoReferenciaAltitud</p>";
	echo "<p><strong>Tipo GPS </strong>	: $GeoReferenciaTipoGps</p>";

  ?>

