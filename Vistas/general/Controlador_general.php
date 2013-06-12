<?php
include_once "../../Modelado/Modelo_general.php"; 
include_once "../validacion.php"; 

function CListar_Ids_Distrito($id){
$engeneral=new Clase_general();
$engeneral->setDistritoId($id);
$rpta=$engeneral->Listar_Ids_Distrito();
return $rpta;
}
function CRegistrar_educacion(){
$engeneral=new Clase_educacion();
$engeneral->setEducacionId(validar($_POST["EducacionId_"]));
$engeneral->setEducacionNivel(validar($_POST["EducacionNivel_"]));
$rpta=$engeneral->Insertar_educacion();
return $rpta;
}

function CActualizar_educacion(){
$engeneral=new Clase_educacion();
$engeneral->setEducacionId(validar($_POST["EducacionId_"]));
$engeneral->setEducacionNivel(validar($_POST["EducacionNivel_"]));
$rpta=$engeneral->Actualizar_educacion();
return $rpta;
}

function CEliminar_educacion(){
$engeneral=new Clase_educacion();
$engeneral->setEducacionId($_GET["id"]);
$rpta=$engeneral->Eliminar_educacion();
return $rpta;
}

function CRecuperar_educacion(){
$engeneral=new Clase_educacion();
$engeneral->setEducacionId($_GET["id"]);
$rpta=$engeneral->Recuperar_educacion();
return $rpta;
}



function CListadoSimple_educacion($IdProductor){
$engeneral=new Clase_educacion();
$engeneral->setEducacionId($IdProductor);
$rpta=$engeneral->ListadoSimple_educacion();
return $rpta;
}

function CBuscar_educacion($id){
$engeneral=new Clase_educacion();
$engeneral->setEducacionId($id);
$rpta=$engeneral->Buscar_educacion();
return $rpta;}
?>