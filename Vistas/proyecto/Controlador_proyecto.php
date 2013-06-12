<?php
include_once "../../Modelado/Modelo_proyecto.php"; 
include_once "../validacion.php"; 
function CRegistrar_proyecto(){
// en proyecto creo el objeto de la clase proyecto
$enproyecto=new Clase_proyecto();
// todos los post son los datos que vienes de los formularios $_POST[]
// setProyectoid
$enproyecto->setProyectoid(validar($_POST["Proyectoid_"]));
$enproyecto->setProyectoNombre(validar($_POST["ProyectoNombre_"]));
$enproyecto->setProyectoDescripcion(validar($_POST["ProyectoDescripcion_"]));
$enproyecto->setProyectoFechaInicio(validar($_POST["ProyectoFechaInicio_"]));
$enproyecto->setProyectoDuracion(validar($_POST["ProyectoDuracion_"]));
$enproyecto->setProyectoFechaTermino(validar($_POST["ProyectoFechaTermino_"]));
$enproyecto->setProyectoCoordinador(validar($_POST["ProyectoCoordinador_"]));
$enproyecto->setProyectoNombreArchivo(validar($_POST["ProyectoNombreArchivo_"]));
$enproyecto->setProyectoOrgFinancia(validar($_POST["ProyectoOrgFinancia_"]));
$enproyecto->setProyectoMonto(validar($_POST["ProyectoMonto_"]));
$enproyecto->setProyectoEstado(validar($_POST["ProyectoEstado_"]));
// ejecutar la sentencia 
$rpta=$enproyecto->Insertar_proyecto();
// retorno la respuesta
return $rpta;
}

function CActualizar_proyecto(){
$enproyecto=new Clase_proyecto();
$enproyecto->setProyectoid(validar($_POST["Proyectoid_"]));
$enproyecto->setProyectoNombre(validar($_POST["ProyectoNombre_"]));
$enproyecto->setProyectoDescripcion(validar($_POST["ProyectoDescripcion_"]));
$enproyecto->setProyectoFechaInicio(validar($_POST["ProyectoFechaInicio_"]));
$enproyecto->setProyectoDuracion(validar($_POST["ProyectoDuracion_"]));
$enproyecto->setProyectoFechaTermino(validar($_POST["ProyectoFechaTermino_"]));
$enproyecto->setProyectoCoordinador(validar($_POST["ProyectoCoordinador_"]));
$enproyecto->setProyectoNombreArchivo(validar($_POST["ProyectoNombreArchivo_"]));
$enproyecto->setProyectoOrgFinancia(validar($_POST["ProyectoOrgFinancia_"]));
$enproyecto->setProyectoMonto(validar($_POST["ProyectoMonto_"]));
$enproyecto->setProyectoEstado(validar($_POST["ProyectoEstado_"]));
$rpta=$enproyecto->Actualizar_proyecto();
return $rpta;
}

function CEliminar_proyecto(){
$enproyecto=new Clase_proyecto();
$enproyecto->setProyectoid($_GET["id"]);
$rpta=$enproyecto->Eliminar_proyecto();
return $rpta;
}

function CRecuperar_proyecto(){
$enproyecto=new Clase_proyecto();
$enproyecto->setProyectoid($_GET["id"]);
$rpta=$enproyecto->Recuperar_proyecto();
return $rpta;
}

function CListar_proyecto(){
$enproyecto=new Clase_proyecto();
$rpta=$enproyecto->Listar_proyecto();
return $rpta;
}

function CListadoSimple_proyecto(){
$enproyecto=new Clase_proyecto();
$rpta=$enproyecto->ListadoSimple_proyecto();
return $rpta;
}

function CBuscar_proyecto($id){
$enproyecto=new Clase_proyecto();
$enproyecto->setProyectoid($id);
$rpta=$enproyecto->Buscar_proyecto();
return $rpta;}
?>