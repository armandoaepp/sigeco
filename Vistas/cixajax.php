<?php class CixAJAX  {
// Generar una  tabla con Funciones JavaScript Modificar y Eliminar (para los Modales)
function ImprimeTable($idTabla, $data, $pactu = "", $peli = "",$classCSS="") {
       // echo "ImprimeTable:::::::::::::::".count($data["cuerpo"])." <br>";
		try {
           // if (count($data) > 0) {
			   $tabla = '<table id="'.$idTabla.'" class="' . $classCSS . '"  cellpadding="0" cellspacing="1" border="1" align="center" style="text-align:center" >';
			   if (count($data["columnas"]) > 0) {
				$tabla.= '<thead>';
                $tabla .= '<tr>';
                $conta = 0;
                $conte = 0;
				
                for ($x = 0;$x < count($data["columnas"]);$x++) {
					 
                    if ($pactu != "") {
                        if ($conta == 0) {;
						 $tabla.= '<th></th>';
                         //$tabla.= '<td></td>';
                        }
                    }
                    if ($peli != "") {
                        if ($conte == 0) {;
                            $tabla.= '<th></th>';
							//$tabla.= '<td></td>';
                        }
                    }
                    $conta++;
                    $conte++;
                    $tabla.= '<th>' . utf8_encode($data["columnas"][$x]) . '</th>';                                    
                }
				$tabla.= "</tr>";
				$tabla.= '</thead>';
			   }
            //===========CUERPO DE TABLA=================================================================================================
            $cantele = count($data["cuerpo"]);
            if ($cantele > 0) {
                for ($i = 0;$i < $cantele;$i++) {
                    $conta = 0;
                    $conte = 0;
                    $tabla.= "<tr>";
                    for ($z = 0;$z < count($data["columnas"]);$z++) {
                        $columnas = $data["columnas"][$z];
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            if ($pactu != "") {
                                if ($conta == 0) {
                                // $tabla.= '<td><a href="javascript:Modificar('. $data["cuerpo"][$i]["$columnas"] .');" title="Actualizar" ><img   title="Actualizar" src="../imgcixphp/ico_actualizar.gif" title="Actualizar" width="16" height="16"/></a></td>';
								  $tabla.= '<td><a href="#" onClick="Modificar('. $data["cuerpo"][$i]["$columnas"] .'); return false;" title="Actualizar" ><img   title="Actualizar" src="../imgcixphp/ico_actualizar.gif" title="Actualizar" width="16" height="16"/></a></td>';
                                }
                            }
                            if ($peli != "") {
                                if ($conte == 0) {;
                                    $tabla.= '<td><a href="#"  onClick="Eliminar('.$data["cuerpo"][$i]["$columnas"] .'); return false;" ><img src="../imgcixphp/delete.gif" width="16" title="Eliminar" height="16"/></a></td>';
                                }
                            }
                        }
                        $conta++;
                        $conte++;
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            $tabla.= '<td>' . $data["cuerpo"][$i]["$columnas"] . '   </td>';
                        }
                    }
                    $tabla.= "</tr>";
                }
                
            }else{//solo si es k no hay datos
				$mensaje= "No se encuentran Ningun Dato Registrado"; 
			  $tabla.='<tfoot><tr> <td >&nbsp; '.$mensaje.' </td></tr></tfoot>';
				}
						 
			//===========FIN CUERPO DE TABLA===========================================================================================
                $tabla.= "</table><br>";
				//}
        }
        catch(exception $e) {
            return $e->getMessage();
        }
        return $tabla;
    }
	
