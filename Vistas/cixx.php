<?php
function ImprimeTableCabeceraPOB($idTabla, $data, $pactu, $peli,  $paginap = 1,$buscar="",$classCSS="") {
		 $tabla="";
		 $tabla.= '<table id="' . $idTabla . '" class="'.$classCSS.'" cellpadding="0" cellspacing="1"  >';
        try {
         
			    if (count($data["columnas"]) > 0) {
				$tabla.= '<thead>';
                $tabla .= '<tr>';
                $conta = 0;
                $conte = 0;
                for ($x = 0;$x < count($data["columnas"]);$x++) {
                    if ($pactu != "") {
                        if ($conta == 0) {
                            $tabla.= '<td></td>';
                        }
                    }
                    if ($peli != "") {
                        if ($conte == 0) {
                            $tabla.= '<td></td>';
                        }
                    }
                    $conta++;
                    $conte++;                   										 
					$ordenar = $x + 1;								
					$tabla.= '<th><a href="#" onClick="Paginar(\'pagina=' . $paginap . '&orden=' .$ordenar .'&busca=' .$buscar .'\'); return false;"  >' . utf8_encode($data["columnas"][$x]) . '</a></th>'."\n";	
								     
                }
                 $tabla.= "</tr>";
				$tabla.= '</thead>';
			   }
       			$tabla.= '<tbody>';
			$tabla.= '</table><p style="clear:both;height:5px;"></p>';              
             			
        } catch(exception $e) {
            return $e->getMessage();
        }
        return $tabla;
    }
function ImprimeTableCuerpoPOB($idTabla, $data, $pactu, $peli, $crxpag, $paginap = 1,$link_td="") {
	$tabla="";
	try {
		//===========CUERPO DE TABLA=================================================================================================
		$cantele = count($data["cuerpo"]);
		if ($cantele > 0) {
			$fin = $paginap * $crxpag;
			$ini = $fin - $crxpag;
			for ($i = $ini;$i < $fin;$i++) {
				$conta = 0;
				$conte = 0;
				$tabla.= '<tr>';
				for ($z = 0;$z < count($data["columnas"]);$z++) {
					$columnas = $data["columnas"][$z];
					if (isset($data["cuerpo"][$i]["$columnas"])) {
						if ($pactu != "") {
							if ($conta == 0) {
							   $tabla.= '<td><a href="#" onClick="'.$pactu.'('. $data["cuerpo"][$i]["$columnas"] .'); return false;" >
							   <img src="../imgcixphp/ico_actualizar.gif" title="Actualizar" width="16" height="16"/></a></td>'."\n";	
							}
						}
						if ($peli != "") {
							if ($conte == 0) {;
								$tabla.= '<td><a href="#"  onClick="'.$peli.'('.$data["cuerpo"][$i]["$columnas"] .'); return false;" >
								<img src="../imgcixphp/delete.gif" width="16" title="Eliminar" height="16"/></a></td>'."\n";
							}
						}
					}
					$conta++;
					$conte++;
					if (isset($data["cuerpo"][$i]["$columnas"])) {
						if($link_td!=""){	$ID= $data["cuerpo"][$i][0] ; // ID
							$url =$link_td."?id=".$ID;// Url mas id como dato mediante el metodo get 							
							 $tabla.= '<td onclick="document.location=\''.$url.'\' " >' . $data["cuerpo"][$i]["$columnas"] . '</td>' . "\n";
						  }else{ 
							$tabla.= '<td>' . $data["cuerpo"][$i]["$columnas"] . '</td> '."\n";
						  }					                          
					}
				}
				$tabla.= '</tr>'."\n";			
				
			} 

		  }
	} catch(exception $e) {
		return $e->getMessage();
	}
	return $tabla;
}

function PaginarAJAX($cantele, $crxpag, $paginap, $cantlink,$orderby=-1, $buscar="") {
	// vamos a generar un metodo que sivar para pagina, buscar , ordenar si carajooo 
		$parametros="";
		$textBuscar="";
		$numOrden="";
		if($buscar!="")	$textBuscar="&busca=".$buscar;
		if($orderby!=-1) $numOrden="&orden=".$orderby;
		
		$parametros=$numOrden.$textBuscar;		
		
	 $tabla = "";	
    $cantpag = ceil($cantele / $crxpag);
    //  $inicio = ($paginap - 1) * $crxpag;
    if ($cantpag > 1) {
        $ini = 1;
        $fin = $cantpag;
        // $cantlink = 5;
        if ($cantpag > $cantlink) $fin = $cantlink;
        if ($paginap > ceil($cantlink / 2)) {
            $resto = $cantlink % 2; // para no tener problemas cuando sea impar o par la cantidad de paginas
            if ($resto == 0) {
                $ini = $paginap - floor($cantlink / 2) + 1;
            } else {
                $ini = $paginap - floor($cantlink / 2);
            }
            //ceil($cantlink / 2) ; redondea fracciones hacia abajo
            $fin = $paginap + floor($cantlink / 2); //ceil($cantlink / 2);
            
        }
        if ($ini <= 0) $ini = 1;
        if ($fin > $cantpag) {
            $ini = $ini - ($fin - $cantpag);
            if ($ini <= 0) $ini = 1;
            $fin = $cantpag;
        }
        $tabla.= '<table id="paginacion"  cellpadding="0" cellspacing="0" border="1" align="center" style="text-align:center" ><tr>'."\n";
        if ($paginap != 1) {
            //$tabla.= '<td width="30px"><a  href="?pagina=1&busca=' . $buscar . '" title="Ir Primera Pagina"><<</a></td>'."\n";
			$tabla.= '<td width="30px"><a href="#" onClick="Paginar(\'pagina=1'.$parametros.'\'); return false"  title="Ir Primera Pagina"><<</a></td>'."\n";
        } else {
            $tabla.= '<td width="30px"><<</td>'."\n";
        }
        for ($i = $ini;$i <= $fin;$i++) {
            if ($i != $paginap) {
               // $tabla.= '<td width="30px"><a  href="?pagina=' . $i . '&busca=' . $buscar . '">' . $i . '</a></td>'."\n";
				$tabla.= '<td width="30px"><a href="#"  onClick="Paginar(\'pagina=' . $i.$parametros.'\'); return false">' . $i . '</a></td>'."\n";
                //$tabla.="<a href='?pagina=$i'>$i</a> ";
                				
            } else {
                $tabla.= '<td width="30px">' . $i . '</td>';
                // $tabla.= "$i"  ;
                
            }
        }
        if ($paginap != $fin) {
            //$tabla.= '<td width="30px"><a   href="?pagina=' . $cantpag . '&busca=' . $buscar . '"  title="Ir Ultima Pagina">>></a></td>'."\n";
     		$tabla.= '<td width="30px"><a href="#" onClick="Paginar(\'pagina=' . $cantpag .$parametros.'\'); return false;" title="Ir Ultima Pagina">>></a></td>'."\n";
        } else {
            $tabla.= '<td width="30px">>></td>';
        }
        $tabla.= "</tr></table>";
    }
    return $tabla;
 }
?>