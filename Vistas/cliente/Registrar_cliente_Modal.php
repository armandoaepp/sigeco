<?php
include_once("../pais/Controlador_pais.php");
include_once "../cixfrm.php";
 $cixfrm = new CixFRM();	

?>
<style>
#frmRegistrar_cliente p select ,#frmRegistrar_cliente  p input ,#frmRegistrar_cliente  p textarea{
	font-size:12px;
	height:20px

}

</style>
<div id="divRegistrar_cliente">
  <form id="frmRegistrar_cliente" name="frmRegistrar_cliente" method="post" action="<?php echo $accionf;?>">
    <fieldset>
      <legend> Nuevo Cliente</legend>
      <!-- <p>
        <label for="ClienteId_">ClienteId : </label>
        <input type="text" name="ClienteId_" id="ClienteId_" value=""/>
      </p>-->
      <p>
        <label for="ClienteNombre_">Nombre : </label>
        <input type="text" name="ClienteNombre_" id="ClienteNombre_" value=""/>
      </p>
      <p>
        <label for="ClienteRepresentante_">Representante : </label>
        <input type="text" name="ClienteRepresentante_" id="ClienteRepresentante_" value=""/>
      </p>
      <p>
        <label for="ClienteEmail_">Email : </label>
        <input type="email" name="ClienteEmail_" id="ClienteEmail_" value=""/>
      </p>
      <p>
        <label for="ClienteFax_">Fax : </label>
        <input type="text" name="ClienteFax_" id="ClienteFax_" value=""/>
      </p>
      <p>
        <label for="ClienteDireccion_">Direccion : </label>
        <input type="text" name="ClienteDireccion_" id="ClienteDireccion_" value=""/>
      </p>
      <p>
        <label for="ClienteCodigoPostal_">Cod. Postal : </label>
        <input type="text" name="ClienteCodigoPostal_" id="ClienteCodigoPostal_" value=""/>
      </p>
      <p>
        <label for="PaisId_">Pais : </label>
        <select name="PaisId_" id="PaisId_" data-placeholder="Pais" class="chzn-select1"  >
        <?php 		
		$data=CListadoSimple_pais();	
	    $dataPais= $cixfrm->ImprimeCuerpoSelect($data,"PaisId","PaisNombre",0,true);  
		 echo $dataPais ;
		?>
        </select>
      </p>
       <p>
        <label for="ClienteTelefono_">Telefono : </label>
        <input type="text" name="ClienteTelefono_" id="ClienteTelefono_" value=""/>
      </p>
      <p>
        <label for="ClienteMovil_">Movil : </label>
        <input type="text" name="ClienteMovil_" id="ClienteMovil_" value=""/>
      </p>
      <p>
        <label for="ClienteNota_">Nota : </label>
        <textarea name="ClienteNota_" id="ClienteNota_" ></textarea>
      </p>
      <div class="botones">
        <button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" />Registrar </button>
        <button  type="button" id="btnCancelar" onclick="CancelarModal('Modal_Cliente','frmRegistrar_cliente');return false;"><img src="../imgcixphp/ico_cancelar.png" />Cancelar </button>
      </div>
    </fieldset>
  </form>

</div>
