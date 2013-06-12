<?php  ob_start();
include_once("./autentificar.php");
// include_once("Vistas/c_menutipousuario/Controlador_c_menutipousuario.php");
if (isset($_GET["accion"])) {
    $evento = $_GET["accion"];
} else if (isset($_POST["accion"])) {
    $evento = $_POST["accion"];
}
switch($evento){
case "Autentificar":
$data=CAutentificar_usuario();
//echo " <br> cantid: ".count($data["cuerpo"])."<br>";
	$cantele = count($data["cuerpo"]);
       if ($cantele > 0) {			
		session_start();
		$_SESSION["login"]= true;
		$_SESSION["idUsuario"]= $data["cuerpo"][0]["UsuarioId"];
		$_SESSION["usuario"]= $data["cuerpo"][0]["NombrePersona"];
		// llamamos el metodo para sacar la data para generar el perfil de Usuario
		$dataGenerarMenu=CListar_c_menutipousuario_GenerarPerfil($data["cuerpo"][0]["TipoUsuarioId"],$data["cuerpo"][0]["UsuarioId"]);
		$_SESSION["dataMenu"]=$dataGenerarMenu;
		
	echo "Bienvenido al Sistemas";
	header("Location: ./principal.php");	
  }else{
	echo "Usuario o Contraseña Incorrecto ";
	echo "<META HTTP-EQUIV = REFRESH CONTENT='1 ;URL=login.php'>";
	}					

break;
}


/*
if($tipoUser==1){
	$sql="select * from administrador where nombre='$user' and contraseña= '$pass'";
	
	$cnx=conecta();
	$rsql=mysql_query($sql,$cnx);
	$f1 = mysql_num_rows($rsql);
 if($f1 != 0 ){
    $usuario=mysql_fetch_row($rsql)	;
    session_start();
	session_register("administrador");
	$_SESSION["administrador"]= $usuario[0];

	echo "<META HTTP-EQUIV = REFRESH CONTENT='1 ;URL=MenuPrincipales/Administrador/index.html'>";
	
  }else{
echo "Verifique Sus Datos ";
echo "<META HTTP-EQUIV = REFRESH CONTENT='1 ;URL=index.html'>";
}
}

*/



ob_flush();
?>

