<div id="divActualizar_personal">
  <form id="frmActualizar_personal" name="frmRegistrar_personal" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaRegistrar_personal">
      <tr>
        <td align="right">Id:</td>
        <td colspan="2"><input type="text" name="PersonalId_" id="PersonalId_"  readonly="readonly" value="<?php echo $PersonalId;?>"/></td>
      </tr>
      <tr>
        <td align="right">Fecha de Ingreso:</td>
        <td colspan="2"><input type="text" name="PersonalFechaIngreso_" id="PersonalFechaIngreso_"  required="required" value="<?php echo $PersonalFechaIngreso;?>"/></td>
      </tr>
      <tr>
        <td align="right">Dni:</td>
        <td colspan="2"><input type="text" name="PersonalDni_" id="PersonalDni_" required="required" maxlength="8" value="<?php echo $PersonalDni;?>"/></td>
      </tr>
      <tr>
        <td align="right">Apellidos:</td>
        <td colspan="2"><input type="text" name="PersonalApellido_" id="PersonalApellido_" required="required" value="<?php echo $PersonalApellido;?>"/></td>
      </tr>
      <tr>
        <td align="right">Nombre:</td>
        <td colspan="2"><input type="text" name="PersonalNombre_" id="PersonalNombre_"  required="required" value="<?php echo $PersonalNombre;?>"/></td>
      </tr>
      <tr>
        <td align="right">Sexo:</td>
        <td colspan="2" class="chkradio"><!--<input type="text" name="PersonalSexo_" id="PersonalSexo_" value=""/>-->
        <label for="Masculino">
        <input id="Masculino" name="PersonalSexo_"  type="radio" value="M" <?php if($PersonalSexo=="M")echo 'checked="checked"';?>  />
       <p> Masculino</p>
        </label>
       <label for="Femenino">
        <input id="Femenino" name="PersonalSexo_" type="radio" value="F"  <?php if($PersonalSexo=="F")echo 'checked="checked"';?>/>
       <p> Femenino</p>
        </label>
        </td>
      </tr>
      <tr>
        <td align="right">Fecha de Nacimiento:</td>
        <td colspan="2"><input type="text" name="PersonalFechaNac_" id="PersonalFechaNac_"  required="required" value="<?php echo $PersonalFechaNac;?>"/></td>
      </tr>
      <tr>
        <td align="right">Email:</td>
        <td colspan="2"><input type="email" name="PersonalEmail_" id="PersonalEmail_" required="required" value="<?php echo $PersonalEmail;?>"/></td>
      </tr>
      <tr>
        <td align="right">Dirección:</td>
        <td colspan="2"><input type="text" name="PersonalDireccion_" id="PersonalDireccion_" value="<?php echo $PersonalDireccion;?>"/></td>
      </tr>
      <tr>
        <td align="right">Teléfono:</td>
        <td colspan="2"><input type="tel" name="PersonalTelefono_" id="PersonalTelefono_" value="<?php echo $PersonalTelefono;?>"/></td>
      </tr>
      <!-- <tr>
        <td align="right">Estado:</td>
        <td><input type="text" name="PersonalEstado_" id="PersonalEstado_" value=""/></td>
      </tr>-->
      <tr>
        <td><input type="hidden" name="PersonalEstado_" id="PersonalEstado_" value="<?php echo $PersonalEstado;?>"/></td>
        <td align="right"><button type="submit"  id="btActulizar"><img src="../images/actulizar.png" title="Registar"/>Actulizar </button></td>
        <td><button  type="button" id="btnCancelar" onclick="Cancelar('Modal_Personal','frmRegistrar_personal');return false"><img src="../images/cancelar.png" title="Cancelar"//>Cancelar </button></td>
      </tr>
    </table>
  </form>
</div>
