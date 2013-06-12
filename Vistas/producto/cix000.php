<?php 
function ImprimeTableP($idTabla, $data, $pactu, $peli, $crxpag=10, $paginap = 1, $cantlink = 5,$classCSS='') {
		$tabla = '<table id="' . $idTabla . '" class="'.$classCSS.'" cellpadding="0" cellspacing="1" border="1" align="center" style="text-align:center;" >';
        try {
            //if (count($data) > 0) {
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
                    $tabla.= '<th>' . utf8_encode($data["columnas"][$x]) . '</th>'."\n";
                    //$tabla.= Columna_Cabezera("f1", utf8_encode($data["columnas"][$x]));
                    
                }
           		$tabla.= '</tr>';
				$tabla.= '</thead>';
			   }
			
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
                                   // $tabla.= '<td><a href="' . $pactu . 'id=' . $data["cuerpo"][$i]["$columnas"] . '&accion=Mactualizar"><img src="../imgcixphp/ico_actualizar.gif" title="Actualizar" width="16" height="16"/></a></td>'."\n";
								    $tabla.= '<td><a href="#" onClick="'.$pactu.'('. $data["cuerpo"][$i]["$columnas"] .'); return false;" title="Actualizar" ><img  src="../imgcixphp/ico_actualizar.gif" title="Actualizar" width="16" height="16"/></a></td>'."\n";
                                }
                            }
                            if ($peli != "") {
                                if ($conte == 0) {;
                                   // $tabla.= '<td><a href="' . $peli . 'id=' . $data["cuerpo"][$i]["$columnas"] . '&accion=Eliminar"><img src="../imgcixphp/ico_eliminar.gif" width="16" title="Eliminar" height="16"/></a></td>'."\n";
								    $tabla.= '<td><a href="#"  onClick="'.$peli.'('.$data["cuerpo"][$i]["$columnas"] .'); return false;" ><img src="../imgcixphp/delete.gif" width="16" title="Eliminar" height="16"/></a></td>'."\n";
                                }
                            }
                        }
                        $conta++;
                        $conte++;
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            $tabla.= '<td>&nbsp;' . $data["cuerpo"][$i]["$columnas"] . '&nbsp; </td> '."\n";
                        }
                    }
                    $tabla.= '</tr>';
                }               
               
            }else{//solo si es k no hay datos
				$mensaje= "No se encuentran  Datos Registrados"; 
			 	 $tabla.='<tfoot><tr> <td >&nbsp; '.$mensaje.' </td></tr></tfoot>';
				}
			//===========FIN CUERPO DE TABLA===========================================================================================
             $tabla.= '</table><br />';
			 
			  //===========PAGINADO======================================================================================================================
              /* $paginado = Paginar($cantele, $crxpag, $paginap, $cantlink);
                $tabla.= $paginado;*/
                //===========FIN PAGINADO ==================================================================================================================
                
        }catch(exception $e) {
            return $e->getMessage();
        }
        return $tabla;
    }

?>