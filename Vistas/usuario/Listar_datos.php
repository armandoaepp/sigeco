<?php 
header("Content-Type: text/html;charset=utf-8");
include_once "./Controlador_usuario.php"; 
$data=CListar_usuario();

	// u.UsuarioId as Codigo, Nombre,u.Usuario ,tu.TipoUsuario, u.UsuarioEstado as Estado					 
?>

<table border="0" class="tabla">
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">Codigo</th>
    <th scope="col">Nombre</th>
    <th scope="col">Usuario</th>
    <th scope="col">Tipo de Usuario</th>
    <th scope="col">Estado</th>
    <th scope="col">Permisos</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <?php 
  $cantele=count($data["cuerpo"]);
//echo "Count ::: $cantele ";
if($cantele>0){
	for($i=0;$i<$cantele;$i++){	 
	$estado= $data["cuerpo"][$i]["Estado"];
	?>
  <tr><td><?php if($estado=="A") { ?>
  <a href="javascript:ModalUsuario('<?php echo $data["cuerpo"][$i]["Codigo"];?>');" title="Actualizar" ><img   title="Actualizar" src="../imgcixphp/ico_actualizar.gif" title="Actualizar" width="16" height="16"/></a>
  <?php }?>
  </td>
    <td><?php echo $data["cuerpo"][$i]["Codigo"];?></td>
    <td><?php echo $data["cuerpo"][$i]["Nombre"];?></td>
    <td><?php echo $data["cuerpo"][$i]["Usuario"];?></td>
    <td><?php echo $data["cuerpo"][$i]["TipoUsuario"];?></td>
    <td  style="text-align:center !important;">
	<?php
		if($estado=="A")echo '<a href="#" onClick="AccioUser('.$data["cuerpo"][$i]["Codigo"] .',\''.$estado.'\'); return false" ><img src="../images/user_activo.png" width="20" title="Activo" height="20"/></a>';
		else echo '<a href="#" onClick="AccioUser('.$data["cuerpo"][$i]["Codigo"] .',\''.$estado.'\'); return false" ><img src="../images/user_inactivo.png" width="20" title="Inactivo" height="20"/></a>';
	
	?></td>
    <td style="text-align:center !important;"><?php
		if($estado=="A")echo '<a href="../c_permiso/Registrar_c_permiso.php?id='.$data["cuerpo"][$i]["Codigo"] .'" ><img src="../images/add_delete.png" width="25" title="Agregar o Eliminar Permisos de Usuario" height="20"/></a>';
		//'<a href="javascript:Agregar_EliminarPermisos('.$data["cuerpo"][$i]["Codigo"] .'); return false" ><img src="../images/add_delete.png" width="25" title="Agregar o Eliminar Permisos de Usuario" height="20"/></a>';
		
	
	?></td>
    
    <td>&nbsp;</td>
  </tr>
 <?php 
  }
}
?>
</table>