// Generar una  tabla con Funciones JavaScript enviando el Nombre de la Funciones (para los Modales)
function ImprimeTableFunciones($idTabla, $data, $pactu = "", $peli = "",$classCSS="") {
      // echo "ImprimeTable:::::::::::::::".count($data["cuerpo"])." <br>";
		try {
           // if (count($data) > 0) {
			   $tabla = '<table id="'.$idTabla.'" class="' . $classCSS . '"  cellpadding="0" cellspacing="1" border="1" align="center" style="text-align:center;" >';
			   if (count($data["columnas"]) > 0) {
				$tabla.= '<thead>';
                $tabla .= '<tr>';
                $conta = 0;
                $conte = 0;
				
                for ($x = 0;$x < count($data["columnas"]);$x++) {
					 
                    if ($pactu != "") {
                        if ($conta == 0) {;
						 $tabla.= '<th></th>';
                         //$tabla.= '<td></td>';
                        }
                    }
                    if ($peli != "") {
                        if ($conte == 0) {;
                            $tabla.= '<th></th>';
							//$tabla.= '<td></td>';
                        }
                    }
                    $conta++;
                    $conte++;
                    $tabla.= '<th>' . utf8_encode($data["columnas"][$x]) . '</th>';                                    
                }
				$tabla.= '</tr>';
				$tabla.= '</thead>';
			   }
            //===========CUERPO DE TABLA=================================================================================================
            $cantele = count($data["cuerpo"]);
            if ($cantele > 0) {
                for ($i = 0;$i < $cantele;$i++) {
                    $conta = 0;
                    $conte = 0;
                    $tabla.= "<tr>";
                    for ($z = 0;$z < count($data["columnas"]);$z++) {
                        $columnas = $data["columnas"][$z];
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            if ($pactu != "") {
                                if ($conta == 0) {
                                // $tabla.= '<td><a href="javascript:'.$pactu.'('. $data["cuerpo"][$i]["$columnas"] .');" title="Actualizar" ><img   title="Actualizar" src="../imgcixphp/ico_actualizar.gif" title="Actualizar" width="16" height="16"/></a></td>';
								 $tabla.= '<td><a href="#" onClick="'.$pactu.'('. $data["cuerpo"][$i]["$columnas"] .'); return false;" title="Actualizar" ><img   src="../imgcixphp/ico_actualizar.gif" title="Actualizar" width="16" height="16"/></a></td>'."\n";
                                }
                            }
                            if ($peli != "") {
                                if ($conte == 0) {;
                                    $tabla.= '<td><a href="#"  onClick="'.$peli.'('.$data["cuerpo"][$i]["$columnas"] .'); return false;" ><img src="../imgcixphp/delete.gif" width="16" title="Eliminar" height="16"/></a></td>'."\n";
                                }
                            }
                        }
                        $conta++;
                        $conte++;
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                            $tabla.= '<td>&nbsp;' . $data["cuerpo"][$i]["$columnas"] . '&nbsp; </td>'."\n";
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
				//}
        }catch(exception $e) {
            return $e->getMessage();
        }
        return $tabla;
    }

// PAGINADO
// generar una tabla CON SOLO PAGINADO $id=id tabla, $data= datos, $pactu=funcion para modificar, $peli=funcion para eliminar,
// $crxpag=numero de filas a mostra, $paginap = pagina mostrar x defecto pagina 1, $cantlink = cantida de link de numerocion x defecto es 5 
function ImprimeTableP($idTabla, $data, $pactu, $peli, $crxpag, $paginap = 1, $cantlink = 5,$classCSS="") {
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
                            $tabla.= '<td>' . $data["cuerpo"][$i]["$columnas"] . '</td> '."\n";
                        }
                    }
                    $tabla.= '</tr>';
                }   
				//===========FIN CUERPO DE TABLA===========================================================================================
            	 $tabla.= '</table><p style="clear:both;height:5px;"></p>';
			 
			  //===========PAGINADO======================================================================================================================
               	$paginado = Paginar($cantele, $crxpag, $paginap, $cantlink);
                $tabla.= $paginado;
                //===========FIN PAGINADO ==================================================================================================================
                            
               
            }else{//solo si es k no hay datos
				$mensaje= "No se encuentran  Datos Registrados"; 
			 	 $tabla.='<tfoot><tr> <td >&nbsp; '.$mensaje.' </td></tr></tfoot></table><br/>';
				}
			
        }catch(exception $e) {
            return $e->getMessage();
        }
        return $tabla;
    }
