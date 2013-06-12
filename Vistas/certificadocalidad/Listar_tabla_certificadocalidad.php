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
	text-align:center
}
</style>
<table border="0">
  <tr>
    <th colspan="3" scope="col" class="tdtitulo">Análisis Físico</th>
  </tr>
  <tr>
    <td><table border="0" class="tablaInterna tabla"  >
        <tr>
          <th scope="col">Variedad</th>
          <th scope="col"><?php echo $CertificadoCalidadVariedadTotal;?></th>
        </tr>
        <tr>
          <td>Típica</td>
          <td><?php echo $CertificadoCalidadVariedadTipica;?></td>
        </tr>
        <tr>
          <td>Caturra</td>
          <td><?php echo $CertificadoCalidadVariedadCaturra;?></td>
        </tr>
        <tr>
          <td>Bourbon</td>
          <td><?php echo $CertificadoCalidadVariedadBourbon;?></td>
        </tr>
        <tr>
          <td>Catimoro</td>
          <td><?php echo $CertificadoCalidadVariedadCatimoro;?></td>
        </tr>
      </table>
      </th>
    <td><table border="0" class="tablaInterna tabla">
        <tr>
          <th  scope="col">Tipo de Secado</th>
          <th scope="col"><?php echo $CertificadoCalidadTipoSecadoTotal;?></th>
        </tr>
        <tr>
          <td>Al Sol</td>
          <td><?php echo $CertificadoCalidadTipoSecadoAlSol;?></td>
        </tr>
        <tr>
          <td>Mecánico</td>
          <td><?php echo $CertificadoCalidadTipoSecadoMecanico;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
      </th>
    <td><table  border="0" class="tablaInterna tabla">
        <tr>
          <th scope="col">&nbsp;</th>
          <th  scope="col">&nbsp;</th>
        </tr>
        <tr>
          <td>Altitud</td>
          <td><?php echo $CertificadoCalidadAltitud;?>  m.s.n.m.</td>
        </tr>
        <tr>
          <td>Bajo Sombra</td>
          <td><?php echo $CertificadoCalidadBajoSombra;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
