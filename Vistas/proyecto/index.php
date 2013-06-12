<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_proyecto.php"; 
include_once "../cixphp.php"; 

$cix=new  cixPHP();
if(isset($_GET["accion"])){
    $evento=$_GET["accion"];
} else if (isset($_POST["accion"])) {
   $evento = $_POST["accion"];
}else{
   $evento="Listar";
}
switch($evento){
case "Registrar":
// llamar a la funcion registrar proyecto
  $rpta=CRegistrar_proyecto();
  // creamos una variable que contenga el nombre del archivo
  $contenido="Registrar_proyecto.php";
  //?accion=Registrar -> ?(anda a la misma pagina en la que se encuentra accion=Registrar)
  $accionf= "?accion=Registrar";
  
  require_once "../layout.php";
  
break;
case "Actualizar":
  $rpta=CActualizar_proyecto();
  $rptamo=CBuscar_proyecto($_GET["id"]);
  $Proyectoid=$rptamo["cuerpo"][0]["Proyectoid"];
  $ProyectoNombre=$rptamo["cuerpo"][0]["ProyectoNombre"];
  $ProyectoDescripcion=$rptamo["cuerpo"][0]["ProyectoDescripcion"];
  $ProyectoFechaInicio=$rptamo["cuerpo"][0]["ProyectoFechaInicio"];
  $ProyectoDuracion=$rptamo["cuerpo"][0]["ProyectoDuracion"];
  $ProyectoFechaTermino=$rptamo["cuerpo"][0]["ProyectoFechaTermino"];
  $ProyectoCoordinador=$rptamo["cuerpo"][0]["ProyectoCoordinador"];
  $ProyectoNombreArchivo=$rptamo["cuerpo"][0]["ProyectoNombreArchivo"];
  $ProyectoOrgFinancia=$rptamo["cuerpo"][0]["ProyectoOrgFinancia"];
  $ProyectoMonto=$rptamo["cuerpo"][0]["ProyectoMonto"];
  $ProyectoEstado=$rptamo["cuerpo"][0]["ProyectoEstado"];
  $contenido="Actualizar_proyecto.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
  $rpta=CEliminar_proyecto();
  header("Location: ../proyecto");
break;
case "Recuperar":
  $rpta=CRecuperar_proyecto();
break;
case "Listar":
       $titulo="Listar proyecto";
       $data=CListar_proyecto();
       if(isset($_GET["pagina"])){
           $page=$_GET["pagina"];}
         else{$page=1;}
/*
      //para Ordenar Datos 
       if(isset($_GET["orden"])) {
          $orden=$_GET["orden"];
          }else{  $orden=-1;}// no ordenar po defecto
     //para Buscar Datos 
        if(isset($_POST["busca"])){ //viene del frm 
              $busca=$_POST["busca"];
         }else if(isset($_GET["busca"])){// viene de la pagina o del ordenar
              $busca=$_GET["busca"];
         }else{
         $busca=""; }
*/
   $Listar_proyecto=$cix->ImprimeTableP("tablaproyecto",$data,"?","?",10,$page,5,"tabla");
 // $Listar_proyecto=$cix->ImprimeTablePOB("tablaproyecto",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_proyecto.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_proyecto=CListadoSimple_proyecto();
break;
case "Buscar":
 $rpta=CBuscar_proyecto();
break;
case "Nuevo":
 $titulo= "Nuevo proyecto";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_proyecto.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_proyecto($_GET["id"]);
 $Proyectoid=$rptamo["cuerpo"][0]["Proyectoid"];
 $ProyectoNombre=$rptamo["cuerpo"][0]["ProyectoNombre"];
 $ProyectoDescripcion=$rptamo["cuerpo"][0]["ProyectoDescripcion"];
 $ProyectoFechaInicio=$rptamo["cuerpo"][0]["ProyectoFechaInicio"];
 $ProyectoDuracion=$rptamo["cuerpo"][0]["ProyectoDuracion"];
 $ProyectoFechaTermino=$rptamo["cuerpo"][0]["ProyectoFechaTermino"];
 $ProyectoCoordinador=$rptamo["cuerpo"][0]["ProyectoCoordinador"];
 $ProyectoNombreArchivo=$rptamo["cuerpo"][0]["ProyectoNombreArchivo"];
 $ProyectoOrgFinancia=$rptamo["cuerpo"][0]["ProyectoOrgFinancia"];
 $ProyectoMonto=$rptamo["cuerpo"][0]["ProyectoMonto"];
 $ProyectoEstado=$rptamo["cuerpo"][0]["ProyectoEstado"];
 $titulo= "Actualizar proyecto";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_proyecto.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>