// PAGINADO + ORDENAR 
// generar una tabla $id=id tabla, $data= datos, $pactu=funcion para modificar, $peli=funcion para eliminar,
// $crxpag=numero de filas a mostra, $paginap = pagina mostrar x defecto pagina 1, $cantlink = cantida de link de numerocion x defecto es 5
//$orderby = ordenar por columnas x defecto es -1, $classCSS=nombre de la clases css para la tabla
function ImprimeTablePO($idTabla, $data, $pactu, $peli, $crxpag=10, $paginap = 1, $cantlink = 5,$orderby = -1,$classCSS="") { 
        $tabla = '<table id="' . $idTabla . '" class="'.$classCSS.'" cellpadding="0" cellspacing="1" border="1" align="center" style="text-align:center" >';
        try {
          //  if (count($data) > 0) {
			   if (count($data["columnas"]) > 0) {
				$tabla.= '<thead>';
                $tabla .= '<tr>';
                $conta = 0;
                $conte = 0;
                for ($x = 0;$x < count($data["columnas"]);$x++) {
                    if ($pactu != "") {
                        if ($conta == 0) {;
                            $tabla.= '<td></td>';
                        }
                    }
                    if ($peli != "") {
                        if ($conte == 0) {;
                            $tabla.= '<td></td>';
                        }
                    }
                    $conta++;
                    $conte++;
                    //Nombres de las columnas
										 
					$ordenar = $x + 1;					
					//$tabla.= '<th><a href="?pagina=' . $paginap . '&orden=' . $ordenar . '"  >' . utf8_encode($data["columnas"][$x]) . '</a></th>';
					$tabla.= '<th><a href="#" onClick="Paginar(\'pagina=' . $paginap . '&orden=' . $ordenar . '\'); return false"  >' . utf8_encode($data["columnas"][$x]) . '</a></th>'."\n";
				     
                }
           		$tabla.= "</tr>";
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
								    $tabla.= '<td><a href="#" onClick="'.$pactu.'('. $data["cuerpo"][$i]["$columnas"] .'); return false;" title="Actualizar" ><img   title="Actualizar" src="../imgcixphp/ico_actualizar.gif" title="Actualizar" width="16" height="16"/></a></td>'."\n";
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
                            $tabla.= '<td>' . $data["cuerpo"][$i]["$columnas"] . '</td> '."\n";
                        }
                    }
                    $tabla.= '</tr>';
                }
				//===========FIN CUERPO DE TABLA===========================================================================================
             	$tabla.= '</table><p style="clear:both;height:5px;"></p>';                
                //===========PAGINADO======================================================================================================================
                $paginado = Paginar($cantele, $crxpag, $paginap, $cantlink,$orderby);
                $tabla.= $paginado;
                //===========FIN PAGINADO ==================================================================================================================
                
            }else{//solo si es k no hay datos
				$mensaje= "No se encuentran  Datos Registrados"; 
			 	 $tabla.='<tfoot><tr> <td >&nbsp; '.$mensaje.' </td></tr></tfoot></table><br>';
				}
			
        }catch(exception $e) {
            return $e->getMessage();
        }
        return $tabla;
    }

