<link rel="stylesheet" href="../validar_frm/validationEngine.jquery.css" type="text/css"/>
<script src="../validar_frm/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8">	</script>
<script src="../validar_frm/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script>
$(document).ready(function(e) {
	//para inicar la validacion del frm 
		jQuery("#frmEmpleado").validationEngine('attach');
		jQuery("#frmRegistrar_usuario").validationEngine('attach');	
		
	// registrar datos 
	ActualizarUsuario();
});
</script>
<div id="divActualizar_usuario">
  <p style="font-size:11px; color:#003300">Toda Modificación de datos de Usuario esta bajo su Responsabilidad</p>
  <form id="frmActualizar_usuario" name="frmRegistrar_usuario" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaActualizar_usuario">
      <tr>
        <td align="right">Usuario:</td>
        <td colspan="2"><input type="text" name="Usuario_" id="Usuario_" value="<?php echo $Usuario;?>" class="validate[required,minSize[6]] text-input"/></td>
      </tr>
      <tr>
        <td align="right">Password:</td>
        <td colspan="2"><input type="text" name="UsuarioPassword_" id="UsuarioPassword_" value="<?php echo $UsuarioPassword;?>" class="validate[required,minSize[6],maxSize[20]] text-input"/></td>
      </tr>
      <tr>
        <td align="right">Tipo Usuario:</td>
        <td colspan="2"><select name="TipoUsuarioId_" id="TipoUsuarioId_" class="validate[required]" >
            <?php 
			// Llenar el combo Tipo de Producto 
			include_once("../tipousuario/Controlador_tipousuario.php");	
			$data=CListadoSimple_tipousuario();		
			include_once "../cixphp.php";
			$cix = new CixPHP();							
			 $dataSelect = $cix->ImprimeCuerpoSelect($data,"TipoUsuarioId","TipoUsuario",$TipoUsuarioId);  
			 echo $dataSelect ;			
		?>
          </select></td>
      </tr>
      <!-- <tr>
        <td align="right">UsuarioEstado:</td>
        <td><input type="text" name="UsuarioEstado_" id="UsuarioEstado_" value="<?php echo $UsuarioEstado;?>"/></td>
      </tr>-->
      <tr>
        <td align="right"><input type="hidden" name="UsuarioId_" id="UsuarioId_" value="<?php echo $UsuarioId;?>"/></td>
        <td><input type="submit" value="Actulizar" name="btActulizar" /></td>
        <td><input type="button" value="Cancelar" onclick="Cancelar('Modal_Usuario','frmActualizar_usuario');"/></td>
      </tr>
      <!--   <tr>
        <td align="right">UsuarioId:</td>
        <td colspan="2"><input type="text" name="UsuarioId_" id="UsuarioId_" value="<?php echo $UsuarioId;?>"/></td>
        <td align="right">PersonalId:</td>
        <td colspan="2"><input type="text" name="PersonalId_" id="PersonalId_" value="<?php echo $PersonalId;?>"/></td>
      </tr>-->
      
    </table>
  </form>
</div>
