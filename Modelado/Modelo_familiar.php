 <?php
/* Clase Generada desde Cix-PHP - Creado por M@HUS@MI */
class Clase_familiar
{
    //Constructor
    public function Clase_familiar()
    {
    }
    //Atributos
    private $FamiliarId;
    private $FamiliarApellido;
    private $FamiliarNombre;
    private $FamiliarSexo;
    private $FamiliarFechaNac;
    private $FamiliarParentesco;
    private $FamiliarOcupacion;
    private $ProductorId;
    private $EducacionId;
    //Propiedades
    public function setFamiliarId($FamiliarId_)
    {
        $this->FamiliarId = $FamiliarId_;
    }
    public function getFamiliarId()
    {
        return $this->FamiliarId;
    }
    public function setFamiliarApellido($FamiliarApellido_)
    {
        $this->FamiliarApellido = $FamiliarApellido_;
    }
    public function getFamiliarApellido()
    {
        return $this->FamiliarApellido;
    }
    public function setFamiliarNombre($FamiliarNombre_)
    {
        $this->FamiliarNombre = $FamiliarNombre_;
    }
    public function getFamiliarNombre()
    {
        return $this->FamiliarNombre;
    }
    public function setFamiliarSexo($FamiliarSexo_)
    {
        $this->FamiliarSexo = $FamiliarSexo_;
    }
    public function getFamiliarSexo()
    {
        return $this->FamiliarSexo;
    }
    public function setFamiliarFechaNac($FamiliarFechaNac_)
    {
        $this->FamiliarFechaNac = $FamiliarFechaNac_;
    }
    public function getFamiliarFechaNac()
    {
        return $this->FamiliarFechaNac;
    }
    public function setFamiliarParentesco($FamiliarParentesco_)
    {
        $this->FamiliarParentesco = $FamiliarParentesco_;
    }
    public function getFamiliarParentesco()
    {
        return $this->FamiliarParentesco;
    }
    public function setFamiliarOcupacion($FamiliarOcupacion_)
    {
        $this->FamiliarOcupacion = $FamiliarOcupacion_;
    }
    public function getFamiliarOcupacion()
    {
        return $this->FamiliarOcupacion;
    }
    public function setProductorId($ProductorId_)
    {
        $this->ProductorId = $ProductorId_;
    }
    public function getProductorId()
    {
        return $this->ProductorId;
    }
    public function setEducacionId($EducacionId_)
    {
        $this->EducacionId = $EducacionId_;
    }
    public function getEducacionId()
    {
        return $this->EducacionId;
    }
    //Métodos
    //Método Insertar
    public function Insertar_familiar()
    {
        $rpta;
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "Insert into familiar values('$this->FamiliarId','$this->FamiliarApellido','$this->FamiliarNombre','$this->FamiliarSexo','$this->FamiliarFechaNac','$this->FamiliarParentesco','$this->FamiliarOcupacion','$this->ProductorId','$this->EducacionId')";
            $rpta     = $con->MetodoRegistrar($consulta);
            
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //Método Listar
    public function Listar_familiar()
    {
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "Select familiar.FamiliarId As 'FamiliarId',familiar.FamiliarApellido As 'Apellidos',familiar.FamiliarNombre As 'Nombre',familiar.FamiliarSexo As 'Sexo',familiar.FamiliarFechaNac As 'Fecha Nac',familiar.FamiliarParentesco As 'Parentesco',familiar.FamiliarOcupacion As 'Ocupacion',familiar.ProductorId As 'ProductorId',familiar.EducacionId As 'EducacionId' from familiar";
            $rpta     = $con->Listar($consulta);
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //Método Buscar por ID
    public function Buscar_familiar() {
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "select * from familiar where FamiliarId='$this->FamiliarId'";
            $rpta     = $con->Listar($consulta);
			//echo "consulta:: $consulta";
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //Método Listar
    public function ListadoSimple_familiar()
    {
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "select * from familiar where ProductorId='$this->ProductorId '";
            $rpta     = $con->Listar($consulta);
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //Método Eliminar(Actualizar Estado)
    public function Eliminar_familiar()
    {
        $rpta;
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "delete from familiar where FamiliarId='$this->FamiliarId'";
            $rpta     = $con->MetodoRegistrar($consulta);
			//echo "consulta:: $consulta";
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //Método Recuperar
    public function Recuperar_familiar()
    {
        $rpta;
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "Update familiar set estado='A' where FamiliarId='$this->FamiliarId'";
            $rpta     = $con->MetodoRegistrar($consulta);
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //Método Actualizar
    public function Actualizar_familiar()
    {
        $rpta;
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "Update familiar set FamiliarApellido='$this->FamiliarApellido',FamiliarNombre='$this->FamiliarNombre',FamiliarSexo='$this->FamiliarSexo',FamiliarFechaNac='$this->FamiliarFechaNac',FamiliarParentesco='$this->FamiliarParentesco',FamiliarOcupacion='$this->FamiliarOcupacion',ProductorId='$this->ProductorId',EducacionId='$this->EducacionId' where FamiliarId='$this->FamiliarId'";
            $rpta     = $con->MetodoRegistrar($consulta);
            
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
	
 //Método Listar Todos Los Mienbor de Un Productor
    public function Listar_familiar_productor(){
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "SELECT f.FamiliarId , f.FamiliarApellido As 'Apellidos', f.FamiliarNombre As 'Nombres', f.FamiliarParentesco As 'Parentesco' , case f.FamiliarSexo  when 'M' then 'Masculino'   when 'F' then 'Femenino' else  'verificar'   end Sexo, DATE_FORMAT(f.FamiliarFechaNac,'%d/%m/%Y') As 'Fecha Nac', e.EducacionNivel AS 'Grado de Instruccion',f.FamiliarOcupacion AS 'Ocupacion'  FROM familiar  f LEFT JOIN  educacion e ON f.EducacionId=e.EducacionId WHERE f.ProductorId='$this->ProductorId'";
			 
			
            $rpta     = $con->Listar($consulta);
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //Método Listar
}
?> 