// PAGINADO + ORDENAR + BUSCAR + UN LINK EN CADA TD SI ES K LO ENVIAN 
// generar una tabla $id=id tabla, $data= datos, $pactu=funcion para modificar, $peli=funcion para eliminar,
// $crxpag=numero de filas a mostra, $paginap = pagina mostrar x defecto pagina 1, $cantlink = cantida de link de numerocion x defecto es 5
//$orderby = ordenar por columnas x defecto es -1, $classCSS=nombre de la clases css para la tabla
function ImprimeTablePOB($idTabla, $data, $pactu, $peli, $crxpag, $paginap = 1, $cantlink = 5,$orderby = -1,$buscar="",$classCSS="",$link_td="") {
		 $tabla="";
		//$tabla.= Buscar($buscar);// formulario buscar si llamo a esta funcion solo serviria para el boton buscar no eventos teclado
        //$tabla.= '<table id="' . $idTabla . '" class="'.$classCSS.'" cellpadding="0" cellspacing="1" border="1" align="center" style="text-align:center" ><tr>';
		 $tabla.= '<table id="' . $idTabla . '" class="'.$classCSS.'" cellpadding="0" cellspacing="1"  >';
        try {
           // if (count($data) > 0) {
			    if (count($data["columnas"]) > 0) {
				$tabla.= '<thead>';
                $tabla .= '<tr>';
                $conta = 0;
                $conte = 0;
                for ($x = 0;$x < count($data["columnas"]);$x++) {
                    if ($pactu != "") {
                        if ($conta == 0) {;
                            $tabla.= '<td></td>';
                        }
                    }
                    if ($peli != "") {
                        if ($conte == 0) {;
                            $tabla.= '<td></td>';
                        }
                    }
                    $conta++;
                    $conte++;
                    //Nombres de las columnas
										 
					$ordenar = $x + 1;					
					//$tabla.= '<th><a href="?pagina=' . $paginap . '&orden=' . $ordenar . '"  >' . utf8_encode($data["columnas"][$x]) . '</a></th>';
					$tabla.= '<th><a href="#" onClick="Paginar(\'pagina=' . $paginap . '&orden=' .$ordenar .'&busca=' .$buscar .'\'); return false"  >' . utf8_encode($data["columnas"][$x]) . '</a></th>'."\n";
				     
                }
                 $tabla.= "</tr>";
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
								   $tabla.= '<td><a href="#" onClick="'.$pactu.'('. $data["cuerpo"][$i]["$columnas"] .'); return false;" title="Actualizar" ><img   title="Actualizar" src="../imgcixphp/ico_actualizar.gif" title="Actualizar" width="16" height="16"/></a></td>'."\n";
								   
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
							if($link_td!=""){	$ID= $data["cuerpo"][$i][0] ; // ID
								$url =$link_td."?id=".$ID;// Url mas id como dato mediante el metodo get 							
								 $tabla.= '<td onclick="document.location=\''.$url.'\' " >' . $data["cuerpo"][$i]["$columnas"] . '</td>' . "\n";
							  }else{ 
								$tabla.= '<td>' . $data["cuerpo"][$i]["$columnas"] . '</td> '."\n";
							  }
						  
					// $tabla.= '<td>&nbsp;&nbsp;' . $data["cuerpo"][$i]["$columnas"] . '&nbsp;&nbsp;   </td> '."\n";
                           
                        }
                    }
                    $tabla.= '</tr>'."\n";				
					
                } 
				//===========FIN CUERPO DE TABLA==============================================================================
					 $tabla.= '</table><p style="clear:both;height:5px;"></p>';              
                //===========PAGINADO======================================================================================================================
                $paginado = Paginar($cantele, $crxpag, $paginap, $cantlink,$orderby,$buscar);
                $tabla.= $paginado;
                //===========FIN PAGINADO ==================================================================================================================
              }else{//solo si es k no hay datos
				$mensaje= "No se encuentran  Datos Registrados"; 
			 	 $tabla.='<tfoot><tr> <td >&nbsp; '.$mensaje.' </td></tr></tfoot></table><br>';
				}
			
        } catch(exception $e) {
            return $e->getMessage();
        }
        return $tabla;
    }
	
}// END de la Clases CIXAJAX

/*Paginado Simple::: $cantele=numero de FILAS TOTALES, $crxpag=numero de Filas a MOSTRAR, 
$paginap=numeroº de Pagina que va a Mostra, $cantlink=numero de link VISIBLES
*/
function Paginar($cantele, $crxpag, $paginap, $cantlink,$orderby=-1, $buscar="") {
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