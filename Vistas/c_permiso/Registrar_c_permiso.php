<?php 
session_start();
include_once("../usuario/Controlador_usuario.php");
include_once("../c_menu/Controlador_c_menu.php");
 $dataMenuPadres=CListar_menu_Padre();
 $contarPadre=count($dataMenuPadres["cuerpo"]);
$accionf="index_ajax.php?accion=Registrar";

$UsuarioId=$_GET["id"];
if(!is_numeric($UsuarioId))$UsuarioId=0;
// metodo sirve para saber los permisos que el usuario ya tiene y chekear los check
$dataMenuRegistradoUser=CListar_MenuPermiso_xUsuario($UsuarioId);
$cantidaChekear=count($dataMenuRegistradoUser["cuerpo"]);

$dataUser=CBuscar_Persona_xIdUsuario($UsuarioId);
$UsuarioNombre=$dataUser["cuerpo"][0]["Nombre"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Crear Perfil de Usuario</title>
<link href="../css/contenedor.css" rel="stylesheet" type="text/css" />
<link href="../css/menu.css" rel="stylesheet" type="text/css" />
<link href="../css/estilo_tabla.css" rel="stylesheet" type="text/css" />
<style>
.lineaseparar td {
	border: 1px #999 solid;
}
.chk {
	margin-left: 5px;
}
.chk label {
	/*width: 45px;*/
	float: left;
	margin: 5px;
	padding: 2PX;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
}
.chk label p {
	width: 100%;
	color: #006600;
}
</style>
</head>

<body>
<div id="contenedor">
<div id="superior">
  <div id="superiorIzquierda">
    <?php include_once("../superior_html.php");?>
  </div>
  <div id="superiorDerecha"> Usuario en Linea:
    <?php  echo $_SESSION["usuario"];?>
    &nbsp; | &nbsp; <a href="../cerrar_sesion.php">Cerrar Sesión</a> </div>
  <div class="clear"></div>
  <?php // include_once("../menu.php");?>
</div>
<div id="cuerpo">
  <div id="cuerpoContenedor">
    <h4 style="text-align:center; color:#006600 ; font-weight:bold; font-size:18px;"><?php echo "Permiso de Usuario para: ".$UsuarioNombre;?></h4>
    <div style="text-align:right ; padding-right:50px"> <a href="../m_mantenimiento/usuario.php">Regresar </a> </div>
    <div id="divRegistrar_c_permiso" style="border:1px #000 solid;  ">
      <form id="frmRegistrar_c_permiso" name="frmRegistrar_c_permiso" method="post" action="<?php echo $accionf;?>">
        <table border="0" id="tablaRegistrar_c_permiso">
          <input type="hidden" name="NumeroPadres" value="<?php echo $contarPadre?>"/>
          <input type="hidden" name="UsuarioId_" value="<?php echo $UsuarioId?>"/>
          <?php 
	// m.MenuId , m.MenuNombre
	 if($contarPadre>0){
		 for($i=0;$i<$contarPadre;$i++){
			$MenuId= $dataMenuPadres["cuerpo"][$i]["MenuId"];
			$MenuNombre= $dataMenuPadres["cuerpo"][$i]["MenuNombre"];
		
	?>
          <tr>
            <td colspan="2"></td>
          </tr>
          <tr>
            <td><label for="<?php echo $MenuNombre;?>">
                <input type="checkbox"  name="chk_padre[]" id="<?php echo $MenuNombre;?>" value="<?php echo $MenuId;?>" 
         <?php 
		 // para chekear si es k el usuario ya tiene el permiso
			if($cantidaChekear>0){
				for($k=0;$k<$cantidaChekear;$k++){ 
					$menuRegistrado=$dataMenuRegistradoUser["cuerpo"][$k]["MenuId"];
					if($menuRegistrado==$MenuId) echo ' checked="checked" ';	
				}
			}
		 ?>
             />
                <strong> <?php echo $MenuNombre;?></strong> </label></td>
          </tr>
          <tr>
            <td class="chk"><?php  
			$dataMenuHijo=CListar_menu_xIdPadre($MenuId);
			$contarHijo=count($dataMenuHijo["cuerpo"]);			 
			// m.MenuId , m.MenuNombre			
			 if($contarHijo>0){
				 for($j=0;$j<$contarHijo;$j++){
					$MenuIdHijo= $dataMenuHijo["cuerpo"][$j]["MenuId"];
					$MenuNombreHijo= $dataMenuHijo["cuerpo"][$j]["MenuNombre"];
				?>
              <label for="<?php echo $MenuNombreHijo;?>">
              <input type="checkbox"  name="<?php echo "chk_".$MenuId."[]"; ?>" id="<?php echo $MenuNombreHijo;?>"  value="<?php echo $MenuIdHijo; ?>" 
                   <?php 
				 // para chekear si es k el usuario ya tiene el permiso
					if($cantidaChekear>0){
						for($h=0;$h<$cantidaChekear;$h++){ 
							$menuRegistrado=$dataMenuRegistradoUser["cuerpo"][$h]["MenuId"];
							if($menuRegistrado==$MenuIdHijo) echo 'checked="checked"';	
						}
					}
				 ?>
                />
              <p ><?php echo $MenuNombreHijo; ?></p>
              </label>
              <?php
			   }
			}
			?></td>
          </tr>
          <tr>
            <td class="lineaseparar" colspan="2"></td>
          </tr>
          <?php
		 }		  
	}
	?>
          <tr>
            <td align="right"><input type="submit" value="Registrar" name="btregistrar"></td>
            <td><input type="button" value="Cancelar"/></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
</body>
</html>
