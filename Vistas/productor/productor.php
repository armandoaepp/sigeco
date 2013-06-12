<?php
ob_start();
include_once "./Controlador_productor.php";
include_once "../cixphp.php";
$cix = new CixPHP();
if (isset($_GET["accion"])) {
    $evento = $_GET["accion"];
} else {
    $evento = "Listar";
}
switch ($evento) {
    case "Registrar":
	
        $rpta = CRegistrar_productor();
        $contenido = "Registrar_productor.php";
        $accionf = "?accion=Registrar";
        require_once "../layout.php";
    break;
    case "Actualizar":
        $rpta = CActualizar_productor();
     
        $contenido = "Actualizar_productor.php";
        $accionf = "?id=" . $_GET["id"] . "&accion=Actualizar";
        require_once "../layout.php";
    break;
    case "Eliminar":
       $rpta = CEliminar_productor();
       header("Location:../productor");
    break;
    case "Recuperar":
        $rpta = CRecuperar_productor();
    break;
    case "Listar":
	    $titulo = "Listar productor";
        $data = CListar_productor();
        if (isset($_GET["pagina"])) {
            $page = $_GET["pagina"];
        } else {
            $page = 1;
        }
        $Listar_productor = $cix->ImprimeTable("tablaproductor", $data, "?", "?", 5, $page);
        $contenido = "Listar_productor.php";
        require_once "../layout.php";
    break;
    case "Listarsimple":
        $Listarsimple_productor = CListadoSimple_productor();
    break;
    case "Buscar":
        $rpta = CBuscar_productor();
    break;
    case "Nuevo":
        $titulo = "Nuevo productor";
        $accionf = "?accion=Registrar";
        $contenido = "Registrar_productor.php";
        require_once "../layout.php";
    break;
    case "Mactualizar":
        $rptamo = CBuscar_productor($_GET["id"]);
        $ProductorId = $rptamo["cuerpo"][0]["ProductorId"];
        $ProductorNombre = $rptamo["cuerpo"][0]["ProductorNombre"];
        $ProductorApellidoPat = $rptamo["cuerpo"][0]["ProductorApellidoPat"];
        $ProductorApellidoMat = $rptamo["cuerpo"][0]["ProductorApellidoMat"];
        $ProductorFechaIngreso = $rptamo["cuerpo"][0]["ProductorFechaIngreso"];
        $ProductorFechaNac = $rptamo["cuerpo"][0]["ProductorFechaNac"];
        $ProductorEstadoCivil = $rptamo["cuerpo"][0]["ProductorEstadoCivil"];
        $ProductorProfesion = $rptamo["cuerpo"][0]["ProductorProfesion"];
        $ProductorDni = $rptamo["cuerpo"][0]["ProductorDni"];
        $ProductorSexo = $rptamo["cuerpo"][0]["ProductorSexo"];
        $ProductorDireccion = $rptamo["cuerpo"][0]["ProductorDireccion"];
        $ProductorEmail = $rptamo["cuerpo"][0]["ProductorEmail"];
        $ProductorFoto = $rptamo["cuerpo"][0]["ProductorFoto"];
        $EducacionId = $rptamo["cuerpo"][0]["EducacionId"];
        $DistritoId = $rptamo["cuerpo"][0]["DistritoId"];
        $titulo = "Actualizar productor";
        $accionf = "?id=" . $_GET["id"] . "&accion=Actualizar";
        $contenido = "Actualizar_productor.php";
        require_once "../layout.php";
    break;
}
ob_flush();
?>