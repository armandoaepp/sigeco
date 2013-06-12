<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Apesi : Sistema de Gestion de  Comercialización</title>
<link href="css/estiloPrincipal.css" rel="stylesheet" type="text/css" />
<link href="css/estilo_frm.css" rel="stylesheet" type="text/css" />
<script src="Vistas/js/jquery-1.8.3.js"></script>
<!-- para validar el Formulario   -->
<link rel="stylesheet" href="Vistas/validar_frm/validationEngine.jquery.css" type="text/css"/>
<script src="Vistas/validar_frm/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8">	</script>
<script src="Vistas/validar_frm/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script>
/*Iniciar los Calendarios */
   	$(document).ready(function(){		
		/*para inicar la validacion del frm */
		//jQuery("#frmLogin").validationEngine('attach');	
		jQuery("#frmLogin").validationEngine({showOneMessage:true});		
	});
</script>
</head>

<body>
<div style="text-align:center" >
  <div style="text-align:center"  id="contenedor">
    <div id="marco" class="centrar">
      <div id="izquierda"><img  src="imagenes/logo_apesi.png"  width="300" height="250"/></div>
      <div id="derecho">
        <form  id="frmLogin" method="post"  action="ValidacionUsuario.php?accion=Autentificar">
          <table border="0">
            <tr>
              <td colspan="2"><strong>Acceso al Sistemas APESI</strong></td>
            </tr>
            <tr>
              <td>Tipo Usuario:</td>
              <td><select name="TipoUsuario_" id="TipoUsuario_"  class="validate[required] text-input">
                  <?php 
				  include_once("Vistas/cixphp.php");
				  $cix = new CixPHP();
				  include_once("Modelado/Modelo_tipousuario.php");
				  $entipousuario=new  Clase_tipousuario();
					$data=$entipousuario->ListadoSimple_tipousuario();			
				 $dataSelect = $cix->ImprimeCuerpoSelect($data,"TipoUsuarioId","TipoUsuario",1);  
				 echo $dataSelect ;
				?>
                  <!--  <option value="1">Administrador</option>
                  <option value="2">Gerente</option>
                  <option value="3">Acopiador</option>-->
                </select></td>
            </tr>
            <tr>
              <td>Usuario</td>
              <td><input type="text" name="Usuario_" id="Usuario_" class="validate[required,minSize[6]] text-input"/></td>
            </tr>
            <tr>
              <td>Password</td>
              <td><input type="password" name="UsuarioPassword_" id="UsuarioPassword_" class="validate[required,minSize[6]] text-input" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="btnAcceder" id="btnAcceder" value="   Acceder   " /></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
