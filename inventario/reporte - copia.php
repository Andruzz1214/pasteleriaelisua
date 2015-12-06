<?php
if (isset($_POST['reporte'])=="REPORTE"){
include ('class.ezpdf.php');
$pdf= new Cezpdf ('LETTER');
$pdf->selectFont('fonts/Helvetica.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

$codigo = $_POST['codigo'];
$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("parcial3", $conexion);
$queEmp = "SELECT * FROM notas where codigo_alu = '$codigo' order by materia asc";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				'num'=>'<b>N°</b>',
				'codigo_alu'=>'<b>Codigo</b>',
				'materia'=>'<b>Materia </b>',
				'n1p1'=>'<b>Nota 1</b>',
				'n2p1'=>'<b>Nota 2</b>',
				'examenp1'=>'<b>Examen  1</b>',
				'n1p2'=>'<b>Nota 1</b>',
				'n2p2'=>'<b>Nota 2</b>',
				'examenp2'=>'<b>Examen  2</b>',
				
				
			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
$txttit = "<b>PARCIAL PROGRAMACION IV</b>\n";
$txttit.= "Reporte de Notas \n";

$pdf->ezText($txttit, 12, array ('justification'=>'center'));
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
}
?>
