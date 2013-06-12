<?php
class Clase_productor {
    //Constructor
    public function Clase_productor() {
    }
    //Atributos
    private $ProductorId;
    private $ProductorNombre;
    private $ProductorApellidoPat;
    private $ProductorApellidoMat;
    private $ProductorFechaIngreso;
    private $ProductorFechaNac;
    private $ProductorEstadoCivil;
    private $ProductorProfesion;
    private $ProductorDni;
    private $ProductorSexo;
    private $ProductorDireccion;
    private $ProductorEmail;
    private $ProductorFoto;
    private $EducacionId;
    private $DistritoId;
    //Propiedades
    public function setProductorId($ProductorId_) { $this->ProductorId = $ProductorId_;}
    public function getProductorId() {return $this->ProductorId; }
    public function setProductorNombre($ProductorNombre_) { $this->ProductorNombre = $ProductorNombre_;}
    public function getProductorNombre() {return $this->ProductorNombre;}
    public function setProductorApellidoPat($ProductorApellidoPat_) {$this->ProductorApellidoPat = $ProductorApellidoPat_;}
    public function getProductorApellidoPat() {return $this->ProductorApellidoPat; }
    public function setProductorApellidoMat($ProductorApellidoMat_) {$this->ProductorApellidoMat = $ProductorApellidoMat_; }
    public function getProductorApellidoMat() {return $this->ProductorApellidoMat;}
    public function setProductorFechaIngreso($ProductorFechaIngreso_) {$this->ProductorFechaIngreso = $ProductorFechaIngreso_;}
    public function getProductorFechaIngreso() {return $this->ProductorFechaIngreso;}
    public function setProductorFechaNac($ProductorFechaNac_) {$this->ProductorFechaNac = $ProductorFechaNac_;}
    public function getProductorFechaNac() {return $this->ProductorFechaNac; }
    public function setProductorEstadoCivil($ProductorEstadoCivil_) { $this->ProductorEstadoCivil = $ProductorEstadoCivil_; }
    public function getProductorEstadoCivil() { return $this->ProductorEstadoCivil; }
	public function setProductorProfesion($ProductorProfesion_) {$this->ProductorProfesion = $ProductorProfesion_;}
    public function getProductorProfesion() {return $this->ProductorProfesion;}
    public function setProductorDni($ProductorDni_) {
        $this->ProductorDni = $ProductorDni_;
    }
    public function getProductorDni() {
        return $this->ProductorDni;
    }
    public function setProductorSexo($ProductorSexo_) {
        $this->ProductorSexo = $ProductorSexo_;
    }
    public function getProductorSexo() {
        return $this->ProductorSexo;
    }
    public function setProductorDireccion($ProductorDireccion_) {
        $this->ProductorDireccion = $ProductorDireccion_;
    }
    public function getProductorDireccion() {
        return $this->ProductorDireccion;
    }
    public function setProductorEmail($ProductorEmail_) {
        $this->ProductorEmail = $ProductorEmail_;
    }
    public function getProductorEmail() {
        return $this->ProductorEmail;
    }
    public function setProductorFoto($ProductorFoto_) {
        $this->ProductorFoto = $ProductorFoto_;
    }
    public function getProductorFoto() {
        return $this->ProductorFoto;
    }
    public function setEducacionId($EducacionId_) {
        $this->EducacionId = $EducacionId_;
    }
    public function getEducacionId() {
        return $this->EducacionId;
    }
    public function setDistritoId($DistritoId_) {
        $this->DistritoId = $DistritoId_;
    }
    public function getDistritoId() {
        return $this->DistritoId;
    }
    //MÃ©todos
    //Metodo Insertar
	
