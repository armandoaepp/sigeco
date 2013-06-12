<?php 
class CixFRM {
	
// genera los option de un select ; chosen indica se va a generar para un select del puglin chosen
function ImprimeCuerpoSelect( $data, $param_valor, $param_mostrar, $valueSelect=-1,$chosen=false) {
		 $select ="";
               try {
            $cantele = count($data["cuerpo"]);
            if ($cantele > 0) {
			  if($chosen==false) $select.='<option value="" style="color:#CCCCCC" > Seleccionar</option>'."\n";
			   else $select.='<option value="" ></option>'."\n"; 
			 
                for ($i = 0;$i < $cantele;$i++) {
				$selecciona="";
					  if($valueSelect==$data["cuerpo"][$i]["$param_valor"]) {
						   $selecciona='selected="selected"' ; 
						  }
                    $select.= '<option value="' . $data["cuerpo"][$i]["$param_valor"] . '"  '. $selecciona.'>' . $data["cuerpo"][$i]["$param_mostrar"] . '&nbsp;</option>'."\n";
									
                }
            }else{
				 $select.='<option value="0">&nbsp;  No hay Elementos  &nbsp;</option>';
				}	          
        }
        catch(exception $e) {
            return $e->getMessage();
        }
        return $select;
  }
	// para Generar un select Completo $nom=nombre del select , $data=datos , $param_valor=valur, $param_mostrar=valor visible,$valueSelect= si es k hay algun valor seleccionado
    function ImprimeSelect($nombre, $data, $param_valor, $param_mostrar,$valueSelect=0) {
        $select = '<select name="' . $nombre . '" id="' . $nombre . '">';
        try {
            $cantele = count($data["cuerpo"]);
            if ($cantele > 0) {
				 $select.='<option value="0">&nbsp; --- Seleccione  --- &nbsp;</option>';
                for ($i = 0;$i < $cantele;$i++) {
				$selecciona="";
					  if($valueSelect==$data["cuerpo"][$i]["$param_valor"]) {
						  $selecciona='selected="selected"' ; 
						  }
                    $select.= '<option value="' . $data["cuerpo"][$i]["$param_valor"] . '"  '.  $selecciona.' >' . $data["cuerpo"][$i]["$param_mostrar"] . '&nbsp;</option>'."\n";
									
                }
            }else{
				 $select.='<option value="0">&nbsp;  nop hay Elementos &nbsp;</option>';
				}	
            $select.= '</select>';
        }
        catch(exception $e) {
            return $e->getMessage();
        }
        return $select;
  }
// generar el formulario frm Buscar con Ajax 
	function frmBuscar($placeholder="Buscar"){ 		  
		$opBuscar ='<div id="divbusqueda">' . "\n";
		$opBuscar .= '<form id="frmbuscar">' . "\n";
		$opBuscar .= '<label for="busca">Buscar:</label>'."\n";
		$opBuscar.= '<input type="search" id="busca" name="busca"  placeholder="'.$placeholder.'" size="35"  accesskey="b" value="" />' . "\n";
		$opBuscar.= '<button onclick="busqueda(); return false"  id="Buscar"><img src="../images/icono-buscar.png" alt="Buscar Icon"/>Buscar</button> ' . "\n";	 
		$opBuscar.= '</form>' . "\n";
		$opBuscar.= '</div>' . "\n";;
		return $opBuscar;
	} 
}
		  ?>