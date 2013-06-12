<?php
/* Clase Generada desde Cix-PHP - Creado por M@HUS@MI */
class Clase_telefono
{
    //Constructor
    public function Clase_telefono() {    }
    //Atributos
    private $TelefonoId;
    private $TelefonoFijo;
    private $TelefonoMovil;
    private $ProductorId;
    private $ClienteId;
    private $AgendaId;
    //Propiedades
    public function setTelefonoId($TelefonoId_){
        $this->TelefonoId = $TelefonoId_;
    }
    public function getTelefonoId(){
        return $this->TelefonoId;
    }
    public function setTelefonoFijo($TelefonoFijo_) {
        $this->TelefonoFijo = $TelefonoFijo_;
    }
    public function getTelefonoFijo()
    {
        return $this->TelefonoFijo;
    }
    public function setTelefonoMovil($TelefonoMovil_)
    {
        $this->TelefonoMovil = $TelefonoMovil_;
    }
    public function getTelefonoMovil()
    {
        return $this->TelefonoMovil;
    }
    public function setProductorId($ProductorId_)
    {
        $this->ProductorId = $ProductorId_;
    }
    public function getProductorId()
    {
        return $this->ProductorId;
    }
    public function setClienteId($ClienteId_)
    {
        $this->ClienteId = $ClienteId_;
    }
    public function getClienteId()
    {
        return $this->ClienteId;
    }
    public function setAgendaId($AgendaId_)
    {
        $this->AgendaId = $AgendaId_;
    }
    public function getAgendaId()
    {
        return $this->AgendaId;
    }
    //Métodos
    //Método Insertar
    public function Insertar_telefono()
    {
        $rpta;
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "Insert into telefono values('$this->TelefonoId','$this->TelefonoFijo','$this->TelefonoMovil','$this->ProductorId','$this->ClienteId','$this->AgendaId')";
            $rpta     = $con->MetodoRegistrar($consulta);
			echo "consulta telefonooo : $consulta";
            
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //Método Listar
    public function Listar_telefono()
    {
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "Select telefono.TelefonoId As 'Id',telefono.TelefonoFijo As 'Telefono Fijo',telefono.TelefonoMovil As 'Telefono Movil',telefono.ProductorId As 'Productor',telefono.ClienteId As 'Cliente',telefono.AgendaId As 'Agenda' from telefono";
            $rpta     = $con->Listar($consulta);
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //Método Buscar por ID
    public function Buscar_telefono()
    {
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "select * from telefono where TelefonoId='$this->TelefonoId'";
            $rpta     = $con->Listar($consulta);
		}
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //Método Listar
    public function ListadoSimple_telefono()
    {
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "select * from telefono";
            $rpta     = $con->Listar($consulta);
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //Método Eliminar(Actualizar Estado)
    public function Eliminar_telefono()
    {
        $rpta;
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "Update telefono set estado='E' where TelefonoId='$this->TelefonoId'";
            $rpta     = $con->MetodoRegistrar($consulta);
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //Método Recuperar
    public function Recuperar_telefono()
    {
        $rpta;
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "Update telefono set estado='A' where TelefonoId='$this->TelefonoId'";
            $rpta     = $con->MetodoRegistrar($consulta);
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //Método Actualizar
    public function Actualizar_telefono(){
        $rpta;
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "Update telefono set TelefonoFijo='$this->TelefonoFijo',TelefonoMovil='$this->TelefonoMovil',ProductorId='$this->ProductorId',ClienteId='$this->ClienteId',AgendaId='$this->AgendaId' where TelefonoId='$this->TelefonoId'";
            $rpta     = $con->MetodoRegistrar($consulta);
            
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
	
	 //Método Buscar por ID Productor
    public function Buscar_telefono_productor(){
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "select * from telefono where ProductorId='$this->ProductorId'";
            $rpta     = $con->Listar($consulta);
		}
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
	//Método Actualizar Telefonos del Productor
    public function Actualizar_telefono_productor(){
        $rpta;
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "Update telefono set TelefonoFijo='$this->TelefonoFijo',TelefonoMovil='$this->TelefonoMovil' where ProductorId='$this->ProductorId' ";
            $rpta     = $con->MetodoRegistrar($consulta);
            
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
	
}
?>