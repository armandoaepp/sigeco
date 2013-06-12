<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_cliente.php"; 
include_once "../cixajax.php"; 

$cix=new CixAJAX();
if(isset($_GET["accion"])){
    $evento=$_GET["accion"];
} else if (isset($_POST["accion"])) {
   $evento = $_POST["accion"];
}else{
   $evento="Listar";
}
switch($evento){
case "Registrar":
  $rpta=CRegistrar_cliente();
  echo $rpta;
  ;break;
case "Actualizar":
  $rpta=CActualizar_cliente();
 break;
case "Eliminar":
  $rpta=CEliminar_cliente();
  header("Location: ../cliente");
break;
case "Recuperar":
  $rpta=CRecuperar_cliente();
break;
case "Listar":
       $titulo="Listar cliente";
       $data=CListar_cliente();
       if(isset($_GET["pagina"])){
           $page=$_GET["pagina"];}
         else{$page=1;}

      $Listar_cliente=$cix->ImprimeTableP("tablacliente",$data,"?","?",10,$page,5,"tabla");
   // $Listar_cliente=$cix->ImprimeTablePOB("tablacliente",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_cliente.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_cliente=CListadoSimple_cliente();
break;
case "Buscar":
 $rpta=CBuscar_cliente();
break;
case "Nuevo":
 $contenido="Registrar_cliente_Modal.php";
 require_once($contenido);
break;
case "Mactualizar":
 $rptamo=CBuscar_cliente($_GET["id"]);
 $ClienteId=$rptamo["cuerpo"][0]["ClienteId"];
 $ClienteNombre=$rptamo["cuerpo"][0]["ClienteNombre"];
 $ClienteDirerccion=$rptamo["cuerpo"][0]["ClienteDirerccion"];
 $ClienteRepresentante=$rptamo["cuerpo"][0]["ClienteRepresentante"];
 $ClienteEmail=$rptamo["cuerpo"][0]["ClienteEmail"];
 $ClienteFax=$rptamo["cuerpo"][0]["ClienteFax"];
 $ClienteDireccion=$rptamo["cuerpo"][0]["ClienteDireccion"];
 $ClienteCodigoPostal=$rptamo["cuerpo"][0]["ClienteCodigoPostal"];
 $ClienteNota=$rptamo["cuerpo"][0]["ClienteNota"];
 $ClienteTelefono=$rptamo["cuerpo"][0]["ClienteTelefono"];
 $ClienteMovil=$rptamo["cuerpo"][0]["ClienteMovil"];
 $PaisId=$rptamo["cuerpo"][0]["PaisId"];
 $titulo= "Actualizar cliente";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_cliente.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>