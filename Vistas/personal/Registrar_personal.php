<div id="divRegistrar_personal">
  <form id="frmRegistrar_personal" name="frmRegistrar_personal" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaRegistrar_personal">
      <tr>
        <td align="right">Id:</td>
        <td colspan="2"><input type="text" name="PersonalId_" id="PersonalId_"  readonly="readonly" value="Auto Generado"/></td>
      </tr>
      <tr>
        <td align="right">Fecha de Ingreso:</td>
        <td colspan="2"><input type="text" name="PersonalFechaIngreso_" id="PersonalFechaIngreso_"  required="required" value=""/></td>
      </tr>
      <tr>
        <td align="right">Dni:</td>
        <td colspan="2"><input type="text" name="PersonalDni_" id="PersonalDni_" required="required" maxlength="8"/></td>
      </tr>
      <tr>
        <td align="right">Apellidos:</td>
        <td colspan="2"><input type="text" name="PersonalApellido_" id="PersonalApellido_" required="required" value=""/></td>
      </tr>
      <tr>
        <td align="right">Nombre:</td>
        <td colspan="2"><input type="text" name="PersonalNombre_" id="PersonalNombre_"  required="required" value=""/></td>
      </tr>
      <tr>
        <td align="right">Sexo:</td>
        <td colspan="2" class="chkradio"><!--<input type="text" name="PersonalSexo_" id="PersonalSexo_" value=""/>-->
        <label for="Masculino">
        <input id="Masculino" name="ProductorSexo_"  type="radio" value="M" />
       <p> Masculino</p>
        </label>
       <label for="Femenino">
        <input id="Femenino" name="ProductorSexo_" type="radio" value="F"  />
       <p> Femenino</p>
        </label>
        </td>
      </tr>
      <tr>
        <td align="right">Fecha de Nacimiento:</td>
        <td colspan="2"><input type="text" name="PersonalFechaNac_" id="PersonalFechaNac_"  required="required"value=""/></td>
      </tr>
      <tr>
        <td align="right">Email:</td>
        <td colspan="2"><input type="email" name="PersonalEmail_" id="PersonalEmail_" required="required" value=""/></td>
      </tr>
      <tr>
        <td align="right">Dirección:</td>
        <td colspan="2"><input type="text" name="PersonalDireccion_" id="PersonalDireccion_" value=""/></td>
      </tr>
      <tr>
        <td align="right">Teléfono:</td>
        <td colspan="2"><input type="tel" name="PersonalTelefono_" id="PersonalTelefono_" value=""/></td>
      </tr>
      <!-- <tr>
        <td align="right">Estado:</td>
        <td><input type="text" name="PersonalEstado_" id="PersonalEstado_" value=""/></td>
      </tr>-->
      <tr>
        <td>&nbsp;</td>
        <td align="right"><button type="submit"  id="btregistrar"><img src="../images/guardar.png" title="Registar"/>Registrar </button></td>
        <td><button  type="button" id="btnCancelar" onclick="Cancelar('Modal_Personal','frmRegistrar_personal');return false"><img src="../images/cancelar.png" title="Cancelar"//>Cancelar </button></td>
      </tr>
    </table>
  </form>
</div>
