<?php
include_once "../../Modelado/Modelo_telefono.php";
include_once "../validacion.php";
function CRegistrar_telefono()
{
    $entelefono = new Clase_telefono();
    $entelefono->setTelefonoId(validar($_POST["TelefonoId_"]));
    $entelefono->setTelefonoFijo(validar($_POST["TelefonoFijo_"]));
    $entelefono->setTelefonoMovil(validar($_POST["TelefonoMovil_"]));
    $entelefono->setProductorId(validar($_POST["ProductorId_"]));
    $entelefono->setClienteId(validar($_POST["ClienteId_"]));
    $entelefono->setAgendaId(validar($_POST["AgendaId_"]));
    $rpta = $entelefono->Insertar_telefono();
    return $rpta;
}

function CActualizar_telefono()
{
    $entelefono = new Clase_telefono();
    $entelefono->setTelefonoId(validar($_POST["TelefonoId_"]));
    $entelefono->setTelefonoFijo(validar($_POST["TelefonoFijo_"]));
    $entelefono->setTelefonoMovil(validar($_POST["TelefonoMovil_"]));
    $entelefono->setProductorId(validar($_POST["ProductorId_"]));
    $entelefono->setClienteId(validar($_POST["ClienteId_"]));
    $entelefono->setAgendaId(validar($_POST["AgendaId_"]));
    $rpta = $entelefono->Actualizar_telefono();
    return $rpta;
}

function CEliminar_telefono()
{
    $entelefono = new Clase_telefono();
    $entelefono->setTelefonoId($_GET["id"]);
    $rpta = $entelefono->Eliminar_telefono();
    return $rpta;
}

function CRecuperar_telefono()
{
    $entelefono = new Clase_telefono();
    $entelefono->setTelefonoId($_GET["id"]);
    $rpta = $entelefono->Recuperar_telefono();
    return $rpta;
}

function CListar_telefono()
{
    $entelefono = new Clase_telefono();
    $rpta       = $entelefono->Listar_telefono();
    return $rpta;
}

function CListadoSimple_telefono()
{
    $entelefono = new Clase_telefono();
    $rpta       = $entelefono->ListadoSimple_telefono();
    return $rpta;
}

function CBuscar_telefono($id){
    $entelefono = new Clase_telefono();
    $entelefono->setTelefonoId($id);
    $rpta = $entelefono->Buscar_telefono();
    return $rpta;
}
function CBuscar_telefono_productor($id){
    $entelefono = new Clase_telefono();
    $entelefono->setProductorId($id);
    $rpta = $entelefono->Buscar_telefono_productor();
    return $rpta;
}
?>