    public function Insertar_productor() {
        $rpta;
        try {
            include_once 'conexion.php';
            $con = new Conexion();// instancion en el objeto $con
            $consulta = "Insert into productor values('$this->ProductorId','$this->ProductorNombre','$this->ProductorApellidoPat','$this->ProductorApellidoMat','$this->ProductorFechaIngreso','$this->ProductorFechaNac','$this->ProductorEstadoCivil','$this->ProductorProfesion','$this->ProductorDni','$this->ProductorSexo','$this->ProductorDireccion','$this->ProductorEmail','$this->ProductorFoto','$this->EducacionId','$this->DistritoId')";// la consulta
           // $rpta = $con->MetodoRegistrar($consulta);//llamos el metodo MetodoRegistrar(  y  le enviamos la $consulta a ejecutar ) de la clase conexion
		   
			 $rpta = $con->MetodoReg_Output_ID($consulta);
        }
        catch(exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
  //MÃ©todo Listar
 public function Listar_productor() {
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con = new Conexion();
            $consulta = "Select productor.ProductorId As 'Codigo',productor.ProductorNombre As 'Nombre',productor.ProductorApellidoPat As 'Apellido Paterno',productor.ProductorApellidoMat As 'Apellido Materno',productor.ProductorFechaIngreso As 'Fecha Ingreso',productor.ProductorFechaNac As 'Fecha Nac',productor.ProductorEstadoCivil As 'Estado Civil',productor.ProductorProfesion As 'Profesion',productor.ProductorDni As 'Dni',  case productor.ProductorSexo  when 'M' then 'Masculino'   when 'F' then 'Femenino' else  'verificar'   end Sexo ,productor.ProductorDireccion As 'Direccion',productor.ProductorEmail As 'Email',productor.ProductorFoto As 'Foto',productor.EducacionId As 'Educacion',productor.DistritoId As 'Distrito' from productor";
            $rpta = $con->Listar($consulta);// llama al metodo listar(el query a ejecutar ) de la conexion
        }
        catch(exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //MÃ©todo Buscar por ID
    public function Buscar_productor() {
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con = new Conexion();
            $consulta = "select * from productor where ProductorId='$this->ProductorId'";
            $rpta = $con->Listar($consulta);
        }
        catch(exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
 //MÃ©todo Listar
  public function ListadoSimple_productor() {
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con = new Conexion();
            $consulta = "select * from productor";
            $rpta = $con->Listar($consulta);
        }
        catch(exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //MÃ©todo Eliminar(Actualizar Estado)
    public function Eliminar_productor() {
        $rpta;
        try {
            include_once 'conexion.php';
            $con = new Conexion();
            $consulta = "delete from productor where  ProductorId='$this->ProductorId'";
            $rpta = $con->MetodoRegistrar($consulta);
        }
        catch(exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //MÃ©todo Recuperar
    public function Recuperar_productor() {
        $rpta;
        try {
            include_once 'conexion.php';
            $con = new Conexion();
            $consulta = "Update productor set estado='A' where ProductorId='$this->ProductorId'";
            $rpta = $con->MetodoRegistrar($consulta);
        }
        catch(exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //MÃ©todo Actualizar
    public function Actualizar_productor() {
        $rpta;
        try {
            include_once 'conexion.php';
            $con = new Conexion();
            $consulta = "Update productor set ProductorNombre='$this->ProductorNombre',ProductorApellidoPat='$this->ProductorApellidoPat',ProductorApellidoMat='$this->ProductorApellidoMat',ProductorFechaIngreso='$this->ProductorFechaIngreso',ProductorFechaNac='$this->ProductorFechaNac',ProductorEstadoCivil='$this->ProductorEstadoCivil',ProductorProfesion='$this->ProductorProfesion',ProductorDni='$this->ProductorDni',ProductorSexo='$this->ProductorSexo',ProductorDireccion='$this->ProductorDireccion',ProductorEmail='$this->ProductorEmail',ProductorFoto='$this->ProductorFoto',EducacionId='$this->EducacionId',DistritoId='$this->DistritoId' where ProductorId='$this->ProductorId'";
            $rpta = $con->MetodoRegistrar($consulta);// llamo al metodo registrar
        }
        catch(exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
public function Buscar_productor_xDNI() {
        $rpta;
        try {
            include_once 'conexion.php';
            $con = new Conexion();
            $consulta = "SELECT ProductorId, CONCAT( ProductorApellidoPat,' ' , ProductorApellidoMat,' ' ,ProductorNombre) as 'ProdcutorNombre' FROM productor WHERE ProductorDni='$this->ProductorDni'";
            $rpta = $con->Listar($consulta);
			//echo "consulta:: $consulta";
        }
        catch(exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
}
?>