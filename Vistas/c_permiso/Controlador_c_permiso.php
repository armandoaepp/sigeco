<?php
include_once "../../Modelado/Modelo_c_permiso.php"; 
include_once "../validacion.php"; 
include_once "../fecha.php"; 

function CRegistrar_c_permiso(){
$enc_permiso=new Clase_c_permiso();
			
	$enc_permiso->setUsuarioId(validar($_POST["UsuarioId_"]));
	// primero desactivamos todos los Permiso que tiene el Usuario 
	$enc_permiso->Desactivar_c_permisos();
	
	// registramos o Actulizamos(Activamos) si es k el permiso esta registrado
	$enc_permiso->setUsuarioId(validar($_POST["UsuarioId_"]));
	$menuPadres=$_POST['chk_padre'];
	// registrar los menus padres 	
	if(count($menuPadres)>0){
			foreach($menuPadres as $indice => $valor){	//Nombre del arreglo, indice de un valor especifico, el dato seleccionado
			 //$enc_permiso->setUsuarioId(2);
			 $enc_permiso->setMenuId($valor);
			 	$rpta=$enc_permiso->Insertar_c_permiso();
				//echo "rpta: $rpta <br>";
				// Start SubMenu // para registar los menus Hijos (Y)
					$arraychk="";
					 $nombreschk="chk_".$valor;
					$arraychk=$_POST[$nombreschk];					
					if(count($arraychk)>0){
						foreach($arraychk as $indice => $valor_sub){//Nombre del arreglo, indice de un valor especifico, el dato seleccionado
						// $enc_permiso->setUsuarioId(2);
						 $enc_permiso->setMenuId($valor_sub);
							$rpta=$enc_permiso->Insertar_c_permiso();
							echo "rpta: $rpta <br>";
						}	
					}
				// End SubMenu			
				
			}
	}
	

	return $rpta;
}

/*
//  funcion al inicio cuando son consecutivos
function CRegistrar_c_permiso(){
$enc_permiso=new Clase_c_permiso();
			
	$enc_permiso->setUsuarioId(validar($_POST["UsuarioId_"]));
	// primero desactivamos todos los Permiso que tiene el Usuario 
	$enc_permiso->Desactivar_c_permisos();
	
	// registramos o Actulizamos(Activamos) si es k el permiso esta registrado
	$enc_permiso->setUsuarioId(validar($_POST["UsuarioId_"]));
	$menuPadres=$_POST['chk_padre'];
	// registrar los menus padres 	
	if(count($menuPadres)>0){
			foreach($menuPadres as $indice => $valor){	//Nombre del arreglo, indice de un valor especifico, el dato seleccionado
			 //$enc_permiso->setUsuarioId(2);
			 $enc_permiso->setMenuId($valor);
			 	$rpta=$enc_permiso->Insertar_c_permiso();
				//echo "rpta: $rpta <br>";
			}
	}
	// para registar los menus Hijos (Y)
	$numPadres=$_POST['NumeroPadres'];
	 for($i=1;$i<=$numPadres;$i++){
		 $arraychk="";
		 $nombreschk="chk_".$i;
		$arraychk=$_POST[$nombreschk];
		
		if(count($arraychk)>0){
			foreach($arraychk as $indice => $valor){	//Nombre del arreglo, indice de un valor especifico, el dato seleccionado
			// $enc_permiso->setUsuarioId(2);
			 $enc_permiso->setMenuId($valor);
			 	$rpta=$enc_permiso->Insertar_c_permiso();
				echo "rpta: $rpta <br>";
			}	
		}
		
	}

	return $rpta;
}

*/


function CActualizar_c_permiso(){
$enc_permiso=new Clase_c_permiso();
$enc_permiso->setPermisoId(validar($_POST["PermisoId_"]));
$enc_permiso->setFechaCreacion(validar($_POST["FechaCreacion_"]));
$enc_permiso->setUsuarioId(validar($_POST["UsuarioId_"]));
$enc_permiso->setMenuTipoUsuarioId(validar($_POST["MenuTipoUsuarioId_"]));
$rpta=$enc_permiso->Actualizar_c_permiso();
return $rpta;
}

function CEliminar_c_permiso(){
$enc_permiso=new Clase_c_permiso();
$enc_permiso->setPermisoId($_GET["id"]);
$rpta=$enc_permiso->Eliminar_c_permiso();
return $rpta;
}

function CRecuperar_c_permiso(){
$enc_permiso=new Clase_c_permiso();
$enc_permiso->setPermisoId($_GET["id"]);
$rpta=$enc_permiso->Recuperar_c_permiso();
return $rpta;
}

function CListar_c_permiso(){
$enc_permiso=new Clase_c_permiso();
$rpta=$enc_permiso->Listar_c_permiso();
return $rpta;
}

function CListadoSimple_c_permiso(){
$enc_permiso=new Clase_c_permiso();
$rpta=$enc_permiso->ListadoSimple_c_permiso();
return $rpta;
}

function CBuscar_c_permiso($id){
$enc_permiso=new Clase_c_permiso();
$enc_permiso->setPermisoId($id);
$rpta=$enc_permiso->Buscar_c_permiso();
return $rpta;}
?>