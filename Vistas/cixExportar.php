<?php 
function Exportar_HTML($tabla,$nombreArch="Reporte"){
	//session_start();
	header("Content-type: application/vnd.ms-word");
	header("Content-Disposition: filename=".$nombreArch.".html");
	//$tabla=$_SESSION[$nombreSesion];
	echo $tabla;
}
function Exportar_EXCEL($tabla,$nombreArch="Reporte"){
	//session_start();
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: filename=".$nombreArch.".xls");
	//$tabla=$_SESSION[$nombreSesion];
	echo $tabla;
}
function Exportar_WORD($tabla,$nombreArch="Reporte"){
	//session_start();
	header("Content-type: application/vnd.ms-word");
	header("Content-Disposition: filename=".$nombreArch.".doc");
	//$tabla=$_SESSION[$nombreSesion];
	echo $tabla;
}
function Exportar_PDF($data){
	session_start();
	define('FPDF_FONTPATH','font/');
	include_once('fpdf/fpdf.php');
	//$pdf=new FPDF(); //instanciamos la clase
	$pdf = new FPDF('L','mm','A4');
	$pdf->AddPage(); //agregamos la primera página
	//establecemos la fuente y sus atributos
	$pdf->SetFont('Courier','',11);
	
	/*$tabla=$_SESSION["tabla"];
	
	
	$tabla=str_replace("</td>","/",$tabla);
	$tabla=str_replace("</tr>","*",$tabla);
	$tabla=str_replace("<td>","/",$tabla);
	$tabla=str_replace("<tr>","*",$tabla);
	$tabla=str_replace("<table>","",$tabla);
	$tabla=str_replace("</table>","",$tabla);
	$tabla=str_replace("<div>","",$tabla);
	$tabla=str_replace("</div>","",$tabla);
	$filas=explode("*",$tabla);
	
	for($i=1;$i<count($filas);$i++){
	  if($filas[$i]!=""){
		$celda=explode("/",$filas[$i]);
		for($x=0;$x<count($celda);$x++){
			if($celda[$x]!=""){
		$pdf->Cell(30,8,$celda[$x],1,0,"C");}
		
			}
		 $pdf->Cell(1,8," ",0,1,"C");
	  }
		}
*/
		
		
		///////
		  $cantele = count($data["cuerpo"]);
            if ($cantele > 0) {
                for ($i = 0;$i < $cantele;$i++) {                   
                    for ($z = 0;$z < count($data["columnas"]);$z++) {
                        $columnas = $data["columnas"][$z];                        
                        if (isset($data["cuerpo"][$i]["$columnas"])) {
                           // $tabla.= '<td>&nbsp;&nbsp;' . $data["cuerpo"][$i]["$columnas"] . '&nbsp;&nbsp;   </td>';
							$pdf->Cell(30,8,$data["cuerpo"][$i]["$columnas"],1,0,"C");}
                        }
						//$pdf->Cell(1,8," ",0,1,"C");
						$pdf->Ln();
                    }                  
                }     
		///////
	
	$pdf->Output();
}

?>