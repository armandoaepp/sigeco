<!--<script type="text/javascript" src="../js/jquery-1.8.3.js"></script>-->
<link rel="stylesheet" href="../validar_frm/validationEngine.jquery.css" type="text/css"/>
<script src="../validar_frm/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8">	</script>
<script src="../validar_frm/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script>
$(document).ready(function(e) {
	//$("#divRegistrar_usuario").addClass("ocultar");
	$("#divRegistrar_usuario").css("display","none");

	
	$("#PersonalDni").keypress(function(e) {	
		//pregunto si eh presionado Enter
        if(e.which==13){
			//llamamos ala funcion busqueda			
			Buscar();
			}
	    });
	
	$("#imgBuscar").click(function(e) {	
		Buscar();			
    });
	
	//para inicar la validacion del frm 
		jQuery("#frmEmpleado").validationEngine('attach');
		jQuery("#frmRegistrar_usuario").validationEngine('attach');	
		
	// registrar datos 
	RegistrarUsuario();
});

function Buscar(){
	//llamamos ala funcion busqueda
	DNI=$("#PersonalDni").val();
	if(!isNaN(DNI)){
		if(DNI.length==8){
			Busqueda();	// llamanos ala funcion busqueda k a va a la BD
		}else{
			alert("DNI Incorrecto");
		}
	}else{
			alert("DNI Incorrecto");
		}	
				
		return false;
}

function Busqueda(){
	//alert("Entro")
	var DNI;
	DNI=$("#PersonalDni").val();
	$.post("../personal/index_ajax.php",{"accion":"Buscar_xDNI","dni":DNI},
	function(datodev){
		//alert(datodev);
		datodev=$.parseJSON(datodev);
		var DATA=datodev.items;
		//alert(DATA.length);
		if(DATA.length!=0){
		//recorrer json  Clientes
		$.each(DATA, function(index, obj) {
			$("#EmpleadoNombre_").attr("value",obj.Nombre+"");
			$("#PersonalId_").attr("value",obj.PersonalId+"");
			//$("#tdni").attr("value",obj.DNI+"");
		$("#divRegistrar_usuario").css("display","block"); // hacemos visible los  input de usuario
			//alert(ob_clie.NOMBRE);
		});
		}else{
			//$("#EmpleadoNombre_").attr("value","");
			$("#frmRegistrar_usuario")[0].reset();
			$("#EmpleadoNombre_").attr("value","");
			$("#PersonalId_").attr("value","");
			alert("No Se Encontraron Registros, Registre Primero al Personal Para crear Su Usuario");
	
		$("#PersonalDni").focus();
		}	
		//fin del recorrido
		});
	}

</script>
<style>
.titulotext {
	text-align: left;
	height: 15;
	margin: 0;
	padding: 0;
	color: #006600;
	font-weight: bold
}
</style>
<div style="text-align:center">
  <p  class="titulotext">Datos de Empleado</p>
  <form id="frmEmpleado">
    <table border="0">
      <tr>
        <td align="right">&nbsp;DNI:</td>
        <td><input type="text" name="PersonalDni_" id="PersonalDni" maxlength="8" class="validate[required,custom[integer],minSize[8],maxSize[8]] text-input" /></td>
        <td><a href="#" id="imgBuscar"> <img src="../images/buscar.png" width="30" height="25" /></a></td>
      </tr>
      <tr>
        <td align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Empleado</td>
        <td colspan="2"><input type="text" name="EmpleadoNombre_" id="EmpleadoNombre_" value=""/></td>
      </tr>
    </table>
  </form>
  <div id="divRegistrar_usuario">
    <p class="titulotext">Datos de Usuario</p>
    <form id="frmRegistrar_usuario" name="frmRegistrar_usuario" method="post" action="<?php echo $accionf;?>">
      <table border="0" id="tablaRegistrar_usuario">
        <!-- <tr>
        <td align="right">UsuarioId:</td>
        <td><input type="text" name="UsuarioId_" id="UsuarioId_" value=""/></td>
      </tr>-->
        <tr>
          <td align="right">Tipo Usuario:</td>
          <td colspan="2"><select name="TipoUsuarioId_" id="TipoUsuarioId_" class="validate[required]" >
              <?php 
		// Llenar el combo Tipo de Producto 
		include_once("../tipousuario/Controlador_tipousuario.php");	
		$data=CListadoSimple_tipousuario();		
		include_once "../cixphp.php";
		$cix = new CixPHP();							
		 $dataSelect = $cix->ImprimeCuerpoSelect($data,"TipoUsuarioId","TipoUsuario",-1);  
		 echo $dataSelect ;
			
			?>
            </select></td>
        </tr>
        <tr>
          <td align="right">Usuario:</td>
          <td colspan="2"><input type="text" name="Usuario_" id="Usuario_" class="validate[required,minSize[6]] text-input"/></td>
        </tr>
        <tr>
          <td align="right">Contraseña:</td>
          <td colspan="2"><input type="password" name="UsuarioPassword_" id="UsuarioPassword_"  class="validate[required,minSize[6],maxSize[20]] text-input" /></td>
        </tr>
        
        <!-- <tr>
          <td align="right">Estado:</td>
          <td colspan="2"><input type="text" name="UsuarioEstado_" id="UsuarioEstado_" value=""/></td>
        </tr>
        <tr>
          <td align="right">PersonalId:</td>
          <td colspan="2"><input type="text" name="PersonalId_" id="PersonalId_" value=""/></td>
        </tr>
        -->
        <tr>
          <td align="right"><input type="hidden" name="PersonalId_" id="PersonalId_" value=""/></td>
          <td><input type="submit" value="Registrar" name="btregistrar" /></td>
          <td><input type="button" value="Cancelar" onclick="Cancelar('Modal_Usuario','frmRegistrar_usuario');"/></td>
        </tr>
      </table>
    </form>
  </div>
</div>
