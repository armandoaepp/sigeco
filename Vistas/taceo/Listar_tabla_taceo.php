<style>
.tdtitulo {
	text-align: center;
	padding: 0;
	margin: 0;
	font-size: 20px
}
.tablaInterna {
	width: 100%;
	min-width: 250px;
	text-align: center
}
.label {
	width: 12%
}
</style>

<table border="0">
  <tr>
    <th colspan="3" scope="col" class="tdtitulo">Tacéo</th>
  </tr>
  <tr>
    <td><table border="0" class="tablaInterna tabla">
        <tr>
          <td>Fragancia/Aroma : </td>
          <td><?php echo $TaceoFraganciaAroma;?></td>
        </tr>
        <tr>
          <td>Sabor Residual :</td>
          <td><?php echo $TaceoSaborResidual;?></td>
        </tr>
        <tr>
          <td>Acidez : </td>
          <td><?php echo $TaceoAcidez;?></td>
        </tr>
        <tr>
          <td>Cuerpo :</td>
          <td><?php echo $TaceoCuerpo;?></td>
        </tr>
        <tr>
          <td>Balance :</td>
          <td><?php echo $TaceoBalance;?></td>
        </tr>
        <tr>
          <td>Dulsor :</td>
          <td><?php echo $TaceoDulsor;?></td>
        </tr>
      </table></td>
    <td><table border="0" class="tablaInterna tabla">
        <tr>
          <td>Uniformidad :</td>
          <td><?php echo $TaceoUniformidad;?></td>
        </tr>
        <tr>
          <td>Taza Limpia : </td>
          <td><?php echo $TaceoTazaLimpia;?></td>
        </tr>
        <tr>
          <td>Puntaje de Catador : </td>
          <td><?php echo $TaceoPuntajeCatador;?></td>
        </tr>
        <tr>
          <td>Defectos :</td>
          <td><?php echo $TaceoDefectos;?></td>
        </tr>
        <tr>
          <td>Número Tazas : </td>
          <td><?php echo $TaceoNumeroTazas;?></td>
        </tr>
        <tr>
          <td>Catado por : </td>
          <td><?php echo $TaceoCatadopor;?></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td colspan="2"><table  width="100%" border="0" class="tabla">
      <tr>
        <td width="66"><span class="label">Notas :</span></td>
        <td ><?php echo $TaceoNotas;?></td>
      </tr>
  </table>    </tr>
</table>
