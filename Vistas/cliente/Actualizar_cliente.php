<!-- para el chosen -->
<link rel="stylesheet" href="../js/chosen/Source/chosen.css" />
<?php
include_once("../pais/controlador_pais.php");
include_once "../cixfrm.php";
 $cixfrm = new CixFRM();	
?>
<div id="divActualizar_cliente">
  <form id="frmActualizar_cliente" name="frmRegistrar_cliente" method="post" action="<?php echo $accionf;?>">
    <fieldset>
      <legend> Actualizar Cliente</legend>
      <p>
        <label for="ClienteId_">Codigo : </label>
        <input type="text" name="ClienteId_" id="ClienteId_"  readonly="readonly" value="<?php echo $ClienteId;?>"/>
      </p>
      <p>
        <label for="ClienteNombre_">Nombre : </label>
        <input type="text" name="ClienteNombre_" id="ClienteNombre_" value="<?php echo $ClienteNombre;?>"/>
      </p>
      <p>
        <label for="ClienteRepresentante_">Representante : </label>
        <input type="text" name="ClienteRepresentante_" id="ClienteRepresentante_" value="<?php echo $ClienteRepresentante;?>"/>
      </p>
      <p>
        <label for="ClienteEmail_">Email : </label>
        <input type="email" name="ClienteEmail_" id="ClienteEmail_" value="<?php echo $ClienteEmail;?>"/>
      </p>
      <p>
        <label for="ClienteFax_">Fax : </label>
        <input type="text" name="ClienteFax_" id="ClienteFax_" value="<?php echo $ClienteFax;?>"/>
      </p>
      <p>
        <label for="ClienteDireccion_">Dirección : </label>
        <input type="text" name="ClienteDireccion_" id="ClienteDireccion_" value="<?php echo $ClienteDireccion;?>"/>
      </p>
      <p>
        <label for="ClienteCodigoPostal_">Cod. Postal : </label>
        <input type="text" name="ClienteCodigoPostal_" id="ClienteCodigoPostal_" value="<?php echo $ClienteCodigoPostal;?>"/>
      </p>

      <p>
        <label for="PaisId_">PaisId : </label>
        <select name="PaisId_" id="PaisId_" data-placeholder="Pais" class="chzn-select"  >
        <?php 		
		$data=CListadoSimple_pais();	
	    $dataPais= $cixfrm->ImprimeCuerpoSelect($data,"PaisId","PaisNombre",$PaisId,true);  
		 echo $dataPais ;
		?>
        </select>
      </p>
            <p>
        <label for="ClienteTelefono_">Telefono : </label>
        <input type="tel"  pattern="[0-9]{6,12}" name="ClienteTelefono_" id="ClienteTelefono_" value="<?php echo $ClienteTelefono;?>"/>
      </p>
      <p>
        <label for="ClienteMovil_">Movil : </label>
        <input type="text" name="ClienteMovil_" id="ClienteMovil_" value="<?php echo $ClienteMovil;?>"/>
      </p>
            <p>
        <label for="ClienteNota_">Nota : </label>
        <textarea name="ClienteNota_" id="ClienteNota_" ><?php echo $ClienteNota;?></textarea>
      </p>
      <div class="botones">
        <button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" />Registrar </button>
        <button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png"/>Cancelar </button>
      </div>
    </fieldset>
  </form>
  
   <script src="../js/chosen/Source/mootools-yui-compressed.js"></script> 
  <script src="../js/chosen/Source/mootools-more-1.4.0.1.js"></script> 
  <script src="../js/chosen/Source/chosen.min.js"></script> 
  <script src="../js/chosen/Source/Locale.es-ES.Chosen.js"></script> 
  <script> $$(".chzn-select").chosen(); $$(".chzn-select-deselect").chosen({allow_single_deselect:true}); </script> 
</div>
