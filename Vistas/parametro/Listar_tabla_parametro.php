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
    <th colspan="3" scope="col" class="tdtitulo">Parámetros</th>
  </tr>
  <tr>
    <td><table border="0" class="tablaInterna tabla">
        <tr>
          <th colspan="2" scope="col">Granulometría</th>
        </tr>
        <tr>
          <td>17 - 18 </td>
          <td><?php echo $ParametroGanulometria17;?></td>
        </tr>
        <tr>
          <td>15 - 16</td>
          <td><?php echo $ParametroGanulometria15;?></td>
        </tr>
      
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
      </th>
    <td><table border="0" class="tablaInterna tabla">
        <tr>
          <th colspan="2"  scope="col"> Defectos </th>
        </tr>
        <tr>
          <td>Primarios</td>
          <td><?php echo $ParametroDefectosPrimarios;?></td>
        </tr>
        <tr>
          <td>secundarios</td>
          <td><?php echo $ParametroDefectosSecundario;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
      </table>
      </th>
    <td><table  border="0" class="tablaInterna tabla">
        <tr>
          <th colspan="2" scope="col">Muestra en Gramos %</th>
        </tr>
        <tr>
          <td>Exportable</td>
          <td><?php echo $ParametroMuestraExportable;?> </td>
        </tr>
        <tr>
          <td>Descarte</td>
          <td><?php echo $ParametroMuestraDescarte;?></td>
        </tr>
        <tr>
          <td>Impurezas</td>
          <td><?php echo $ParametroMuestraImpureza;?></td>
        </tr>
        
      </table></td>
  </tr>
</table>
